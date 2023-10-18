<?php
//===============================================
namespace App;
//===============================================
class GLogUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Log1' id='LogModal'>\n");
        echo sprintf("<div class='Log2' id='LogForm'>\n");
        // close
        echo sprintf("<div class='Log3' onclick='call_server(\"logs\", \"close_logs\", this)'>\n");
        echo sprintf("<i class='fa fa-times'></i></div>\n");
        // title
        echo sprintf("<div class='Log4' id='LogTitle'>Logs</div>\n");
        //
        echo sprintf("<div class='Log5'>\n");
        // intro
        echo sprintf("<div class='Log6' id='LogIntro'>Consultez les logs.</div>\n");
        //
        echo sprintf("<div class='Log7'>\n");
        // body
        echo sprintf("<div id='LogBody'></div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("<div class='Log8'>\n");
        // ok
        echo sprintf("<div class='Log9' onclick='call_server(\"logs\", \"close_logs\", this)'>OK</div>\n");
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