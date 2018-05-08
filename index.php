<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Accueil.json");
    GConfig::Instance()->setData("title", "Accueil");
    GConfig::Instance()->setData("menu", "Accueil");
    GConfig::Instance()->setData("view", "Accueil");
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <div class="Parallax">
        <div class="Img">
            <div class="Caption">
                <div class="Text">ACCUEIL</div>
            </div>
        </div>
        <div class="Body">
            <div>Eglise Harriste de France</div>
            <div>Accueil...</div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Parallax Img2 Bgr2">
        <div class="Img">
            <div class="Caption">
                <div class="Text">PRESENTATION</div>
            </div>
        </div>
        <div class="Body">
            <div>Eglise Harriste de France</div>
            <div>Accueil...</div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Parallax Img3 Bgr3">
        <div class="Img">
            <div class="Caption">
                <div class="Text">MINISTERE</div>
            </div>
        </div>
        <div class="Body">
            <div>Eglise Harriste de France</div>
            <div>MINISTERE...</div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="Parallax Img4 Bgr4">
        <div class="Img">
            <div class="Caption">
                <div class="Text">EVENEMENTS</div>
            </div>
        </div>
        <div class="Body">
            <div>Eglise Harriste de France</div>
            <div>EVENEMENTS...</div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
