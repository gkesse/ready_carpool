<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";	
	//===============================================
	$lReq = $_REQUEST["req"];
	//===============================================
	if($lReq == "OPEN_BACKGROUND_MOD") {
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
            $lFileName = GFilesystem::Instance()->getPath($lFileName);
            if($lViewType == "list") {$lDataFile .= "<div class='DataRow'>";}
            else if($lViewType == "icon"){
                $lDataFile .= "<div class='DataCol'>";
            }
			$lDataFile .= "<div class='Block DataViewBlock' onclick='openFile(this,".$lDirName[0].",\"".$lDirName[1]."\",\"".$lFileName."\")'>";
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
			$lDataFile .= "<div class='Name'>";
			$lDataFile .= $lDirName[1];
			$lDataFile .= "</div>";
			$lDataFile .= "</div>";
			$lDataFile .= "</div>";
		}
		$lDataFile .= "</div>";
		
		$lFilePath = GFilesystem::Instance()->getPath2($lRootPath, $lDirPath);
        
        $lIndex = 0;
		$lDataMenu = "";
		$lDataMenu .= "<div class='DataViewLink'>";
		$lDataMenu .= "<div class='Link DataViewLinkItem' onclick='openLink(this,".$lIndex.")'>";
		$lDataMenu .= "<i class='fa fa-folder'></i>";
		$lDataMenu .= "</div> ";
        $lIndex++;
        
		if($lFilePath != "") {
			$lFilePathArr = explode("/", $lFilePath);
			for($i = 0; $i < count($lFilePathArr); $i++) {
				$lFilePathItem = $lFilePathArr[$i];
				if($lFilePathItem == "") continue;
				$lDataMenu .= "<div class='Sep'>";
				$lDataMenu .= "<i class='fa fa-chevron-right'></i>";
				$lDataMenu .= "</div>";
				$lDataMenu .= "<div class='Link DataViewLinkItem' onclick='openLink(this,".$lIndex.")'>";
				$lDataMenu .= $lFilePathItem;
				$lDataMenu .= "</div> ";
                $lIndex++;
			}
		}
		$lDataMenu .= "</div> ";
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
