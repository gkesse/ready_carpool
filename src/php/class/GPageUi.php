<?php
//===============================================
class GPageUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
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
        else if($lPageId == "inscription") {
            $this->runRegister();
        }
        else if($lPageId == "trouver-un-trajet") {
            $this->runSearchTrip();
        }
        else if($lPageId == "proposer-un-trajet") {
            $this->runAddTrip();
        }
        else {
            $this->runError();
        }
    }
    //===============================================
    public function getPageId() {
        if(!isset($_GET["pageid"])) return "";
        return $_GET["pageid"];
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
    public function runRegister() {
        
    }
    //===============================================
    public function runSearchTrip() {
        
    }
    //===============================================
    public function runAddTrip() {
        
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