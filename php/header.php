<?php    
    GPostRedirectGet::Instance()->redirect();

    GMetaData::Instance()->getData();
    $lTitle = GConfig::Instance()->getData("title"); 
    GUrl::Instance()->lastUrl();
    
    $lExiststMenu = GConfig::Instance()->existData("menu");
    if($lExiststMenu == true) {
        $lMenu = GConfig::Instance()->getData("menu"); 
    }
    
    $lExiststLink = GConfig::Instance()->existData("link");
    if($lExiststLink == true) {
        $lLink = GConfig::Instance()->getData("link"); 
    }
    
    $lExiststView = GConfig::Instance()->existData("view");
    if($lExiststView == true) {
        $lViewTag = GConfig::Instance()->getData("view"); 
        $lViewNum = GView::Instance()->getView($lViewTag);
    }
    
    $lExistMetaDesc = GConfig::Instance()->existData("meta_desc");
    $lMetaDesc = "";
    if($lExistMetaDesc == true) {
        $lMetaDesc = join(" ", GConfig::Instance()->getData("meta_desc")); 
        $lMetaDesc = mb_strimwidth($lMetaDesc, 0, 160, "...");
    }
    
    $lExistMetaRobots = GConfig::Instance()->existData("meta_robo");
    if($lExistMetaRobots == true) {
        $lMetaRobots = GConfig::Instance()->getData("meta_robo"); 
    }
    
    $lExistMetaCano = GConfig::Instance()->existData("meta_cano");
    if($lExistMetaCano == true) {
        $lMetaCano = GConfig::Instance()->getData("meta_cano"); 
        $lMetaCano = GGlobal::Instance()->getUrl($lMetaCano); 
    }
    $lCodePrettify = GConfig::Instance()->getData("code_prettify");
    $lHeaderData = GJson::Instance()->getData("data/json/header.json"); 
