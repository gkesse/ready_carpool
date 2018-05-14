<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "UPLOAD_FILE") {
        $lDataMap = array();
        $lDataMap["msg"] = "Vos fichiers ont été chargés avec succes";
        print_r(json_encode($lDataMap));
	}
	//===============================================
?>
