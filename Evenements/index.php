<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    $m_data = GJson::Instance()->getData("data/json/Evenements.json");
    GConfig::Instance()->setData("title", "Evenements");
    GConfig::Instance()->setData("menu", "Evènements");
    GConfig::Instance()->setData("view", "Evenements");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <div class="Parallax Item4">
        <div class="Img">
            <div class="Caption">
                <div class="Text">EVENEMENTS</div>
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
