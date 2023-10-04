<?php
//===============================================
require "./php/class/autoload.php";
//===============================================
echo sprintf("<!DOCTYPE html>\n");
echo sprintf("<html>\n");
echo sprintf("<head>\n");
//===============================================
echo sprintf("<title>ReadyApp</title>\n");
echo sprintf("<link rel='icon' type='image/x-icon' href='/data/img/logo.png'>\n");
echo sprintf("<link rel='stylesheet' href='/css/styles.css'>\n");
//===============================================
echo sprintf("</head>\n");
echo sprintf("<body>\n");
//===============================================
$lProcess = new GProcess();
$lProcess->run("test", "js", "log");
//===============================================
echo sprintf("<script src='/js/scripts.js'></script>\n");
echo sprintf("<script src='/js/functions.js'></script>\n");
echo sprintf("<script src='/js/class/GObject.js'></script>\n");
echo sprintf("<script src='/js/class/GServer.js'></script>\n");
echo sprintf("<script src='/js/class/GTest.js'></script>\n");
//===============================================
$lProcess->runJs();
//===============================================
echo sprintf("</body>\n");
echo sprintf("</html>\n");
//===============================================
?>