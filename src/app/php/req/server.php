<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/app/php/class/GInclude.php";
//===============================================
$lReq = $_REQUEST["req"];
//===============================================
$lServer = new \app\GServer();
$lServer->run($lReq);
$lServer->sendResponse();
//===============================================
?>
