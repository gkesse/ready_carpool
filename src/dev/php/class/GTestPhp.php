<?php
//===============================================
namespace dev;
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
        else if($_method == "test") {
            $this->runTest($_module, $_method);
        }
        else if($_method == "page") {
            $this->runPage($_module, $_method);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function runTest($_module, $_method) {

    }
    //===============================================
    public function runPage($_module, $_method) {
        $lObj = new GPageUi();
        $lObj->run();
        $this->setRedirectJs($lObj->getRedirectJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
}
//===============================================
?>