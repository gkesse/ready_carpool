<!-- ============================================ -->
<div class="Modal Upload" id="ModalUpload" onkeypress="keyUpload(this, event)">
    <div class="Body">
        <div class="Button Close" onclick="closeUpload(this)"><i class="fa fa-close"></i></div>
        <div class="Title">Chargement de fichiers</div>
        <div class="Text">
            <div class="Desc">Sélectionnez le type de fichier.</div>
            <div class="ButtonMap Left">
                <div class="Item UploadItem Active" onclick="uploadItem(this, 'image/*');return"><i class="fa fa-file-image-o"></i> Image</div>
                <div class="Item UploadItem" onclick="uploadItem(this, 'audio/*')"><i class="fa fa-file-audio-o"></i> Audio</div>
                <div class="Item UploadItem" onclick="uploadItem(this, 'video/*')"><i class="fa fa-file-video-o"></i> Vidéo</div>
                <div class="Item UploadItem" onclick="uploadItem(this, '*')"><i class="fa fa-file-text-o"></i> Document</div>
                <form class="None" id="UploadForm"  method="post" enctype="multipart/form-data">
                    <input type="file" name="FileToUpload[]" id="UploadBrowse" multiple="true" onchange="uploadFile(this)">
                </form>
            </div>
            <div class="DataView" id="UploadView"></div>
            <div class="ButtonMap">
                <div class="Item" onclick="saveUploadFile(this)"><i class="fa fa-floppy-o"></i> Charger</div>
            </div>
        </div>
    </div>
    <div class="Msg" id="UploadMsg"></div>
</div>
<!-- ============================================ -->
<div class="Modal DisUpload" id="ModalDisUpload">
    <div class="Body">
        <div class="Button Close" onclick="closeDisUpload(this)"><i class="fa fa-close"></i></div>
        <div class="Title">Déconnexion</div>
        <div class="Text" id="UploadForm" method="post" action="">
            <div class="Desc">Êtes-vous sûr de vous déconnecter ?</div>
            <div class="ButtonMap">
                <div class="Item" onclick="disconnect(this)"><i class="fa fa-power-off"></i> Se Déconnecter</div>
            </div>
        </div>
    </div>
    <div class="Msg" id="DisUploadMsg"></div>
</div>
<!-- ============================================ -->
<script src="/js/class/GUpload.js"></script>
<script src="/js/upload.js"></script>
<!-- ============================================ -->
