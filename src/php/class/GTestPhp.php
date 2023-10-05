<?php
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
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function runLog($_module, $_method) {
        $lLogUi = new GLogUi();
        $lLogUi->run();
    }
    //===============================================
    public function runHeader($_module, $_method) {
        $lHeaderUi = new GHeaderUi();
        $lHeaderUi->run();
    }
    //===============================================
    public function runError($_module, $_method) {
        $lErrorUi = new GErrorUi();
        $lErrorUi->run();
    }
    //===============================================
    public function runPage($_module, $_method) {
        $lPageUi = new GPageUi();
        $lPageUi->run();
    }
    //===============================================
}
//===============================================
?>