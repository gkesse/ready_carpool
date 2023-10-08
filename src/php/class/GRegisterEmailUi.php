<?php
//===============================================
class GRegisterEmailUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='RegisterEmail1'>\n");
        echo sprintf("<div class='RegisterEmail2'>\n");
        // title
        echo sprintf("<div class='RegisterEmail3'>\n");
        echo sprintf("<div class='RegisterEmail4'>Inscription par email</div>\n");
        echo sprintf("</div>\n");
        // email
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='email'>Email:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail9' type='text' id='email'/></div>\n");
        echo sprintf("</div>\n");
        // password
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='password'>Mot de passe:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail9' type='password' id='password'/></div>\n");
        echo sprintf("</div>\n");
        // confirm
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='confirm'>Confirmation:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail9' type='password' id='confirm'/></div>\n");
        echo sprintf("</div>\n");
        // buttons
        echo sprintf("<div class='RegisterEmail10'>\n");
        echo sprintf("<div class='RegisterEmail11'>\n");
        //
        echo sprintf("<button class='RegisterEmail12'>\n");
        echo sprintf("<i class='RegisterEmail13 fa fa-user'></i>\n");
        echo sprintf("<span class='RegisterEmail14'>Créer</span>\n");
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