?>
<!-- ============================================ -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $m_ds = $lHeaderData["site"];
            $m_siteName = $m_ds["name"];
        ?>
        <!-- ============================================ -->
        <title><?php echo $lTitle; ?> | <?php echo $m_ds["name"]; ?></title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <!-- ============================================ -->
        <!-- Responsive Web Design -->
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no"/>
        <!-- ============================================ -->
        <!-- Google -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <?php if($lExistMetaDesc == true) { ?>
        <meta name="description" content="<?php echo $lMetaDesc; ?>"/>
        <?php } ?>
        <?php if($lExistMetaRobots == true) { ?>
        <meta name="robots" content="<?php echo $lMetaRobots; ?>"/>
        <?php } ?>
        <?php if($lExistMetaCano == true) { ?>
        <link rel="canonical" href="<?php echo $lMetaCano; ?>" />
        <?php } ?>
        <!-- ============================================ -->
        <!-- OpenGraph -->
        <meta property="og:type" content="website"/>
        <meta property="og:image" content='/img/logo.jpg'/>
        <meta property="og:image:secure_url" content="/img/logo-440x440.jpg"/>
        <meta property="og:image:type" content="image/png"/>
        <meta property="og:image:width" content="440"/>
        <meta property="og:image:height" content="440"/>        
        <meta property="og:locale" content="fr_FR"/>
        <?php if($lExistMetaCano == true) { ?>
        <meta property="og:url" content="<?php echo $lMetaCano; ?>"/>
        <?php } ?>
        <meta property="og:title" content="<?php echo $lTitle; ?> | <?php echo $m_ds["name"]; ?>"/>
        <?php if($lExistMetaDesc == true) { ?>
        <meta property="og:description" content="<?php echo $lMetaDesc; ?>"/>
        <?php } ?>
        <meta property="og:site_name" content="<?php echo $m_ds["name"]; ?>"/>
        <!-- ============================================ -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allan"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo Narrow"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <!-- ============================================ -->
        <?php if($lCodePrettify) { ?>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=sunburst"></script>
        <?php } ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- ============================================ -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-109595989-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-109595989-1');
        </script-->
        <!-- ============================================ -->
        <!--link rel="stylesheet" media="screen" type="text/css" href="css/moncss.php" /-->
        <link rel="stylesheet" href="/css/style.php"/>
        <!-- ============================================ -->
        <script src="/js/class/GConnection.js"></script>
        <script src="/js/class/GHeader.js"></script>
        <script src="/js/header.js"></script>
        <!-- ============================================ -->
    </head>
    <body>
        <!-- ============================================ -->
        <div class="HtmlPage">
            <!-- ============================================ -->
            <?php  if(isset($_SESSION["LOGIN"]) && in_array("ADMIN", explode("|", $_SESSION["LOGIN"]["GROUP"]))) {?>
            <div class="Button BackgroundMod"><i class="fa fa-pencil"></i></div>
            <?php } ?>
            <!-- ============================================ -->
            <?php  if(isset($_SESSION["LOGIN"]) && in_array("ADMIN", explode("|", $_SESSION["LOGIN"]["GROUP"]))) {?>
            <div class="Button BackgroundMod2"><i class="fa fa-pencil"></i></div>
            <?php } ?>
            <!-- ============================================ -->
            <?php  if(isset($_SESSION["LOGIN"]) && in_array("ADMIN", explode("|", $_SESSION["LOGIN"]["GROUP"]))) {?>
            <div class="Button BackgroundMod3"><i class="fa fa-pencil"></i></div>
            <?php } ?>
            <!-- ============================================ -->
            <div class="Background Item1"></div>
            <!-- ============================================ -->
            <div class="Background Item2"></div>
            <!-- ============================================ -->
            <div class="Background Item3"></div>
            <!-- ============================================ -->
            <div class="Modal Connection" id="ModalConnection">
                <div class="Body">
                    <div class="Button Close" onclick="closeConnection(this)"><i class="fa fa-close"></i></div>
                    <div class="Title">Connexion</div>
                    <form class="Text" id="ConnectionForm" method="post" action="">
                        <div class="Desc">Entrez vos identifiants de connexion.</div>
                        <div class="Row">
                            <div class="Label">Email :</div>
                            <div class="Field"><input class="Data" type="text" name="Email"/></div>
                        </div>
                        <div class="Row">
                            <div class="Label">Mot de passe :</div>
                            <div class="Field"><input class="Data" type="password" name="Password"/></div>
                        </div>
                        <div class="ButtonMap">
                            <div class="Item" onclick="connect(this)"><i class="fa fa-paper-plane-o"></i> Se Connecter</div>
                        </div>
                    </form>
                </div>
                <div class="Msg" id="ConnectionMsg"></div>
            </div>
            <!-- ============================================ -->
            <div class="Modal Disconnection" id="ModalDisconnection">
                <div class="Body">
                    <div class="Button Close" onclick="closeDisconnection(this)"><i class="fa fa-close"></i></div>
                    <div class="Title">Déconnexion</div>
                    <div class="Text" id="ConnectionForm" method="post" action="">
                        <div class="Desc">Êtes-vous sûr de vous déconnecter ?</div>
                        <div class="ButtonMap">
                            <div class="Item" onclick="disconnect(this)"><i class="fa fa-power-off"></i> Se Déconnecter</div>
                        </div>
                    </div>
                </div>
                <div class="Msg" id="DisconnectionMsg"></div>
            </div>
            <!-- ============================================ -->
            <div class="Modal Background1" id="ModalDisconnection">
                <div class="Body">
                    <div class="Button Close" onclick="closeDisconnection(this)"><i class="fa fa-close"></i></div>
                    <div class="Title">Déconnexion</div>
                    <div class="Text" id="ConnectionForm" method="post" action="">
                        <div class="Desc">Êtes-vous sûr de vous déconnecter ?</div>
                        <div class="ButtonMap">
                            <div class="Item" onclick="disconnect(this)"><i class="fa fa-power-off"></i> Se Déconnecter</div>
                        </div>
                    </div>
                </div>
                <div class="Msg" id="DisconnectionMsg"></div>
            </div>
            <!-- ============================================ -->
            <div class="BodyPage Mrg Pdd">
                <!-- ============================================ -->
                <div class="Logo">
                    <div class="Img"></div>
                    <div class="Txt">
                        EGLISE HARRISTE FRANCE
                    </div>
                </div>
                <!-- ============================================ -->
                <div class="Header">
                    <div class="Menu" id="HeaderMenu">
                        <?php
                            
                            for($i = 0; $i < count($lHeaderData["menu"]); $i++) {
                                $lName = $lHeaderData["menu"][$i]["name"];
                                $lHref = $lHeaderData["menu"][$i]["link"];
                                $lActive = "";
                                if($lExiststMenu == true) {
                                    if($lName == $lMenu) {
                                        $lActive = " Active";
                                    }
                                }
                        ?>
                        <div class="Link"><a class="Item <?php echo $lActive; ?>" href="<?php echo $lHref; ?>"><?php echo $lName; ?></a></div>
                        <?php } ?>
                        <?php  if(!isset($_SESSION["LOGIN"])) {?>
                        <div class="Link"><div class="Item" onclick="openConnection(this)">Connexion</div></div>
                        <?php } else { ?>
                        <div class="Link"><div class="Item" onclick="openDisconnection(this)">Déconnexion</div></div>
                        <?php } ?>
                        <div class="Link Icon" onclick="openHeaderMenu(this)"><i class="fa fa-bars"></i></div>
                    </div>
                    <!-- ============================================ -->
                </div>
                <!-- ============================================ -->
                