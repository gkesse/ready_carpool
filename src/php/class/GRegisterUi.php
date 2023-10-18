<?php
//===============================================
namespace App;
//===============================================
class GRegisterUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function initAccess() {
        $lObj = $this->m_access;
        $lObj->addAccess();
        $lObj->addAccess("Inscription", "/inscription");
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Register1'>\n");
        echo sprintf("<div class='Register2'>\n");
        //
        echo sprintf("<div class='Register3'>\n");
        echo sprintf("<div class='Register4'>Inscription</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='Register5' onclick='call_server(\"facebook\", \"register\", this)'>\n");
        echo sprintf("<i class='Register6 fa fa-facebook'></i>\n");
        echo sprintf("<div class='Register7'>S'inscrire par Facebook</div>\n");
        echo sprintf("<i class='Register8 fa fa-chevron-right'></i>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<a class='Register5' href='/inscription/email'>\n");
        echo sprintf("<i class='Register6 fa fa-envelope'></i>\n");
        echo sprintf("<div class='Register7'>S'inscrire par email</div>\n");
        echo sprintf("<i class='Register8 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>