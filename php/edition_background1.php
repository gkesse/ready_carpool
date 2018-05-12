<!-- ============================================ -->
<div class="Modal BackgroundMod1" id="ModalBackgroundMod1">
    <div class="Body">
        <div class="Button Close" onclick="closeBackgroundMod1(this)"><i class="fa fa-close"></i></div>
        <div class="Title">Modification du fond d'écran du haut</div>
        <div class="Text" id="ConnectionForm" method="post" action="">
            <div class="Desc">Saisissez les nouvelles données.</div>
            <div class="Col">
                <div class="Label">Fond d'écran :</div>
                <div class="Field"><div class="Data Min Center" id="BackgroundMod1Img"></div></div>
            </div>
            <div class="ButtonMap Left">
                <div class="Item" onclick="openBackgroundMod1Modify(this)"><i class="fa fa-floppy-o"></i> Modifier</div>
            </div>
            <div class="ButtonMap">
                <div class="Item" onclick="saveBackgroundMod1(this)"><i class="fa fa-floppy-o"></i> Enregistrer</div>
            </div>
        </div>
    </div>
    <div class="Msg" id="BackgroundMod1Msg"></div>
</div>
<!-- ============================================ -->
<div class="Modal BackgroundMod1Modify" id="ModalBackgroundMod1Modify">
    <div class="Body">
        <div class="Button Close" onclick="closeBackgroundMod1Modify(this)"><i class="fa fa-close"></i></div>
        <div class="Title">Modification du fond d'écran du haut</div>
        <div class="Text">
            <div class="Desc">Sélectionner le nouveau fichier.</div>
            <div class="Col">
                <div class="Label" id="BackgroundMod1ModifyLabel"></div>
                <div class="Field"><div class="Data View" id="BackgroundMod1ModifyData"></div></div>
            </div>
            <div class="ButtonMap">
                <div class="Item" onclick="saveBackgroundMod1Modify(this)"><i class="fa fa-floppy-o"></i> Enregistrer</div>
            </div>
        </div>
    </div>
    <div class="Msg" id="BackgroundMod1ModifyMsg"></div>
</div>
<!-- ============================================ -->
