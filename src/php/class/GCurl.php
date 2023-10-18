<?php
//===============================================
namespace App;
//===============================================
class GCurl extends GObject {
    //===============================================
    private $m_codeHttp = 0;
    private $m_timeout = 10;
    private $m_url = "";
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function setUrl($_url) {
        $this->m_url = $_url;
    }
    //===============================================
    public function getCodeHttp() {
        return $this->m_codeHttp;
    }
    //===============================================
    public function getHttps() {        
        $lCurl = curl_init();
        curl_setopt($lCurl, CURLOPT_URL, $this->m_url);
        curl_setopt($lCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($lCurl, CURLOPT_HTTPGET, true);
        curl_setopt($lCurl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($lCurl, CURLOPT_TIMEOUT, $this->m_timeout);
        
        $lData = curl_exec($lCurl);
        
        $lError = curl_error($lCurl);
        
        if($lError) {
            $this->m_logs->addError("La connexion au serveur a échoué.");
            $this->m_logs->addError($lError);
        }
        
        $this->m_codeHttp = curl_getinfo($lCurl, CURLINFO_HTTP_CODE);
        
        curl_close($lCurl);        
        return $lData;
    }
    //===============================================
}
//===============================================
?>
