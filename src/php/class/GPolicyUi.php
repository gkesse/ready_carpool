<?php
//===============================================
class GPolicyUi extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function initAccess() {
        $lObj = $this->m_access;
        $lObj->addAccess();
        $lObj->addAccess("Politiques", "/politiques");
    }
    //===============================================
    public function run() {
        echo sprintf("<div class='Policy1'>\n");
        echo sprintf("<div class='Policy2'>\n");
        //
        echo sprintf("<div class='Policy3'>\n");
        echo sprintf("<div class='Policy4'>Politiques</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<a class='Policy5' href='/politiques/conditions-generales-utilisation'>\n");
        echo sprintf("<i class='Policy6 fa fa-file-text'></i>\n");
        echo sprintf("<div class='Policy7'>Conditions générales d'utilisation</div>\n");
        echo sprintf("<i class='Policy8 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("<a class='Policy5' href='/politiques/politique-de-confidentialite'>\n");
        echo sprintf("<i class='Policy6 fa fa-file-text'></i>\n");
        echo sprintf("<div class='Policy7'>Politique de confidentialité</div>\n");
        echo sprintf("<i class='Policy8 fa fa-chevron-right'></i>\n");
        echo sprintf("</a>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>