<?php   
//===============================================
namespace App;
//===============================================
class GRegister extends GManager {
    //===============================================
    private $m_id = 0;
    private $m_email = "";
    private $m_password = "";
    private $m_confirm = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function insertUser() {
        $lEmail = strtolower($this->m_email);
        $lPassword = sprintf("%s|%s", $lEmail, $this->m_password);
        $lPassword = md5($lPassword);
        $lMySQL = new GMySQL();
        $lMySQL->execQuery(sprintf("
            insert into _user (_email, _password)
            values ('%s', '%s')", $lEmail, $lPassword));
        $this->m_logs->addLogs($lMySQL->getLogs());
        $this->m_id = $lMySQL->getId();
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function loginOn() {
        if($this->isLogin()) {
            $this->m_logs->addError("Vous êtes déjà connecté.");
            return false;
        }
        if($this->m_id == 0) return false;
        $this->setLogin($this->m_id);
        return true;
    }
    //===============================================
    public function serialize($_code = "register") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "id", $this->m_id);
        $lDom->addData($_code, "email", $this->m_email);
        $lDom->addData($_code, "password", $this->m_password);
        $lDom->addData($_code, "confirm", $this->m_confirm);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "register") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_id = intval($lDom->getData($_code, "id"));
        $this->m_email = $lDom->getData($_code, "email");
        $this->m_password = $lDom->getData($_code, "password");
        $this->m_confirm = $lDom->getData($_code, "confirm");
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
        // confirm
        else if($this->m_confirm == "") {
            $this->m_logs->addError("La confirmation est obligatoire.");
            return false;
        }
        else if(strlen($this->m_confirm) < 8) {
            $this->m_logs->addError("La confirmation est trop petite.");
            return false;
        }
        else if(strlen($this->m_confirm) > 50) {
            $this->m_logs->addError("La confirmation est trop grande.");
            return false;
        }
        // compare
        else if($this->m_password != $this->m_confirm) {
            $this->m_logs->addError("Le mot de passe est différent de la confirmation.");
            return false;
        }
        
        if(!$this->insertUser()) return false;
        if(!$this->loginOn()) return false;
        return true;
    }
    //===============================================
 }
//===============================================
?>
