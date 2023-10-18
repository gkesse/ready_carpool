<?php
//===============================================
namespace App;
//===============================================
class GRegisterEmailUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function initAccess() {
        $lObj = $this->m_access;
        $lObj->addAccess();
        $lObj->addAccess("Inscription", "/inscription");
        $lObj->addAccess("Email", "/inscription/emial");
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='RegisterEmail1' onkeydown='call_server(\"register\", \"keydown\", event)'>\n");
        echo sprintf("<div class='RegisterEmail2'>\n");
        // title
        echo sprintf("<div class='RegisterEmail3'>\n");
        echo sprintf("<div class='RegisterEmail4'>Inscription par email</div>\n");
        echo sprintf("</div>\n");
        // email
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='RegisterEmail_Email'>Email:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail9' type='text' id='RegisterEmail_Email' maxlength='50'/></div>\n");
        echo sprintf("</div>\n");
        // password
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='RegisterEmail_Password'>Mot de passe:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail9' type='password' id='RegisterEmail_Password' maxlength='50'/></div>\n");
        echo sprintf("</div>\n");
        // confirm
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='RegisterEmail_Confirm'>Confirmation:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail9' type='password' id='RegisterEmail_Confirm' maxlength='50'/></div>\n");
        echo sprintf("</div>\n");
        // buttons
        echo sprintf("<div class='RegisterEmail10'>\n");
        echo sprintf("<div class='RegisterEmail11'>\n");
        // create
        echo sprintf("<button class='RegisterEmail12' id='RegisterEmail_Submit' onclick='call_server(\"register\", \"mail\", this)'>\n");
        echo sprintf("Créer mon compte\n");
        echo sprintf("</button>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='RegisterEmail13'>\n");
        echo sprintf("<div class='RegisterEmail14'>\n");
        echo sprintf("<a href='/connexion'>Se connecter</a>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>