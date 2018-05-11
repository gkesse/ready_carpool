<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["REQ"];
	//===============================================
	if($lReq == "OPEN_BACKGROUNDMOD1") {
        $lCssData = GJson::Instance()->getData("data/json/css.json");
        $lDataMap = array();
        $lDataMap["Img"] = $lCssData["Background"]["Item1"]["Img"];
        print_r(json_encode($lDataMap));
	}
	//===============================================
?>
