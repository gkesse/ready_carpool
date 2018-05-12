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
	else if($lReq == "OPEN_BACKGROUND_MODIFY") {        
		$lRootPath = $_REQUEST["root"];
		$lDirPath = $_REQUEST["dir"];
		$lViewType = $_REQUEST["view"];
		$lDirMap = GFilesystem::Instance()->getFile2($lRootPath, $lDirPath);
		$lDataFile = "";
		$lDataFile .= "<div class='DataView'>";
		for($i = 0; $i < count($lDirMap); $i++) {
			$lDirName = $lDirMap[$i];
            if($lDirName[3] != "img" && $lDirName[3] != "dir") continue;
			$lFileName = "/".$lRootPath."/".$lDirPath."/".$lDirName[1];
            if($lViewType == "list") {$lDataFile .= "<div class='DataRow'>";}
            else if($lViewType == "icon"){
                $lDataFile .= "<div class='DataCol'>";
            }
			$lDataFile .= "<div class='Block DataViewBlock' onclick='openFile(this, ".$lDirName[0].");'>";
            if($lViewType == "list") {
                $lDataFile .= "<div class='Icon'><i class='fa fa-".$lDirName[2]."'></i></div>";
            }
            else if($lViewType == "icon"){
                if($lDirName[3] == "img") {
                    $lDataFile .= "<div class='Icon'><img class='ImgView' src='".$lFileName."'/></div>";
                }
                else if($lDirName[3] == "dir") {
                    $lDataFile .= "<div class='Icon'><i class='IconView fa fa-".$lDirName[2]."'></i></div>";
                }
            }
			$lDataFile .= "<div class='Name'";
			$lDataFile .= "onclick='openFile22(this, \"".$lDirName[3]."\");'>";
			$lDataFile .= $lDirName[1];
			$lDataFile .= "</div>";
			$lDataFile .= "</div>";
			$lDataFile .= "</div>";
		}
		$lDataFile .= "</div>";
		
		$lFilePath = GFilesystem::Instance()->getPath2($lRootPath, $lDirPath);
		$lDataMenu = '';
		$lDataMenu .= '<div class="pgCr05 dibm cspt FilesystemLink" onclick="openLink(this);">';
		$lDataMenu .= '<i class="fa fa-folder clrg"></i></div> ';
		if($lFilePath != "") {
			$lFilePathArr = explode("/", $lFilePath);
			for($i = 0; $i < count($lFilePathArr); $i++) {
				$lFilePathItem = $lFilePathArr[$i];
				if($lFilePathItem == "") continue;
				$lDataMenu .= '<div class="pgCr05 dibm">';
				$lDataMenu .= '<i class="fa fa-chevron-right clrg"></i></div> ';
				$lDataMenu .= '<div class="pgCr05 dibm hvra cspt clrg FilesystemLink" onclick="openLink(this);">';
				$lDataMenu .= $lFilePathItem.'</div> ';
			}
		}
		$lDataMap = array();
		$lDataMap["menu"] = $lDataMenu;
		$lDataMap["file"] = $lDataFile;
		$lDataMap["dir"] = $lFilePath;
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
	else if($lReq == "SAVE_HOMETEXT") {
        $lText = $_REQUEST["text"];
        $lHomeData = GJson::Instance()->getData("data/json/Accueil.json");
        $lHomeData["home"]["text"] = $lText;
        GJson::Instance()->saveData("data/json/Accueil.json", $lHomeData);
        $lDataMap = array();
        $lDataMap["msg"] = $lText;
        print_r(json_encode($lDataMap));
	}
	//===============================================
?>
