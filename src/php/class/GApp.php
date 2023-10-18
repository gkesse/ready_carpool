<?php   
//===============================================
namespace App;
//===============================================
class GApp extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function toDescription() {
        $lData = "";
        $lData .= sprintf("Avec %s, Recherchez ou Proposez\n", $this->toSiteName());
        $lData .= sprintf("gratuitement un service et Gagnez très rapidement de la clientèle\n");
        $lData .= sprintf("dès aujourd'hui peu importe où vous êtes.\n");
        $lData .= sprintf("Plateforme de Services en Continu.\n");
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
        return "ReadyLoop";
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
