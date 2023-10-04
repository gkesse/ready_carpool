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
//===============================================
echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/Aclonica/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/Akronim/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/Allan/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/Archivo_Narrow/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/Anton/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/libs/google_fonts/Aclonica/css.css'/>\n");
//===============================================
echo sprintf("<link rel='stylesheet' href='/libs/font_awesome/css/font-awesome.min.css'>\n");
echo sprintf("<link rel='stylesheet' href='/css/styles.css'>\n");
//===============================================
echo sprintf("</head>\n");
echo sprintf("<body>\n");
//===============================================
$lProcess = new GProcess();
$lProcess->run("test", "php", "log");
//===============================================
echo sprintf("<script src='/js/scripts.js'></script>\n");
echo sprintf("<script src='/js/functions.js'></script>\n");
echo sprintf("<script src='/js/class/GObject.js'></script>\n");
echo sprintf("<script src='/js/class/GLog.js'></script>\n");
echo sprintf("<script src='/js/class/GServer.js'></script>\n");
echo sprintf("<script src='/js/class/GTest.js'></script>\n");
//===============================================
$lProcess->runJs();
//===============================================
echo sprintf("</body>\n");
echo sprintf("</html>\n");
//===============================================
?>