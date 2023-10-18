<?php
//===============================================
namespace App;
//===============================================
class GObject {
    //===============================================
    protected $m_logs = null;
    protected $m_dataLogs = null;
    protected $m_resp = null;
    protected $m_access = null;
    protected $m_map = array();
    //===============================================
    private $m_isTestJs = false;
    private $m_redirectJs = "";
    //===============================================
    public function __construct() {
        $this->m_logs = new GLog();
        $this->m_dataLogs = new GLog();
        $this->m_dataLogs = new GLog();
        $this->m_resp = new GCode();
        $this->m_resp->createDoc();
        $this->m_access = new GAccessUi();
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
    public function toResponse() {
        return $this->m_resp->toString();
    }
    //===============================================
    public function getAccess() {
        return $this->m_access;
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
    public function redirectUrl($_url) {
        $lLocation = sprintf("Location: %s", $_url);
        header($lLocation);
        exit;
    }
    //===============================================
    public function redirectPost() {
        if(!empty($_POST) OR !empty($_FILES)) {
            $_SESSION["_save_post_"] = $_POST;
            $_SESSION["_save_files_"] = $_FILES;
            $lUrl = $_SERVER["REQUEST_URI"];
            header("Location: " . $lUrl);
            exit;
        }
        if(isset($_SESSION["_save_post_"])) {
            $_POST = $_SESSION["_save_post_"];
            $_FILES = $_SESSION["_save_files_"];
            unset($_SESSION["_save_post_"], $_SESSION["_save_files_"]);
        }
    }
    //===============================================
    public function getPageId() {
        if(!isset($_GET["pageid"])) return "";
        return $_GET["pageid"];
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
    public function initAccess() {
        $lObj = $this->m_access;
        $lObj->addAccess();
    }
    //===============================================
    public function isTestEnv() {
        if(getenv("ENV_TYPE") == "TEST") return true;
        return false;
    }
    //===============================================
    public function getHttp() {
        if($this->isTestEnv()) return "http://";
        return "https://";
    }
    //===============================================
    public function getServer() {
        $lUrl = "";
        $lUrl .= $this->getHttp();
        $lUrl .= $_SERVER['HTTP_HOST'];
        return $lUrl;
    }
    //===============================================
    public function getUrl() {
        $lUrl = "";
        $lUrl .= $this->getHttp();
        $lUrl .= $_SERVER['HTTP_HOST'];
        $lUrl .=  $_SERVER['REQUEST_URI'];
        return $lUrl;
    }
    //===============================================
    // login
    //===============================================
    public function isLogin() {
        if(!$this->isSession("user_id")) return false;
        return true;
    }
    //===============================================
    public function setLogin($_userId) {
        $this->setSession("user_id", $_userId);
    }
    //===============================================
    public function usetLogin() {
        if($this->isLogin()) {
            $this->usetSession("user_id");
        }
    }
    //===============================================
    public function redirectLogin($_url = "/") {
        if($this->isLogin()) {
            $this->redirectUrl($_url);
        }
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
    // facebook
    //===============================================
    public function setFacebookLogin() {
        $this->setSession("is_facebook_login", true);
        return true;
    }
    //===============================================
    public function setFacebookLoginError() {
        $this->setSession("is_facebook_login_error", true);
        return true;
    }
    //===============================================
    public function isFacebookLogin() {
        if(!$this->isSession("is_facebook_login")) return false;
        return true;
    }
    //===============================================
    public function isFacebookLoginError() {
        if(!$this->isSession("is_facebook_login_error")) return false;
        return true;
    }
    //===============================================
    public function usetFacebookLogin() {
        $this->usetSession("is_facebook_login");
        $this->usetSession("is_facebook_login_error");
    }
    //===============================================
}
//===============================================
?>