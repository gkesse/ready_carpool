<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Presentation.json");
    GConfig::Instance()->setData("title", "Présentation");
    GConfig::Instance()->setData("menu", "Présentation");
    GConfig::Instance()->setData("view", "Presentation");
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <div class="Parallax Item2">
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
</div>
<!-- ============================================ -->
<script src="/js/class/GDevice.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
