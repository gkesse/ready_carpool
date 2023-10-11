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
    public function isLogin() {
        if(!$this->isSession("user_id")) return false;
        return true;
    }
    //===============================================
    public function redirectLogin($_url = "/") {
        if($this->isLogin()) {
            $this->redirectUrl($_url);
        }
    }
    //===============================================
    public function redirectUrl($_url) {
        $lLocation = sprintf("Location: %s", $_url);
        header($lLocation);
        exit;
    }
    //===============================================
    public function setSession($_key, $_value) {
        $_SESSION[$_key] = $_value;
    }
    //===============================================
    public function usetSession($_key) {
        if(isset($_SESSION[$_key])) unset($_SESSION[$_key]);
    }
    //===============================================
    public function getSession($_key, $_defaultValue = "") {
        if(!isset($_SESSION[$_key])) return $_defaultValue;
        return $_SESSION[$_key];
    }
    //===============================================
    public function isSession($_key) {
        return isset($_SESSION[$_key]);
    }
    //===============================================
    public function toResponse() {
        return $this->m_resp->toString();
    }
    //===============================================
}
//===============================================
?>