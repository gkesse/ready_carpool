<?php   
//===============================================
namespace app;
//===============================================
class GHeader extends GManager {
    //===============================================
    public function __construct() {
        parent::__construct();
    }
    //===============================================
    public function run($_data) {
        $this->deserialize($_data);
        if($this->m_method== "") {
            $this->m_logs->addError("La méthode est obligatoire.");
        }
        else if($this->m_method == "disconnect") {
            $this->onDisconnect($_data);
        }
        else {
            $this->m_logs->addError("La méthode est inconnue.");
        }
    }
    //===============================================
    public function onDisconnect($_data) {
        $this->usetLogin();
    }
    //===============================================
 }
//===============================================
?>
