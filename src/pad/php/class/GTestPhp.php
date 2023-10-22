<?php
//===============================================
namespace pad;
//===============================================
class GTestPhp extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_module, $_method) {
        if($_method == "") {
            $this->m_logs->addError("La méthode est obligatoire.");
        }
        else if($_method == "log") {
            $this->runLog($_module, $_method);
        }
        else if($_method == "header") {
            $this->runHeader($_module, $_method);
        }
        else if($_method == "error") {
            $this->runError($_module, $_method);
        }
        else if($_method == "page") {
            $this->runPage($_module, $_method);
        }
        else if($_method == "facebook") {
            $this->runFacebook($_module, $_method);
        }
        else if($_method == "privacy_policy") {
            $this->runPrivacyPolicy($_module, $_method);
        }
        else if($_method == "mysql") {
            $this->runMySQL($_module, $_method);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function runLog($_module, $_method) {
        $lObj = new \com\GLogUi();
        $lObj->run();
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runHeader($_module, $_method) {
        $lObj = new GHeaderUi();
        $lObj->run();
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runError($_module, $_method) {
        $lObj = new \com\GErrorUi();
        $lObj->run();
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runPage($_module, $_method) {
        $lObj = new GPageUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runFacebook($_module, $_method) {
        $lAction = "5";
        
        //===============================================
        // logo
        //===============================================
        if($lAction == "1") {
            $lObj = new \com\GFacebook();
            $lObj->loadLogo();
            $this->m_logs->addLogs($lObj->getLogs());
            echo sprintf("<div class='Test1'>");
            echo sprintf("<div>LogoUrl-----------: <img src='%s'/></div>", $lObj->getLogoUrl());
            echo sprintf("<div>LogoWidth---------: %d</div>", $lObj->getLogoWidth());
            echo sprintf("<div>LogoHeight--------: %d</div>", $lObj->getLogoHeight());
            echo sprintf("<div>isLogoSilhouette--: %d</div>", $lObj->isLogoSilhouette());
            echo sprintf("</div>");
        }
        //===============================================
        // user
        //===============================================
        else if($lAction == "2") {
            $lObj = new \com\GFacebook();
            $lObj->loadUser();
            $this->m_logs->addLogs($lObj->getLogs());
            echo sprintf("<div class='Test1'>");
            echo sprintf("<div>UserId-----: %d</div>", $lObj->getUserId());
            echo sprintf("<div>UserName---: %s</div>", $lObj->getUserName());
            echo sprintf("</div>");
        }
        //===============================================
        // login
        //===============================================
        else if($lAction == "3") {
            $lObj = new \com\GFacebook();
            $lObj->loginOn();
            $this->m_logs->addLogs($lObj->getLogs());
            echo sprintf("<div class='Test1'>");
            echo sprintf("<div>LoginUrl-----: %s</div>", $lObj->getLoginUrl());
            echo sprintf("</div>");
        }
        //===============================================
        // server
        //===============================================
        else if($lAction == "4") {
            echo sprintf("<div class='Test1'>");
            echo sprintf("<div>ENV_TYPE-----: %s</div>", getenv("ENV_TYPE"));
            echo sprintf("<div>Server-------: %s</div>", $this->getServer());
            echo sprintf("<div>Url----------: %s</div>", $this->getUrl());
            echo sprintf("</div>");
        }
        //===============================================
        // callback
        //===============================================
        else if($lAction == "5") {
            $lObj = new \com\GFacebook();
            $lObj->loginCallback();
            echo sprintf("<div class='Test1'>");
            echo sprintf("<div>LoginUserId-----: %s</div>", $lObj->getLoginUserId());
            echo sprintf("<div>LoginName-------: %s</div>", $lObj->getLoginName());
            echo sprintf("<div>LoginFirstName--: %s</div>", $lObj->getLoginFirstName());
            echo sprintf("<div>LastName--------: %s</div>", $lObj->getLoginLastName());
            echo sprintf("<div>LoginEmail------: %s</div>", $lObj->getLoginEmail());
            echo sprintf("<div>LoginPhoto------: %s</div>", $lObj->getLoginPhoto());
            echo sprintf("</div>");
        }
    }
    //===============================================
    public function runPrivacyPolicy($_module, $_method) {
        $lObj = new GPrivacyPolicyUi();
        $lObj->run();
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runMySQL($_module, $_method) {
        $lAction = 3;
        
        if($lAction == 1) {
            $lObj = new \com\GMySQL();
            $lData = $lObj->readMap("select * from _user where _email = 'ooo' or '1' = '1'");
            echo "<pre style='text-align:left;'>"; var_dump($lData); echo "</pre>";
            $this->m_logs->addLogs($lObj->getLogs());
        }
        else if($lAction == 2) {
            $lObj = new \com\GMySQL();
            $lData = $lObj->readMap(sprintf("select * from _user where _email = '%s'", "' or '1' = '1"));
            echo "<pre style='text-align:left;'>"; var_dump($lData); echo "</pre>";
            $this->m_logs->addLogs($lObj->getLogs());
        }
        else if($lAction == 3) {
            $lObj = new \com\GMySQL();
            $lData = $lObj->readMap("select * from _user where _email = '?'", ["' or '1' = '1"]);
            echo "<pre style='text-align:left;'>"; var_dump($lData); echo "</pre>";
            $this->m_logs->addLogs($lObj->getLogs());
        }
    }
    //===============================================
}
//===============================================
?>