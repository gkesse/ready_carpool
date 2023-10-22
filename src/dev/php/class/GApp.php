<?php   
//===============================================
namespace dev;
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
        $lData .= sprintf("gratuitement des cours et des tutoriels\n");
        $lData .= sprintf("adaptés aux sciences de l'ingénieur.\n");
        $lData .= sprintf("Plateforme de Développement en Continu.\n");
        $lData .= sprintf("Produit par ReadyTeam.\n");
        return $lData;
    }
    //===============================================
    public function toBanner() {
        return "https://raw.githubusercontent.com/gkesse/ready_carpool/master/src/app/data/img/banner.png";
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
        return "ReadyDev";
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
