<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["REQ"];
	//===============================================
	if($lReq == "CONNECT") {
		$lEmail= $_REQUEST["EMAIL"];
		$lPassword = $_REQUEST["PASSWORD"];
        $lUserMap = GJson::Instance()->getData("data/json/users.json");
        $lExist = GGlobal::Instance()->existData($lUserMap["USERS"], "EMAIL", $lEmail);
        $lData = array();
        if(!$lExist) {
            $lData["STATUS"] = false;
            $lData["MSG"] = "Email n'existe pas";
            print_r(json_encode($lData));
            return;
        }
        $lEncrypt = md5($lEmail."|".$lPassword);
        $lExist = GGlobal::Instance()->existData($lUserMap["USERS"], "PASSWORD", $lEncrypt);
        if(!$lExist) {
            $lData["STATUS"] = false;
            $lData["MSG"] = "Mot de passe n'existe pas";
            print_r(json_encode($lData));
            return;
        }
        $lData["STATUS"] = true;
        $lData["MSG"] = "Bonne Connexion";
        $lData["GROUP"] = GGlobal::Instance()->getData($lUserMap["USERS"], "EMAIL", $lEmail, "GROUP");
        print_r(json_encode($lData));
	}
?>
