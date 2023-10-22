<?php
//===============================================
namespace com;
//===============================================
class GObject {
    //===============================================
    protected $m_logs = null;
    protected $m_dataLogs = null;
    //===============================================
    private $m_redirectJs = false;
    //===============================================
    public function __construct() {
        $this->m_logs = new GLog();
        $this->m_dataLogs = new GLog();
    }
    //===============================================
    // logs
    //===============================================
    public function getLogs() {
        return $this->m_logs;
    }
    //===============================================
    public function getDataLogs() {
        return $this->m_dataLogs;
    }
    //===============================================
    // redirect
    //===============================================
    public function setRedirectJs($_redirectJs = "/") {
        $this->m_redirectJs = $_redirectJs;
    }
    //===============================================
    public function getRedirectJs() {
        return $this->m_redirectJs;
    }
    //===============================================
}
//===============================================
?>