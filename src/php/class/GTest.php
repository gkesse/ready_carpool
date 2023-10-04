<?php
//===============================================
class GTest extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_module, $_method) {
        if($_module == "") {
            $this->m_logs->addError("Le module est obligatoire.");
        }
        else if($_module == "php") {
            $this->runPhp($_module, $_method);
        }
        else if($_module == "js") {
            $this->runJs($_module, $_method);
        }
        else {
            $this->m_logs->addError("Le module est inconnu.");
        }
    }
    //===============================================
    public function runPhp($_module, $_method) {
        $lObj = new GTestPhp();
        $lObj->run($_module, $_method);
    }
    //===============================================
    public function runJs($_module, $_method) {
        $this->setTestJs(true);
    }
    //===============================================
}
//===============================================
?>