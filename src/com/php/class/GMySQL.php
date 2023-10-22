<?php   
//===============================================
namespace com;
//===============================================
class GMySQL extends GObject {
    //===============================================
    private $m_conn = null;
    private $m_errno = 0;
    private $m_id = 0;
    private $m_cols = array();
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function getErrno() {
        return $this->m_errno;
    }
    //===============================================
    public function getCols() {
        return $this->m_cols;
    }
    //===============================================
    public function getId() {
        return $this->m_id;
    }
    //===============================================
    public function open() {
        $lHostname = "127.0.0.1";
        $lUsername = "admin";
        $lPassword = "xKCQY7GiGTVJ4l334QxN87@TKg";
        $lDatabase = "db_readydev";
        $lPort = 3306;
        
        try {
            $lPath = sprintf("mysql:host=%s;dbname=%s;port=%d", $lHostname, $lDatabase, $lPort);
            @$lConn = new \PDO($lPath, $lUsername, $lPassword);
            $lConn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch(\PDOException $e) {
            $this->m_logs->addError("La connexion au seveur de données a échoué.");
            $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $e->getMessage()));
            return false;
        }

        $this->m_conn = $lConn;
        return true;
    }
    //===============================================
    public function execQuery($_sql, $_params = array()) {
        if(!$this->open()) return false;
        
        try {
            $lStmt = $this->m_conn->prepare($_sql);
            $lStmt->execute($_params);
        }
        catch(\PDOException $e) {
            if($e->getCode() == 23000) {
                $this->m_logs->addError("Cette donnée existe déjà.");
                $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $e->getMessage()));
            }
            else {
                $this->m_logs->addError("La connexion au seveur de données a échoué.");
                $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $e->getMessage()));
            }
            $this->m_errno = $e->getCode();
            $this->m_conn = null;
            return false;
        }
        
        $this->m_id = $this->m_conn->lastInsertId();
        $this->m_conn = null;
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function execQueries($_sql, $_params = array()) {
        if(!$this->open()) return false;
        
        try {
            $lStmt = $this->m_conn->prepare($_sql);
            $this->m_conn->beginTransaction();
            foreach ($_params as $lParams) {
                $lStmt->execute($lParams);
            }
            $this->m_conn->commit();
        }
        catch(\PDOException $e) {
            if($e->getCode() == 23000) {
                $this->m_logs->addError("Cette donnée existe déjà.");
            }
            else {
                $this->m_logs->addError("La connexion au seveur de données a échoué.");
                $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $e->getMessage()));
            }
            $this->m_errno = $e->getCode();
            $this->m_conn->rollBack();
            $this->m_conn = null;
            return false;
        }
        
        $this->m_id = $this->m_conn->lastInsertId();
        $this->m_conn = null;
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function readData($_sql, $_params = array()) {
        if(!$this->open()) return false;
        
        $lData = "";
        
        try {
            $lStmt = $this->m_conn->prepare($_sql);
            $lStmt->execute($_params);
            $lStmt->setFetchMode(\PDO::FETCH_ASSOC);
            $lResult = $lStmt->fetchAll();
            
            foreach($lResult as $lRow) {
                foreach($lRow as $lCol => $lValue) {
                    $this->m_cols[] = $lCol;
                    $lData = $lValue;
                    break;
                }
                break;
            }
        }
        catch(\PDOException $e) {
            $this->m_logs->addError("La connexion au seveur de données a échoué.");
            $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $e->getMessage()));
            $this->m_errno = $e->getCode();
        }
        
        $this->m_conn = null;
        return $lData;
    }
    //===============================================
    public function readRow($_sql, $_params = array()) {
        if(!$this->open()) return false;
        
        $lData = array();
        
        try {
            $lStmt = $this->m_conn->prepare($_sql);
            $lStmt->execute($_params);
            $lStmt->setFetchMode(\PDO::FETCH_ASSOC);
            $lResult = $lStmt->fetchAll();
            
            foreach($lResult as $lRow) {
                foreach($lRow as $lCol => $lValue) {
                    $this->m_cols[] = $lCol;
                    $lData[] = $lValue;
                }
                break;
            }
        }
        catch(\PDOException $e) {
            $this->m_logs->addError("La connexion au seveur de données a échoué.");
            $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $e->getMessage()));
            $this->m_errno = $e->getCode();
        }
        
        $this->m_conn = null;
        return $lData;
    }
    //===============================================
    public function readCol($_sql, $_params = array()) {
        if(!$this->open()) return false;
        
        $lData = array();
        $lResult = array();
        
        try {
            $lStmt = $this->m_conn->prepare($_sql);
            $lStmt->execute($_params);
            $lStmt->setFetchMode(\PDO::FETCH_ASSOC);
            $lResult = $lStmt->fetchAll();
            $lOneOnly = true;
            
            foreach($lResult as $lRow) {
                $lDataRow = array();
                foreach($lRow as $lCol => $lValue) {
                    if($lOneOnly) {
                        $this->m_cols[] = $lCol;
                    }
                    $lDataRow[] = $lValue;
                    break;
                }
                $lData[] = $lDataRow;
                $lOneOnly = false;
            }
        }
        catch(\PDOException $e) {
            $this->m_logs->addError("La connexion au seveur de données a échoué.");
            $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $e->getMessage()));
            $this->m_errno = $e->getCode();
        }

        $this->m_conn = null;
        return $lData;
    }
    //===============================================
    public function readMap($_sql, $_params = array()) {
        if(!$this->open()) return false;
        
        $lData = array();
        
        try {
            $lStmt = $this->m_conn->prepare($_sql);
            $lStmt->execute($_params);
            $lStmt->setFetchMode(\PDO::FETCH_ASSOC);
            $lResult = $lStmt->fetchAll();
            
            foreach($lResult as $lRow) {
                $lDataRow = array();
                foreach($lRow as $lCol => $lValue) {
                    if(empty($lData)) {
                        $this->m_cols[] = $lCol;
                    }
                    $lDataRow[] = $lValue;
                }
                $lData[] = $lDataRow;
            }
        }
        catch(\PDOException $e) {
            $this->m_logs->addError("La connexion au seveur de données a échoué.");
            $this->m_dataLogs->addError(sprintf("Erreur MySQL: %s", $e->getMessage()));
            $this->m_errno = $e->getCode();
        }

        $this->m_conn = null;
        return $lData;
    }
    //===============================================
 }
//===============================================
?>
