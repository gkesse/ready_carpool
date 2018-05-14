<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "UPLOAD_FILE") {
        /*$lRoot = $_REQUEST["root"];
        $lNames = $_REQUEST["names"];
        $lFiles = $_REQUEST["files"];
        
        $lFile = $lFiles;
        $lName = $lNames;

        $lFileMap = explode(",", $lFile);
        $lFileData = $lFileMap[1];
        
        $lPath = $_SERVER["DOCUMENT_ROOT"]."/".$lRoot."/".$lName;
        
        file_put_contents($lPath, $lFilePath, FILE_APPEND);

        $lDataMap = $_FILES;
        print_r(json_encode($lDataMap));*/
        var_dump($_FILES);
	}
	//===============================================
?>
