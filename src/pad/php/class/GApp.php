<?php   
//===============================================
namespace pad;
//===============================================
class GApp extends GObject {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function toDescription() {
        $lData = "";
        $lData .= sprintf("Avec %s, Recherchez facilement une application\n", $this->toSiteName());
        $lData .= sprintf("et Trouvez une solution adaptée à vos besoins.\n");
        $lData .= sprintf("Plateforme d'Applications en Continu.\n");
        $lData .= sprintf("Produit par ReadyTeam.\n");
        return $lData;
    }
    //===============================================
    public function toBanner() {
        return "https://raw.githubusercontent.com/gkesse/ready_carpool/master/src/pad/data/img/banner.png";
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
        return "ReadyPad";
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
