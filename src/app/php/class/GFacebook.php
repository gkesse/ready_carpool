<?php
//===============================================
// https://developers.facebook.com/docs/graph-api
// https://developers.facebook.com/tools/explorer
//===============================================
namespace app;
//===============================================
class GFacebook extends GManager {
    //===============================================
    private $m_id = 0;
    private $m_loginUrl = "";
    //===============================================
    private $m_logoData = null;
    private $m_userData = null;
    private $m_errorData = null;
    private $m_loginData = null;
    //===============================================
    private $m_accessToken = "EABZAtcS6jU2EBOxZBmF2TpFgapf5nAubYtGxK73k23eEklt0bukdy23n0oFmEE9cfZB85QZBDN9xZAZBYTuhub1ZChqJ2EcHb7uFg3ZBxwp7KyXpXMzic5kg5jmDnY5bKbhBH6ZAZBeetfEsJqM5aP4wPlcD7TQSegnbup24iMB0o1ZAbyi2vQcX7thgoiiXGiBH67ZAjpScfsu5uqWas30WUdUZD";
    private $m_appId = "6312782368822113";
    private $m_appSecret = "2c9a0da0027bfca04411831497ed6c96";
    private $m_appVersion = "v18.0";
    private $m_callback = "/services/callback/facebook/login";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    // logo
    //===============================================
    public function getLogoUrl() {
        if(!$this->m_logoData) return "";
        return $this->m_logoData->data->url;
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
        if(!$this->m_logoData) return 0;
        return $this->m_logoData->data->width;
    }
    //===============================================
    public function getLogoHeight() {
        if(!$this->m_logoData) return 0;
        return $this->m_logoData->data->height;
    }
    //===============================================
    public function isLogoSilhouette() {
        if(!$this->m_logoData) return false;
        return $this->m_logoData->data->is_silhouette;
    }
    //===============================================
    // user
    //===============================================
    public function getUserName() {
        if(!$this->m_userData) return "";
        return $this->m_userData->name;
    }
    //===============================================
    public function getUserId() {
        if(!$this->m_userData) return "";
        return $this->m_userData->id;
    }
    //===============================================
    // login
    //===============================================
    public function getLoginUserId() {
        if(!$this->m_loginData) return "";
        return $this->m_loginData["id"];
    }
    //===============================================
    public function getLoginName() {
        if(!$this->m_loginData) return "";
        return $this->m_loginData["name"];
    }
    //===============================================
    public function getLoginFirstName() {
        if(!$this->m_loginData) return "";
        return $this->m_loginData["first_name"];
    }
    //===============================================
    public function getLoginLastName() {
        if(!$this->m_loginData) return "";
        return $this->m_loginData["last_name"];
    }
    //===============================================
    public function getLoginEmail() {
        if(!$this->m_loginData) return "";
        return $this->m_loginData["email"];
    }
    //===============================================
    public function getLoginPhoto() {
        if(!$this->m_loginData) return "";
        return $this->m_loginData["picture"]["url"];
    }
    //===============================================
    public function getLoginUrl() {
        return $this->m_loginUrl;
    }
    //===============================================
    public function getCallback() {
        return sprintf("%s%s", $this->getServer(), $this->m_callback);
    }
    //===============================================
    public function loadLogin() {
        $lMySQL = new \com\GMySQL();
        $lId = $lMySQL->readMap("select * from _facebook where _user_id = ?"
            , [$this->getLoginUserId()]);
        $this->m_logs->addLogs($lMySQL->getLogs());
        $this->m_id = intval($lId);
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function insertLogin() {
        if($this->m_id) return false;
        $lMySQL = new  \com\GMySQL();
        $lMySQL->execQuery("
            insert into _facebook (_user_id, _name, _last_name, _first_name, _email, _photo)
            values (?, ?, ?, ?, ?, ?)"
            , [
                $this->getLoginUserId()
                , $this->getLoginName()
                , $this->getLoginLastName()
                , $this->getLoginFirstName()
                , $this->getLoginEmail()
                , $this->getLoginPhoto()
            ]);
        $this->m_logs->addLogs($lMySQL->getLogs());
        $this->m_id = $lMySQL->getId();
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function updateLogin() {
        if(!$this->m_id) return false;
        $lMySQL = new \com\GMySQL();
        $lMySQL->execQuery("
            update _facebook set
            _user_id = ?
            , _name = ?
            , _last_name = ?
            , _first_name = ?
            , _email = ?
            , _photo = ?
            where _id = ?"
            , [
                $this->getLoginUserId()
                , $this->getLoginName()
                , $this->getLoginLastName()
                , $this->getLoginFirstName()
                , $this->getLoginEmail()
                , $this->getLoginPhoto()
                , $this->m_id
            ]);
        $this->m_logs->addLogs($lMySQL->getLogs());
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    public function saveLogin() {
        $this->loadLogin();
        $this->insertLogin();
        $this->updateLogin();
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    // error
    //===============================================
    public function getErrorMessage() {
        if(!$this->m_errorData) return "";
        return $this->m_errorData->error->message;
    }
    //===============================================
    public function getErrorCode() {
        if(!$this->m_errorData) return 0;
        return $this->m_errorData->error->code;
    }
    //===============================================
    public function getErrorType() {
        if(!$this->m_errorData) return "";
        return $this->m_errorData->error->type;
    }
    //===============================================
    public function getErrorId() {
        if(!$this->m_errorData) return "";
        return $this->m_errorData->error->fbtrace_id;
    }
    //===============================================
    // logo
    //===============================================
    public function loadLogo() {
        $lCurl = new \com\GCurl();
                
        $lCurl->setUrl(sprintf("https://graph.facebook.com/facebook/picture?redirect=false"));
        $lData = $lCurl->getHttps();
        $this->m_logs->addLogs($lCurl->getLogs());
        
        if(!$this->m_logs->hasErrors()) {
            if($lCurl->getCodeHttp() == 200) {
                $this->m_logoData = json_decode($lData);
            }
            else {
                $this->m_errorData = json_decode($lData);
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
        $lCurl = new \com\GCurl();
        
        $lCurl->setUrl(sprintf("https://graph.facebook.com/v18.0/me?access_token=%s", $this->m_accessToken));
        $lData = $lCurl->getHttps();
        $this->m_logs->addLogs($lCurl->getLogs());
        
        if(!$this->m_logs->hasErrors()) {
            if($lCurl->getCodeHttp() == 200) {
                $this->m_userData = json_decode($lData);
            }
            else {
                $this->m_errorData = json_decode($lData);
                $this->m_logs->addError("La conneion à Facebook a échoué.");
                $this->m_logs->addError($this->getErrorMessage());
            }
        }
        
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    // login
    //===============================================
    public function redirectFacebookLogin() {
        if($this->m_id && !$this->m_logs->hasErrors()) {
            $this->setRedirectJs("/services");
        }
        else {
            $this->setFacebookLoginError();
            $this->setRedirectJs("/services/connexion");
        }
    }
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
            $this->setFacebookCancelError();
            $this->setRedirectJs("/services/connexion");
            return false;
        }
        
        if(!$lAccessToken->isLongLived()) {
            $lOAut = $lFBook->getOAuth2Client();
            $lAccessToken = $lOAut->getLongLivedAccessToken($lAccessToken);
        }

        $lResponse = $lFBook->get("/me?fields=id,name,email,first_name,last_name,picture.type(large)", $lAccessToken);
        $this->m_loginData = $lResponse->getGraphNode()->asArray();
        if($this->saveLogin()) {
            $this->setLogin($this->m_id);
        }
        $this->redirectFacebookLogin();
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    // run
    //===============================================
    public function serialize($_code = "facebook") {
        $lDom = new \com\GCode();
        $lDom->createDoc();
        $lDom->addData($_code, "login_url", $this->m_loginUrl, true);
        $lDom->addMap($_code, $this->m_map);
        return $lDom->toString();
    }
    //===============================================
    public function deserialize($_data, $_code = "facebook") {
        parent::deserialize($_data);
        $lDom = new \com\GCode();
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
        $this->loginOn();
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
