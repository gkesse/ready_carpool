<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "OPEN_BACKGROUNDMOD") {
        $lItem = $_REQUEST["item"];
        $lCssData = GJson::Instance()->getData("data/json/css.json");
        $lDataMap = array();
        $lDataMap["img"] = $lCssData["background"][$lItem]["img"];
        print_r(json_encode($lDataMap));
	}
	//===============================================
	else if($lReq == "SAVE_BACKGROUNDMOD") {
        $lItem = $_REQUEST["item"];
        $lImg = $_REQUEST["img"];
        $lCssData = GJson::Instance()->getData("data/json/css.json");
        $lCssData["background"][$lItem]["img"] = $lImg;
        GJson::Instance()->saveData("data/json/css.json", $lCssData);
        $lDataMap = array();
        $lDataMap["msg"] = "Vos modifications ont été enregistrées";
        print_r(json_encode($lDataMap));
	}
	//===============================================
?>
