<?php
//===============================================
class GTestPhp extends GObject {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    public function run($_module, $_method) {
        if($_method == "log") {
            $this->runLog($_module, $_method);
        }
    }
    //===============================================
    public function runLog($_module, $_method) {
        $lLogUi = new GLogUi();
        $lLogUi->run();
    }
    //===============================================
}
//===============================================
?>