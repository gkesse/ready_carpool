<?php
//===============================================
class GObject {
    //===============================================
    protected $m_logs = null;
    protected $m_dataLogs = null;
    protected $m_resp = null;
    protected $m_map = array();
    //===============================================
    private $m_isTestJs = false;
    //===============================================
    public function __construct() {
        $this->m_logs = new GLog();
        $this->m_dataLogs = new GLog();
        $this->m_dataLogs = new GLog();
        $this->m_resp = new GCode();
        $this->m_resp->createDoc();
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
    public function toResponse() {
        return $this->m_resp->toString();
    }
    //===============================================
}
//===============================================
?>