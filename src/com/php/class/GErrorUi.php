<?php
//===============================================
namespace com;
//===============================================
class GErrorUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Error1'>\n");
        echo sprintf("<div class='Error2'>\n");
        //
        echo sprintf("<div class='Error3'>\n");
        echo sprintf("<i class='Error4 fa fa-exclamation-triangle'></i>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='Error5'>\n");
        echo sprintf("<div class='Error6'>Désolé !</div>\n");
        echo sprintf("<div class='Error7'>La page recherchée est introuvable !</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>