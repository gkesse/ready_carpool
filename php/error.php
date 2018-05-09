<?php
    require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoloadRegister.php";
    
    GConfig::Instance()->setData("title", "Erreur");
    GConfig::Instance()->setData("menu", "Accueil");
    
    require $_SERVER["DOCUMENT_ROOT"]."/php/header.php";
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <div class="Parallax Item5">
        <div class="Img">
            <div class="Caption">
                <div class="Text">ERREUR</div>
            </div>
        </div>
        <div class="Body">
            <div>La page que vous cherchiez n'existe pas...</div>
        </div>
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<script src="/js/class/GDevice.js"></script>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
