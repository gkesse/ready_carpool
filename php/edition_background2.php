<!-- ============================================ -->
<div class="Modal BackgroundMod2" id="ModalBackgroundMod2">
    <div class="Body">
        <div class="Button Close" onclick="closeBackgroundMod2(this)"><i class="fa fa-close"></i></div>
        <div class="Title">Modification du fond d'écran du milieu</div>
        <div class="Text" id="ConnectionForm" method="post" action="">
            <div class="Desc">Saisissez les nouvelles données.</div>
            <div class="Row">
                <div class="Label">Fond d'écran :</div>
                <div class="Field"><input class="Data" type="text" name="BackgroundMod2Img"/></div>
            </div>
            <div class="ButtonMap">
                <div class="Item" onclick="saveBackgroundMod2(this)"><i class="fa fa-floppy-o"></i> Enregistrer</div>
            </div>
        </div>
    </div>
    <div class="Msg" id="BackgroundMod2Msg"></div>
</div>
<!-- ============================================ -->
