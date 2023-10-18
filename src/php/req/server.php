<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GInclude.php";
//===============================================
$lReq = $_REQUEST["req"];
//===============================================
$lServer = new \App\GServer();
$lServer->run($lReq);
$lServer->sendResponse();
//===============================================
?>
