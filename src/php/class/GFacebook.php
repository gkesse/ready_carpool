<?php
//===============================================
// https://developers.facebook.com/docs/graph-api
// https://developers.facebook.com/tools/explorer
//===============================================
namespace App;
//===============================================
class GFacebook extends GManager {
    //===============================================
    private $m_loginUrl = "";
    //===============================================
    private $m_logo = null;
    private $m_user = null;
    private $m_error = null;
    //===============================================
    private $m_accessToken = "EABZAtcS6jU2EBOxZBmF2TpFgapf5nAubYtGxK73k23eEklt0bukdy23n0oFmEE9cfZB85QZBDN9xZAZBYTuhub1ZChqJ2EcHb7uFg3ZBxwp7KyXpXMzic5kg5jmDnY5bKbhBH6ZAZBeetfEsJqM5aP4wPlcD7TQSegnbup24iMB0o1ZAbyi2vQcX7thgoiiXGiBH67ZAjpScfsu5uqWas30WUdUZD";
    private $m_appId = "6312782368822113";
    private $m_appSecret = "2c9a0da0027bfca04411831497ed6c96";
    private $m_appVersion = "v18.0";
    private $m_callback = "/callback/facebook/login";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    // logo
    //===============================================
    public function getLogoUrl() {
        if(!$this->m_logo) return "";
        return $this->m_logo->data->url;
    }
    //===============================================
    public function open() {
        $lParams = [
            "app_id" => $this->m_appId,
            "app_secret" => $this->m_appSecret,
            "default_graph_version" => $this->m_appVersion
        ];
        
        $lFBook = new \Facebook\Facebook($lParams);
        return $lFBook;
    }
    //===============================================
    public function getLogoWidth() {
        if(!$this->m_logo) return 0;
        return $this->m_logo->data->width;
    }
    //===============================================
    public function getLogoHeight() {
        if(!$this->m_logo) return 0;
        return $this->m_logo->data->height;
    }
    //===============================================
    public function isLogoSilhouette() {
        if(!$this->m_logo) return false;
        return $this->m_logo->data->is_silhouette;
    }
    //===============================================
    // user
    //===============================================
    public function getUserName() {
        if(!$this->m_user) return "";
        return $this->m_user->name;
    }
    //===============================================
    public function getUserId() {
        if(!$this->m_user) return "";
        return $this->m_user->id;
    }
    //===============================================
    // login
    //===============================================
    public function getLoginUrl() {
        return $this->m_loginUrl;
    }
    //===============================================
    public function getCallback() {
        return sprintf("%s%s", $this->getServer(), $this->m_callback);
    }
    //===============================================
    // error
    //===============================================
    public function getErrorMessage() {
        if(!$this->m_error) return "";
        return $this->m_error->error->message;
    }
    //===============================================
    public function getErrorCode() {
        if(!$this->m_error) return 0;
        return $this->m_error->error->code;
    }
    //===============================================
    public function getErrorType() {
        if(!$this->m_error) return "";
        return $this->m_error->error->type;
    }
    //===============================================
    public function getErrorId() {
        if(!$this->m_error) return "";
        return $this->m_error->error->fbtrace_id;
    }
    //===============================================
    // logo
    //===============================================
    public function loadLogo() {
        $lCurl = new GCurl();
                
        $lCurl->setUrl(sprintf("https://graph.facebook.com/facebook/picture?redirect=false"));
        $lData = $lCurl->getHttps();
        $this->m_logs->addLogs($lCurl->getLogs());
        
        if(!$this->m_logs->hasErrors()) {
            if($lCurl->getCodeHttp() == 200) {
                $this->m_logo = json_decode($lData);
            }
            else {
                $this->m_error = json_decode($lData);
                $this->m_logs->addError("La conneion à Facebook a échoué.");
                $this->m_logs->addError($this->getErrorMessage());
            }
        }
        
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    // user
    //===============================================
    public function loadUser() {
        $lCurl = new GCurl();
        
        $lCurl->setUrl(sprintf("https://graph.facebook.com/v18.0/me?access_token=%s", $this->m_accessToken));
        $lData = $lCurl->getHttps();
        $this->m_logs->addLogs($lCurl->getLogs());
        
        if(!$this->m_logs->hasErrors()) {
            if($lCurl->getCodeHttp() == 200) {
                $this->m_user = json_decode($lData);
            }
            else {
                $this->m_error = json_decode($lData);
                $this->m_logs->addError("La conneion à Facebook a échoué.");
                $this->m_logs->addError($this->getErrorMessage());
            }
        }
        
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    // login
    //===============================================
    public function loginOn() {
        $lFBook = $this->open();
        $lHelper = $lFBook->getRedirectLoginHelper();
        $this->m_loginUrl = $lHelper->getLoginUrl($this->getCallback(), ["email"]);
        $this->setFacebookLogin();
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function loginCallback() {
        $lFBook = $this->open();
        $lHelper = $lFBook->getRedirectLoginHelper();
        $lAccessToken = $lHelper->getAccessToken();
        
        if(!$lAccessToken) {
            $this->setFacebookLoginError();
            $this->setRedirectJs("/connexion");
        }
        
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    // run
    //===============================================
    public function serialize($_code = "facebook") {
        $lDom = new GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "login_url", $this->m_loginUrl, true);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "facebook") {
        parent::deserialize($_data);
        $lDom = new GCode();
        $lDom->loadXml($_data);
        $this->m_loginUrl = $lDom->getData($_code, "login_url", true);
        $lDom->getMap($_code, $this->m_map, $this);
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method== "") {
            $this->m_logs->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "register") {
            $this->onRegister($_data);
        }
        else if($this->m_method == "login") {
            $this->onLogin($_data);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onRegister($_data) {        

        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function onLogin($_data) {
        $this->loginOn();
        return !$this->m_logs->hasErrors();
    }
    //===============================================
 }
//===============================================
?>
