<?php   
//===============================================
namespace app;
//===============================================
class GLogin extends GManager {
    //===============================================
    private $m_id = 0;
    private $m_email = "";
    private $m_password = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function loadUser() {
        $lEmail = strtolower($this->m_email);
        $lPassword = sprintf("%s|%s", $lEmail, $this->m_password);
        $lPassword = md5($lPassword);
        $lMySQL = new GMySQL();
        $lId = $lMySQL->readData(sprintf("
        select _id from _user
        where 1 = 1
        and _email = '%s'
        and _password = '%s'", $lEmail, $lPassword));
        $this->m_logs->addLogs($lMySQL->getLogs());
        $this->m_id = intval($lId);
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function loginOn() {
        if($this->isLogin()) {
            $this->m_logs->addError("Vous êtes déjà connecté.");
            return false;
        }
        if($this->m_id == 0) {
            $this->m_logs->addError("Les identifiants sont incorrects.");
            return false;
        }
        $this->setLogin($this->m_id);
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function serialize($_code = "login") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "email", $this->m_email);
        $lDom->addData($_code, "password", $this->m_password);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "login") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = intval($lDom->getData($_code, "id"));
        $this->m_email = $lDom->getData($_code, "email");
        $this->m_password = $lDom->getData($_code, "password");
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method== "") {
            $this->m_logs->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "mail") {
            $this->onMail($_data);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onMail($_data) {
        // email
        if($this->m_email == "") {
            $this->m_logs->addError("L'email est obligatoire.");
            return false;
        }
        else if(strlen($this->m_email) < 8) {
            $this->m_logs->addError("L'email est trop petit.");
            return false;
        }
        else if(strlen($this->m_email) > 50) {
            $this->m_logs->addError("L'email est trop grand.");
            return false;
        }
        else if(!filter_var($this->m_email, FILTER_VALIDATE_EMAIL)) {
            $this->m_logs->addError("L'email est invalide.");
            return false;
        }
        // password
        else if($this->m_password == "") {
            $this->m_logs->addError("Le mot de passe est obligatoire.");
            return false;
        }
        else if(strlen($this->m_password) < 8) {
            $this->m_logs->addError("Le mot de passe est trop petit.");
            return false;
        }
        else if(strlen($this->m_password) > 50) {
            $this->m_logs->addError("Le mot de passe est trop grand.");
            return false;
        }
        
        if(!$this->loadUser()) return false;
        if(!$this->loginOn()) return false;
        return !$this->m_logs->hasErrors();
    }
    //===============================================
 }
//===============================================
?>
