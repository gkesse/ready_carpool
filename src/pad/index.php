<?php
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/pad/php/class/GInclude.php";
//===============================================
$lApp = new pad\GApp();
$lProcess = new pad\GProcess();
$lLogUi = new com\GLogUi();
$lLoaderUi = new com\GLoaderUi();
$lHeaderUi = new pad\GHeaderUi();
$lAccessUi = new pad\GAccessUi();
$lPageUi = new pad\GPageUi();
//===============================================
$lPageUi->redirectPage();
//===============================================
echo sprintf("<!DOCTYPE html>\n");
echo sprintf("<html lang='fr'>\n");
echo sprintf("<head>\n");
//===============================================
// title
echo sprintf("<title>%s</title>\n", $lApp->toTitle());
// logo
echo sprintf("<link rel='icon' type='image/x-icon' href='/com/data/img/logo.png'>\n");
// viewport
echo sprintf("<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no'/>\n");
// charset
echo sprintf("<meta charset='UTF-8'/>\n");
// google
echo sprintf("<meta name='description' content=\"%s\"/>\n", $lApp->toDescription());
//===============================================
// facebook
echo sprintf("<meta property='og:type' content=\"website\"/>\n");
echo sprintf("<meta property='og:image' content=\"%s\"/>\n", $lApp->toBanner());
echo sprintf("<meta property='og:image:secure_url' content=\"%s\"/>\n", $lApp->toBanner());
echo sprintf("<meta property='og:image:type' content=\"image/png\"/>\n");
echo sprintf("<meta property='og:image:width' content=\"600\"/>\n");
echo sprintf("<meta property='og:image:height' content=\"330\"/>\n");
echo sprintf("<meta property='og:locale' content=\"fr_FR\"/>\n");
echo sprintf("<meta property='og:url' content=\"%s\"/>\n", $lApp->toUrl());
echo sprintf("<meta property='og:title' content=\"%s\"/>\n", $lApp->toTitle());
echo sprintf("<meta property='og:site_name' content=\"%s\"/>\n", $lApp->toSiteName());
echo sprintf("<meta property='og:description' content=\"%s\"/>\n", $lApp->toDescription());
//===============================================
// google_fonts
echo sprintf("<link rel='stylesheet' href='/com/libs/google_fonts/Aclonica/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/com/libs/google_fonts/Akronim/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/com/libs/google_fonts/Allan/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/com/libs/google_fonts/Archivo_Narrow/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/com/libs/google_fonts/Anton/css.css'/>\n");
echo sprintf("<link rel='stylesheet' href='/com/libs/google_fonts/Aclonica/css.css'/>\n");
//===============================================
// font_awesome
echo sprintf("<link rel='stylesheet' href='/com/libs/font_awesome/css/font-awesome.min.css'>\n");
// styles
echo sprintf("<link rel='stylesheet' href='/pad/css/styles.css'>\n");
//===============================================
echo sprintf("</head>\n");
echo sprintf("<body>\n");
//===============================================
// envs
echo sprintf("<input type='hidden' id='gIsTestEnv' value='%s'/>\n", $lApp->isTestEnv());
echo sprintf("<input type='hidden' id='gIsLogin' value='%s'/>\n", $lApp->isLogin());
//===============================================
$lLogUi->run();
$lLoaderUi->run();
$lHeaderUi->run();
//===============================================
echo sprintf("<div class='Page1'>\n");
//===============================================
$lAccessUi->run();
$lProcess->run("test", "php", "page");
//===============================================
echo sprintf("</div>\n");
//===============================================
// scripts
//===============================================
echo sprintf("<script src='/com/js/functions.js'></script>\n");
echo sprintf("<script src='/com/js/class/GLog.js'></script>\n");
echo sprintf("<script src='/com/js/class/GXml.js'></script>\n");
echo sprintf("<script src='/com/js/class/GCode.js'></script>\n");
echo sprintf("<script src='/com/js/class/GObject.js'></script>\n");
echo sprintf("<script src='/com/js/class/GLoader.js'></script>\n");
//===============================================
echo sprintf("<script src='/pad/js/scripts.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GObject.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GAjax.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GServer.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GHeader.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GTest.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GRegister.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GLogin.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GFacebook.js'></script>\n");
echo sprintf("<script src='/pad/js/class/GRedirect.js'></script>\n");
//===============================================
// run
//===============================================
$lProcess->getLogs()->showLogs();
$lProcess->runJs();
$lProcess->runRedirectJs();
//===============================================
// end
//===============================================
echo sprintf("</body>\n");
echo sprintf("</html>\n");
//===============================================
?>