<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["Req"];
	//===============================================
	if($lReq == "CONNECT") {
		$lEmail= $_REQUEST["Email"];
		$lPassword = $_REQUEST["Password"];
        $lData = $lEmail."|".$lPassword;
		$lEncrypt = md5($lData);
		print_r($lEncrypt);
	}
?>
