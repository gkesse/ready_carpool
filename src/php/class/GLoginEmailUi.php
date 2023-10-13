<?php
//===============================================
class GLoginEmailUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='LoginEmail1' onkeydown='call_server(\"login\", \"keydown\", event)'>\n");
        echo sprintf("<div class='LoginEmail2'>\n");
        // title
        echo sprintf("<div class='LoginEmail3'>\n");
        echo sprintf("<div class='LoginEmail4'>Connexion par email</div>\n");
        echo sprintf("</div>\n");
        // email
        echo sprintf("<div class='LoginEmail5'>\n");
        echo sprintf("<div class='LoginEmail6'><label class='LoginEmail7' for='LoginEmail_Email'>Email:</label></div>\n");
        echo sprintf("<div class='LoginEmail8'><input class='LoginEmail9' type='text' id='LoginEmail_Email' maxlength='50'/></div>\n");
        echo sprintf("</div>\n");
        // password
        echo sprintf("<div class='LoginEmail5'>\n");
        echo sprintf("<div class='LoginEmail6'><label class='LoginEmail7' for='LoginEmail_Password'>Mot de passe:</label></div>\n");
        echo sprintf("<div class='LoginEmail8'><input class='LoginEmail9' type='password' id='LoginEmail_Password' maxlength='50'/></div>\n");
        echo sprintf("</div>\n");
        // buttons
        echo sprintf("<div class='LoginEmail10'>\n");
        echo sprintf("<div class='LoginEmail11'>\n");
        // connect
        echo sprintf("<button class='LoginEmail12' id='LoginEmail_Submit' onclick='call_server(\"login\", \"mail\", this)'>\n");
        echo sprintf("Se connecter\n");
        echo sprintf("</button>\n");
        //
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