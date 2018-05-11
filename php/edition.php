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
	else if($lReq == "SAVE_BACKGROUNDMOD1") {
        $lImg = $_REQUEST["IMG"];
        $lCssData = GJson::Instance()->getData("data/json/css.json");
        $lCssData["Background"]["Item1"]["Img"] = $lImg;
        GJson::Instance()->saveData("data/json/css.json", $lCssData);
        $lDataMap = array();
        $lDataMap["Msg"] = "Vos modifications ont été enregistrées";
        print_r(json_encode($lDataMap));
	}
	//===============================================
?>
