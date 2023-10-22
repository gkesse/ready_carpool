<?php
//===============================================
namespace pad;
//===============================================
class GPageUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function redirectPage() {
        $lPageId = $this->getPageId();
        if($lPageId == "connexion") {
            $this->redirectLogin();
        }
        else if($lPageId == "connexion/email") {
            $this->redirectLogin();
        }
        else if($lPageId == "inscription") {
            $this->redirectLogin();
        }
        else if($lPageId == "inscription/email") {
            $this->redirectLogin();
        }
    }
    //===============================================
    public function run() {
        $lPageId = $this->getPageId();
        
        //===============================================
        // home
        //===============================================
        if($lPageId == "") {
            $this->runHome();
        }
        //===============================================
        // login
        //===============================================
        else if($lPageId == "connexion") {
            $this->runLogin();
        }
        else if($lPageId == "connexion/email") {
            $this->runLoginMail();
        }
        //===============================================
        // register
        //===============================================
        else if($lPageId == "inscription") {
            $this->runRegister();
        }
        else if($lPageId == "inscription/email") {
            $this->runRegisterEmail();
        }
        //===============================================
        // policy
        //===============================================
        else if($lPageId == "politiques") {
            $this->runPolicy();
        }
        else if($lPageId == "politiques/conditions-generales-utilisation") {
            $this->runTerms();
        }
        else if($lPageId == "politiques/politique-de-confidentialite") {
            $this->runPrivacyPolicy();
        }
        //===============================================
        // facebook
        //===============================================
        else if($lPageId == "callback/facebook/login" && $this->isFacebookLogin()) {
            $this->runCallbackFacebookLogin();
        }
        //===============================================
        else {
            $this->runError();
        }
    }
    //===============================================
    // home
    //===============================================
    public function runHome() {
        $lObj = new GHomeUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    // login
    //===============================================
    public function runLogin() {
        $lObj = new GLoginUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runLoginMail() {
        $lObj = new GLoginEmailUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    // register
    //===============================================
    public function runRegister() {
        $lObj = new GRegisterUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runRegisterEmail() {
        $lObj = new GRegisterEmailUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    // policy
    //===============================================
    public function runPolicy() {
        $lObj = new GPolicyUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runTerms() {
        $lObj = new GTermsUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runPrivacyPolicy() {
        $lObj = new GPrivacyPolicyUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    // facebook
    //===============================================
    public function runCallbackFacebookLogin() {
        $lObj = new GFacebook();
        $lObj->loginCallback();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    // error
    //===============================================
    public function runError() {
        $lObj = new \com\GErrorUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
}
//===============================================
?>