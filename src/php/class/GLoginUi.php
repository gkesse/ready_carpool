<?php
//===============================================
class GLoginUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function initAccess() {
        $lObj = $this->m_access;
        $lObj->addAccess();
        $lObj->addAccess("Connexion", "/connexion");
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Login1'>\n");
        echo sprintf("<div class='Login2'>\n");
        //
        echo sprintf("<div class='Login3'>\n");
        echo sprintf("<div class='Login4'>Connexion</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='Login5' onclick='call_server(\"login\", \"connect_facebook\", this)'>\n");
        echo sprintf("<i class='Login6 fa fa-facebook'></i>\n");
        echo sprintf("<div class='Login7'>Se connecter par Facebook</div>\n");
        echo sprintf("<i class='Login8 fa fa-chevron-right'></i>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<a class='Login5' href='/connexion/email'>\n");
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