<?php
//===============================================
namespace dev;
//===============================================
class GHeaderUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run() {
        $lApp = new GApp();
        //
        echo sprintf("<div class='Header1'>\n");
        echo sprintf("<div class='Header2'>\n");
        //
        echo sprintf("<a class='Header3' href='/home'>\n");
        echo sprintf("<img class='Header4' src='/com/data/img/icon.png'/>\n");
        echo sprintf("<div class='Header5'>%s</div>\n", $lApp->toSiteName());
        echo sprintf("</a>\n");
        //
        echo sprintf("<div class='Header8'>\n");
        //
        echo sprintf("<button class='HeaderConnectIcon' onclick='call_server(\"header\", \"connect_icon\", this)'>\n");
        echo sprintf("<i class='HeaderConnectIcon Header9 fa fa-user'></i>\n");
        echo sprintf("<i class='HeaderConnectIcon Header10 fa fa-chevron-down' id='HeaderConnectChevron'></i>\n");
        echo sprintf("</button>\n");
        //
        echo sprintf("<div class='Header11 HeaderMenu'>\n");
        //
        if(!$this->isLogin()) {
            echo sprintf("<a class='Header12' href='/home/connexion'>\n");
            echo sprintf("<div class='Header13'>Se connecter</div>\n");
            echo sprintf("<i class='Header14 fa fa-chevron-right'></i>\n");
            echo sprintf("</a>\n");
        }
        //
        if(!$this->isLogin()) {
            echo sprintf("<a class='Header12' href='/home/inscription'>\n");
            echo sprintf("<div class='Header13'>S'inscrire</div>\n");
            echo sprintf("<i class='Header14 fa fa-chevron-right'></i>\n");
            echo sprintf("</a>\n");
        }
        //
        echo sprintf("<div class='Header15'>\n");
        //
        echo sprintf("</div>\n");
        // policy
        echo sprintf("<a class='Header12' href='/home/politiques'>\n");
        echo sprintf("<div class='Header13'>Politiques</div>\n");
        echo sprintf("<i class='Header14 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
        // disconnect
        if($this->isLogin()) {
            echo sprintf("<div class='Header12' onclick='call_server(\"header\", \"disconnect\", this)'>\n");
            echo sprintf("<div class='Header13'>Se déconnecter</div>\n");
            echo sprintf("<i class='Header14 fa fa-chevron-right'></i>\n");
            echo sprintf("</div>\n");
        }
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