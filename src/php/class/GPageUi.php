<?php
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
        if($lPageId == "") {
            $this->runHome();
        }
        else if($lPageId == "connexion") {
            $this->runLogin();
        }
        else if($lPageId == "connexion/email") {
            $this->runLoginMail();
        }
        else if($lPageId == "inscription") {
            $this->runRegister();
        }
        else if($lPageId == "inscription/email") {
            $this->runRegisterEmail();
        }
        else if($lPageId == "trouver-un-trajet") {
            $this->runSearchTrip();
        }
        else if($lPageId == "proposer-un-trajet") {
            $this->runAddTrip();
        }
        else if($lPageId == "politiques") {
            $this->runPolicy();
        }
        else if($lPageId == "politiques/conditions-generales-utilisation") {
            $this->runTerms();
        }
        else if($lPageId == "politiques/politique-de-confidentialite") {
            $this->runPrivacyPolicy();
        }
        else {
            $this->runError();
        }
    }
    //===============================================
    public function runHome() {
        
    }
    //===============================================
    public function runLogin() {
        $lObj = new GLoginUi();
        $lObj->run();
    }
    //===============================================
    public function runLoginMail() {
        $lObj = new GLoginEmailUi();
        $lObj->run();
    }
    //===============================================
    public function runRegister() {
        $lObj = new GRegisterUi();
        $lObj->run();
    }
    //===============================================
    public function runRegisterEmail() {
        $lObj = new GRegisterEmailUi();
        $lObj->run();
    }
    //===============================================
    public function runSearchTrip() {
        
    }
    //===============================================
    public function runAddTrip() {
        
    }
    //===============================================
    public function runPolicy() {
        $lObj = new GPolicyUi();
        $lObj->run();
    }
    //===============================================
    public function runTerms() {
        $lObj = new GTermsUi();
        $lObj->run();
    }
    //===============================================
    public function runPrivacyPolicy() {
        $lObj = new GPrivacyPolicyUi();
        $lObj->run();
    }
    //===============================================
    public function runError() {
        $lObj = new GErrorUi();
        $lObj->run();
    }
    //===============================================
}
//===============================================
?>