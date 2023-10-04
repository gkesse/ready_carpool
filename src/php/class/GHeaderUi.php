<?php
//===============================================
class GHeaderUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Header1'>\n");
        echo sprintf("<div class='Header2'>\n");
        //
        echo sprintf("<a class='Header3' href='/'>\n");
        echo sprintf("<img class='Header4' src='/data/img/logo.png'/>\n");
        echo sprintf("<div class='Header5'>ReadyHalte</div>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("<div class='Header6'>\n");
        echo sprintf("<a class='Header7' href='/search_trip'><i class='fa fa-search'></i> Trouver un trajet</a>\n");
        echo sprintf("<a class='Header7' href='/add_trip'><i class='fa fa-plus'></i> Proposer un trajet</a>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='Header8'>\n");
        //
        echo sprintf("<button onclick='call_server(\"header\", \"connect_icon\", this)'>\n");
        echo sprintf("<i class='Header9 fa fa-user'></i>\n");
        echo sprintf("<i class='Header10 fa fa-chevron-down'></i>\n");
        echo sprintf("</button>\n");
        //
        echo sprintf("<div class='Header11'>\n");
        //
        echo sprintf("<a class='Header12' href='/login'>\n");
        echo sprintf("<div class='Header13'>Connexion</div>\n");
        echo sprintf("<i class='Header14 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("<a class='Header12' href='/register'>\n");
        echo sprintf("<div class='Header13'>Inscription</div>\n");
        echo sprintf("<i class='Header14 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
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