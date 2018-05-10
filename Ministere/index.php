<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Ministere.json");
    GConfig::Instance()->setData("title", "Ministère");
    GConfig::Instance()->setData("menu", "Ministère");
    GConfig::Instance()->setData("view", "Ministere");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <div class="Parallax Item3">
        <div class="Img">
            <div class="Caption">
                <div class="Text">MINISTERE</div>
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
