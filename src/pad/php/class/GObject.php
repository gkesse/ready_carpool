<?php
//===============================================
namespace pad;
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
        $this->m_logs = new \com\GLog();
        $this->m_dataLogs = new \com\GLog();
        $this->m_dataLogs = new \com\GLog();
        $this->m_resp = new \com\GCode();
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
    // session
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
    public function redirectUrl($_url = "/") {
        $lLocation = sprintf("Location: %s", $_url);
        header($lLocation);
        exit;
    }
    //===============================================
    // error
    //===============================================
    public function setErrorCode($_errorCode) {
        $this->setSession("error_code", $_errorCode);
    }
    //===============================================
    public function getErrorCode() {
        return $this->getSession("error_code");
    }
    //===============================================
    public function usetErrorCode() {
        return $this->usetSession("error_code");
    }
    //===============================================
    // login
    //===============================================
    public function isLogin() {
        if(!$this->isSession("login_id")) return false;
        return true;
    }
    //===============================================
    public function setLogin($_loginId) {
        if($_loginId == 0) return;
        $this->setSession("login_id", $_loginId);
    }
    //===============================================
    public function setLoginType($_loginType) {
        $this->setSession("login_type", $_loginType);
    }
    //===============================================
    public function getLoginType() {
        return $this->getSession("login_type");
    }
    //===============================================
    public function usetLogin() {
        if($this->isLogin()) {
            $this->usetSession("login_id");
        }
    }
    //===============================================
    public function redirectLogin($_url = "/") {
        if($this->isLogin()) {
            $this->redirectUrl($_url);
        }
    }
    //===============================================
    // facebook
    //===============================================
    public function setFacebookLogin() {
        $this->setSession("is_facebook_login", true);
    }
    //===============================================
    public function setFacebookLoginType() {
        $this->setLoginType("facebook");
    }
    //===============================================
    public function setFacebookCancelError() {
        $this->setErrorCode("facebook_cancel_error");
    }
    //===============================================
    public function setFacebookLoginError() {
        $this->setErrorCode("facebook_login_error");
    }
    //===============================================
    public function isFacebookLogin() {
        return $this->isSession("is_facebook_login");
    }
    //===============================================
    public function isFacebookLoginType() {
        return ($this->getLoginType() == "facebook");
    }
    //===============================================
    public function isFacebookCancelError() {
        return ($this->getErrorCode() == "facebook_cancel_error");
    }
    //===============================================
    public function isFacebookLoginError() {
        return ($this->getErrorCode() == "facebook_login_error");
    }
    //===============================================
    public function usetFacebookLogin() {
        $this->usetSession("is_facebook_login");
        $this->usetErrorCode();
    }
    //===============================================
}
//===============================================
?>