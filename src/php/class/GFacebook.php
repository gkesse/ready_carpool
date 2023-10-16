<?php   
//===============================================
class GFacebook extends GManager {
    //===============================================
    private $m_logo = null;
    private $m_user = null;
    private $m_error = null;
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
        $lCurl->setUrl("https://graph.facebook.com/facebook/picture?redirect=false");
        $lData = $lCurl->getHttps();
        $this->m_logs->addLogs($lCurl->getLogs());
        
        if(!$this->m_logs->hasErrors()) {
            $this->m_logo = json_decode($lData);
        }
        
        return !$this->m_logs->hasErrors();
    }
    //===============================================
    // user
    //===============================================
    public function loadUser() {
        $lUserId = "kernsky";
        $lAccessToken = "2c9a0da0027bfca04411831497ed6c96";
        $lCurl = new GCurl();
        $lCurl->setUrl("https://graph.facebook.com/%s?access_token=%s", $lUserId, $lAccessToken);
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
    // run
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

        return !$this->m_logs->hasErrors();
    }
    //===============================================
 }
//===============================================
?>
