<?php   
//===============================================
namespace App;
//===============================================
class GServer extends GManager {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function sendResponse() {
        $this->m_resp->loadData($this->m_logs->serialize());
        $lData = $this->toResponse();
        echo $lData;
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);

        if($this->m_module == "") {
            $this->m_logs->addError("Le module est obligatoire.");
        }
        else if($this->m_module == "header") {
            $this->runHeader($_data);
        }
        else if($this->m_module == "register") {
            $this->runRegister($_data);
        }
        else if($this->m_module == "login") {
            $this->runLogin($_data);
        }
        else if($this->m_module == "facebook") {
            $this->runFacebook($_data);
        }
        else {
            $this->m_logs->addError("Le module est inconnu.");
        }
    }
    //===============================================
    public function runHeader($_data) {
        $lObj = new GHeader();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
    public function runRegister($_data) {
        $lObj = new GRegister();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
    public function runLogin($_data) {
        $lObj = new GLogin();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
    public function runFacebook($_data) {
        $lObj = new GFacebook();
        $lObj->run($_data);
        $this->m_logs->addLogs($lObj->getLogs());
        $this->m_resp->loadData($lObj->serialize());
    }
    //===============================================
 }
//===============================================
?>
