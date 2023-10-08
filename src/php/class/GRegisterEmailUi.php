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
        // firstname
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='firstname'>Prénom:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail9' type='text' id='lastname'/></div>\n");
        echo sprintf("</div>\n");
        // lastname
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='lastname'>Nom:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail9' type='text' id='lastname'/></div>\n");
        echo sprintf("</div>\n");
        // birthday
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='gender'>Date de naissance:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'><input class='RegisterEmail10' type='date' id='gender'/></div>\n");
        echo sprintf("</div>\n");
        // gender
        echo sprintf("<div class='RegisterEmail5'>\n");
        echo sprintf("<div class='RegisterEmail6'><label class='RegisterEmail7' for='gender'>Civilité:</label></div>\n");
        echo sprintf("<div class='RegisterEmail8'>\n");
        echo sprintf("<select class='RegisterEmail9' id='gender' name='gender'>\n");
        echo sprintf("<option value='0'>Sélectionner une civilité...</option>\n");
        echo sprintf("<option value='M'>Masculin</option>\n");
        echo sprintf("<option value='F'>Féminin</option>\n");
        echo sprintf("</select>\n");
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