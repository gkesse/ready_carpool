<?php
//===============================================
namespace pad;
//===============================================
class GHomeUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Home1'>\n");
        echo sprintf("<div class='Home2'>\n");
        //
        echo sprintf("<div class='Home3'>\n");
        echo sprintf("<div class='Home4'>Menu principal</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<a class='Home5' href='/home'>\n");
        echo sprintf("<i class='Home6 fa fa-book'></i>\n");
        echo sprintf("<div class='Home7'>Tutoriels</div>\n");
        echo sprintf("<i class='Home8 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("<a class='Home5' href='/services'>\n");
        echo sprintf("<i class='Home6 fa fa-briefcase'></i>\n");
        echo sprintf("<div class='Home7'>Services</div>\n");
        echo sprintf("<i class='Home8 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>