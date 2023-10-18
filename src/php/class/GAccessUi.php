<?php
//===============================================
namespace App;
//===============================================
class GAccessUi {
    //===============================================
    private $m_text = "";
    private $m_href = "";
    private $m_map = array();
    //===============================================
    public function __construct() {

    }
    //===============================================
    public function clone() {
        $lObj = new GAccessUi();
        $lObj->setObj($this);
        return $lObj;
    }
    //===============================================
    public function setObj($_obj) {
        $this->m_text = $_obj->m_text;
        $this->m_href = $_obj->m_href;
    }
    //===============================================
    public function addAccess($_text = "", $_href = "/") {
        $lObj = new GAccessUi();
        $lObj->m_href = $_href;
        $lObj->m_text = $_text;
        $this->m_map[] = $lObj;
    }
    //===============================================
    public function loadAccess($_obj) {
        for($i = 0; $i < count($_obj->m_map); $i++) {
            $lObj = $_obj->m_map[$i];
            $this->m_map[] = $lObj->clone();
        }
    }
    //===============================================
    public function init() {
        $lApp = new GApp();
        $lObj = new GObject();
        
        $lPageId = $lApp->getPageId();
        
        if($lPageId == "connexion") {
            $lObj = new GLoginUi();
        }
        else if($lPageId == "connexion/email") {
            $lObj = new GLoginEmailUi();
        }
        else if($lPageId == "inscription") {
            $lObj = new GRegisterUi();
        }
        else if($lPageId == "inscription/email") {
            $lObj = new GRegisterEmailUi();
        }
        else if($lPageId == "politiques") {
            $lObj = new GPolicyUi();
        }
        else if($lPageId == "politiques/conditions-generales-utilisation") {
            $lObj = new GTermsUi();
        }
        else if($lPageId == "politiques/politique-de-confidentialite") {
            $lObj = new GPrivacyPolicyUi();
        }
        
        $lObj->initAccess();
        $this->loadAccess($lObj->getAccess());
    }
    //===============================================
    public function run() {
        $this->init();
        //
        echo sprintf("<div class='Access1'>\n");
        echo sprintf("<div class='Access2'>\n");
        //
        for($i = 0; $i < count($this->m_map); $i++) {
            $lObj = $this->m_map[$i];
            if($i != 0) echo sprintf("<i class='Access4 fa fa-chevron-right'></i>\n");
            if($i == 0) echo sprintf("<a href='/'><i class='Access5 fa fa-home'></i></a>\n");
            else echo sprintf("<a class='Access3' href='%s'>%s</a>\n", $lObj->m_href, $lObj->m_text);
        }
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>