<?php 
	require $_SERVER["DOCUMENT_ROOT"]."/php/header.php"; 
?>
<!-- ============================================ -->
<div class="MainPage">
    <!-- ============================================ -->
    <div class="Header">
        <div class="HeaderMenu" id="HeaderMenuId">
            <div class="menu"><a class="item" href="#">Accueil</a></div>
            <div class="menu"><a class="item" href="#">Presentation</a></div>
            <div class="menu"><a class="item" href="#">Ministère</a></div>
            <div class="menu icon" onclick="openHeaderMenu(this)"><i class="fa fa-bars"></i></div>
        </div>
    </div>
    <!-- ============================================ -->
    <div class="ParallaxImg" style='background-image: url("/img/img_parallax.jpg");'></div>
    <div class="ParallaxCtn">
        Acceuil
    </div>
    <!-- ============================================ -->
    <div class="ParallaxImg2" style='background-image: url("/img/img_parallax2.jpg");'></div>
    <div class="ParallaxCtn2">
        Presentation
    </div>
    <!-- ============================================ -->
</div>
<!-- ============================================ -->
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/footer.php"; ?>
<!-- ============================================ -->
