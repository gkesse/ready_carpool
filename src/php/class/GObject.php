<?php
//===============================================
class GObject {
    //===============================================
    protected $m_logs = null;
    protected $m_dataLogs = null;
    //===============================================
    private $m_isTestJs = false;
    //===============================================
    public function __construct() {
        $this->m_logs = new GLog();
        $this->m_dataLogs = new GLog();
    }
    //===============================================
    public function getLogs() {
        return $this->m_logs;
    }
    //===============================================
    public function getDataLogs() {
        return $this->m_dataLogs;
    }
    //===============================================
    public function setTestJs($_isTestJs) {
        $this->m_isTestJs = $_isTestJs;
    }
    //===============================================
    public function isTestJs() {
        return $this->m_isTestJs;
    }
    //===============================================
}
//===============================================
?>