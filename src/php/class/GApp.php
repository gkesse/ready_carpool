<?php   
//===============================================
class GApp extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function toDescription() {
        $lData = "";
        $lData .= sprintf("Avec ReadyHalte, Choisissez un trajet\n");
        $lData .= sprintf("et voyagez partout où vous voulez dès aujourd'hui.\n");
        $lData .= sprintf("Plateforme de Covoiturage Continu.\n");
        $lData .= sprintf("Produit par Gérard KESSE.\n");
        return $lData;
    }
    //===============================================
    public function toBanner() {
        return "https://raw.githubusercontent.com/gkesse/ready_carpool/master/src/data/img/banner.png";
    }
    //===============================================
    public function toUrl() {
        $lUrl = "";
        $lUrl .= "https://";
        $lUrl .= $_SERVER['HTTP_HOST'];
        $lUrl .=  $_SERVER['REQUEST_URI'];
        return $lUrl;
    }
    //===============================================
    public function toTitle() {
        return $this->toSiteName();
    }
    //===============================================
    public function toSiteName() {
        return "ReadyHalte";
    }
    //===============================================
    public function isTestEnv() {
        $lEnvType = getenv("ENV_TYPE");
        if($lEnvType == "TEST") return true;
        return false;
    }
    //===============================================
}
//===============================================
?>
