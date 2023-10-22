<?php
//===============================================
namespace app;
//===============================================
class GLoginUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function initAccess() {
        $lObj = $this->m_access;
        $lObj->addAccess("Services", "/services");
        $lObj->addAccess("Connexion", "/services/connexion");
    }
    //===============================================
    public function checkFacebook() {
        if($this->isFacebookLogin()) {
            if($this->isFacebookCancelError()) {
                $this->m_logs->addError("La connexion par Facebook a été annulée.");
            }
            else if($this->isFacebookLoginError()) {
                $this->m_logs->addError("La connexion par Facebook a été échoué.");
            }
            $this->usetFacebookLogin();
        }
    }
    //===============================================
    public function run() {
        $this->checkFacebook();
        echo sprintf("<div class='Login1'>\n");
        echo sprintf("<div class='Login2'>\n");
        //
        echo sprintf("<div class='Login3'>\n");
        echo sprintf("<div class='Login4'>Connexion</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='Login5' onclick='call_server(\"facebook\", \"login\", this)'>\n");
        echo sprintf("<i class='Login6 fa fa-facebook'></i>\n");
        echo sprintf("<div class='Login7'>Se connecter par Facebook</div>\n");
        echo sprintf("<i class='Login8 fa fa-chevron-right'></i>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<a class='Login5' href='/services/connexion/email'>\n");
        echo sprintf("<i class='Login6 fa fa-envelope'></i>\n");
        echo sprintf("<div class='Login7'>Se connecter par email</div>\n");
        echo sprintf("<i class='Login8 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>