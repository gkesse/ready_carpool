<?php
//===============================================
namespace App;
//===============================================
class GLoaderUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Loader1' id='LoaderModal'>\n");
        echo sprintf("<div class='Loader2' id='LoaderBody'>\n");
        echo sprintf("<div class='Loader3'>\n");
        echo sprintf("<div class='Loader4'>\n");
        //
        echo sprintf("<div class='Loader5'></div>\n");
        echo sprintf("<span class='Loader6'>Loading...</span>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>