<?php     
    GMetaData::Instance()->getData();
    $m_title = GConfig::Instance()->getData("title"); 
    GUrl::Instance()->lastUrl();
    
    $m_existstMenu = GConfig::Instance()->existData("menu");
    if($m_existstMenu == true) {
        $m_menu = GConfig::Instance()->getData("menu"); 
    }
    
    $m_existstLink = GConfig::Instance()->existData("link");
    if($m_existstLink == true) {
        $m_link = GConfig::Instance()->getData("link"); 
        }
    
    $m_existstView = GConfig::Instance()->existData("view");
    if($m_existstView == true) {
        $m_viewTag = GConfig::Instance()->getData("view"); 
        $m_viewNum = GView::Instance()->getView($m_viewTag);
    }
    
    $m_existMetaDesc = GConfig::Instance()->existData("meta_desc");
    $m_metaDesc = "";
    if($m_existMetaDesc == true) {
        $m_metaDesc = join(" ", GConfig::Instance()->getData("meta_desc")); 
        $m_metaDesc = mb_strimwidth($m_metaDesc, 0, 160, "...");
    }
    
    $m_existMetaRobots = GConfig::Instance()->existData("meta_robo");
    if($m_existMetaRobots == true) {
        $m_metaRobots = GConfig::Instance()->getData("meta_robo"); 
    }
    
    $m_existMetaCano = GConfig::Instance()->existData("meta_cano");
    if($m_existMetaCano == true) {
        $m_metaCano = GConfig::Instance()->getData("meta_cano"); 
        $m_metaCano = GGlobal::Instance()->getUrl($m_metaCano); 
    }
    $m_codePrettify = GConfig::Instance()->getData("code_prettify");
    $m_headerData = GJson::Instance()->getData("data/json/header.json"); 
?>
<!-- ============================================ -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $m_ds = $m_headerData["site"];
            $m_siteName = $m_ds["name"];
        ?>
        <!-- ============================================ -->
        <title><?php echo $m_title; ?> | <?php echo $m_ds["name"]; ?></title>
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" type="image/png" href="/img/logo.png"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <!-- ============================================ -->
        <!-- Responsive Web Design -->
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no"/>
        <!-- ============================================ -->
        <!-- Google -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <?php if($m_existMetaDesc == true) { ?>
        <meta name="description" content="<?php echo $m_metaDesc; ?>"/>
        <?php } ?>
        <?php if($m_existMetaRobots == true) { ?>
        <meta name="robots" content="<?php echo $m_metaRobots; ?>"/>
        <?php } ?>
        <?php if($m_existMetaCano == true) { ?>
        <link rel="canonical" href="<?php echo $m_metaCano; ?>" />
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
        <?php if($m_existMetaCano == true) { ?>
        <meta property="og:url" content="<?php echo $m_metaCano; ?>"/>
        <?php } ?>
        <meta property="og:title" content="<?php echo $m_title; ?> | <?php echo $m_ds["name"]; ?>"/>
        <?php if($m_existMetaDesc == true) { ?>
        <meta property="og:description" content="<?php echo $m_metaDesc; ?>"/>
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
        <?php if($m_codePrettify) { ?>
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
        <link rel="stylesheet" href="/css/style.css"/>
        <!-- ============================================ -->
        <script src="/js/class/GHeader.js"></script>
        <script src="/js/header.js"></script>
        <!-- ============================================ -->
    </head>
    <body>
        <!-- ============================================ -->
        <div class="HtmlPage">
            <!-- ============================================ -->
            <div class="Banner Item1">
            </div>
            <!-- ============================================ -->
            <div class="Banner Item2">
            </div>
            <!-- ============================================ -->
            <div class="Banner Item3">
            </div>
            <!-- ============================================ -->
            <div class="BodyPage Mrg Pdd">
                <!-- ============================================ -->
                <div class="Logo">
                    <div class="Txt">
                        EGLISE HARRISTE<br/>
                        FRANCE
                    </div>
                </div>
                <!-- ============================================ -->
                <div class="Header">
                    <div class="Menu" id="HeaderMenu">
                        <div class="Link"><a class="Item" href="#">Accueil</a></div>
                        <div class="Link"><a class="Item" href="#">Présentation</a></div>
                        <div class="Link"><a class="Item" href="#">Ministère</a></div>
                        <div class="Link"><a class="Item" href="#">Evènements</a></div>
                        <div class="Link Icon" onclick="openHeaderMenu(this)"><i class="fa fa-bars"></i></div>
                    </div>
                </div>
                <!-- ============================================ -->
                