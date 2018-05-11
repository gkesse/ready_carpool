<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $lData = GJson::Instance()->getData("data/json/Accueil.json");
    GConfig::Instance()->setData("title", "Accueil");
    GConfig::Instance()->setData("menu", "Accueil");
    GConfig::Instance()->setData("view", "Accueil");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <div class="Parallax Item1">
        <!-- ============================================ -->
        <?php  if(isset($_SESSION["login"]) && in_array("admin", explode("|", $_SESSION["login"]["group"]))) {?>
        <div class="Button HomeImg" onclick="openHomeImg(this)"><i class="fa fa-pencil"></i></div>
        <?php } ?>
        <!-- ============================================ -->
        <div class="Img">
            <div class="Caption">
                <div class="Text">ACCUEIL</div>
            </div>
        </div>
        <div class="Body">
            <!-- ============================================ -->
            <?php  if(isset($_SESSION["login"]) && in_array("admin", explode("|", $_SESSION["login"]["group"]))) {?>
            <div class="Button HomeText" onclick="openHomeText(this)"><i class="fa fa-pencil"></i></div>
            <?php } ?>
            <!-- ============================================ -->
            <div id="HomeTextCtn"><?php echo $lData["home"]["text"]; ?></div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Parallax Item2">
        <div class="Img">
            <div class="Caption">
                <div class="Text">PRESENTATION</div>
            </div>
        </div>
        <div class="Body">
            <div><?php echo $lData["presentation"]["text"]; ?></div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Parallax Item3">
        <div class="Img">
            <div class="Caption">
                <div class="Text">MINISTERE</div>
            </div>
        </div>
        <div class="Body">
            <div><?php echo $lData["ministry"]["text"]; ?></div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Parallax Item4">
        <div class="Img">
            <div class="Caption">
                <div class="Text">EVENEMENTS</div>
            </div>
        </div>
        <div class="Body">
            <div><?php echo $lData["events"]["text"]; ?></div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Modal HomeText" id="ModalHomeText">
        <div class="Body">
            <div class="Button Close" onclick="closeHomeText(this)"><i class="fa fa-close"></i></div>
            <div class="Title">Modification du texte de l'accueil</div>
            <div class="Text" id="ConnectionForm" method="post" action="">
                <div class="Desc">Saisissez les nouvelles données.</div>
                <div class="Col">
                    <div class="Label">Texte :</div>
                    <div class="Field"><div class="Data" id="HomeTextData" contenteditable="true"></div></div>
                </div>
                <div class="ButtonMap">
                    <div class="Item" onclick="saveHomeText(this)"><i class="fa fa-floppy-o"></i> Enregistrer</div>
                </div>
            </div>
        </div>
        <div class="Msg" id="HomeTextMsg"></div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<script src="/js/class/GDevice.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
