<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/pad/php/class/GInclude.php";
//===============================================
$lReq = $_REQUEST["req"];
//===============================================
$lServer = new \pad\GServer();
$lServer->run($lReq);
$lServer->sendResponse();
//===============================================
?>
