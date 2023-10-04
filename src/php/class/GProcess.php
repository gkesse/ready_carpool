<?php
//===============================================
class GProcess extends GObject {
    //===============================================
    private $m_method = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_env, $_module, $_method) {
        $this->m_method = $_method;
        
        if($_env == "") {
            $this->m_logs->addError("L'environnement est obligatoire.");
        }
        else if($_env == "test") {
            $this->runTest($_module, $_method);
        }
        else {
            $this->m_logs->addError("L'environnement est inconnu.");
        }
    }
    //===============================================
    public function runTest($_module, $_method) {
        $lObj = new GTest();
        $lObj->run($_module, $_method);
        $this->setTestJs($lObj->isTestJs());
        $this->m_logs->addLogs($lObj->getLogs());
    }
    //===============================================
    public function runJs() {
        if($this->isTestJs()) {
            echo sprintf("<script>call_server('test', '%s');</script>\n", $this->m_method);
        }
    }
    //===============================================
}
//===============================================
?>