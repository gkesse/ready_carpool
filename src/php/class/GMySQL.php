<?php   
//===============================================
class GMySQL extends GObject {
    //===============================================
    private $m_conn = null;
    private $m_errno = 0;
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function getErrno() {
        return $this->m_errno;
    }
    //===============================================
    public function open() {
        $lHostname = "127.0.0.1";
        $lUsername = "admin";
        $lPassword = "xKCQY7GiGTVJ4l334QxN87@TKg";
        $lDatabase = "db_carpool";
        $lPort = 3306;
        
        @$lConn = new mysqli($lHostname, $lUsername, $lPassword, $lDatabase, $lPort);

        if ($lConn->connect_error) {
            $this->m_logs->addError("La connexion au seveur de données a échoué.");
            $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $lConn->connect_error));
            return false;
        }
        $this->m_conn = $lConn;
        return true;
    }
    //===============================================
    public function execQuery($_sql) {
        if(!$this->open()) return false;
        if(!$this->m_conn->query($_sql)) {
            if($this->m_conn->errno == 1062) {
                $this->m_logs->addError("Cette donnée existe déjà.");
            }
            else {
                $this->m_logs->addError("La connexion au seveur de données a échoué.");
                $this->m_logs->addError(sprintf("Erreur MySQL: %s", $this->m_conn->errno));
            }
            return false;
        }
        return true;
    }
    //===============================================
 }
//===============================================
?>
