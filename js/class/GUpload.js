//===============================================
var GUpload = (function() {
    //===============================================
    var m_instance;
    var m_upload;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function(obj) {
                m_upload = false;
            },
            //===============================================
            openUpload: function(obj) {
				var lUploadView = document.getElementById("UploadView");
				var lModalUpload = document.getElementById("ModalUpload");
				lModalUpload.style.display = "block";
                lUploadView.innerHTML = "";
            },
            //===============================================
            uploadItem: function(obj, mimeType) {
				var lUploadItemMap = document.getElementsByClassName("UploadItem");
				var lUploadBrowse = document.getElementById("UploadBrowse");
				for(var i = 0; i < lUploadItemMap.length; i++) {
                    lUploadItem = lUploadItemMap[i];
                    var lClassName = lUploadItem.className;
                    lUploadItem.className = lClassName.replace(" Active", "");
                }        
                obj.className += " Active";
                lUploadBrowse.setAttribute("accept", mimeType);
                lUploadBrowse.click();
            },
            //===============================================
            uploadFile: function(obj) {
				var lUploadView = document.getElementById("UploadView");
                if(obj.files.length > 5) {
                    alert("Vous pouvez charger au maximum 5 fichiers");
                    return;
                }
                lUploadView.innerHTML = "";
                for(var i = 0; i < obj.files.length; i++) {
                    var lFile = obj.files[i];
                    (function(file){
                        var lFileReader = new FileReader();
                        lFileReader.addEventListener('load', function() {
                            var lPath = this.result;
                            var lName = file.name;
                            var lHtml = '';
                            lHtml += '<div class="DataCol">';
                            lHtml += '<div class="Block">';
                            lHtml += '<div class="Icon"><img class="ImgView" src="'+lPath+'"/></div>';
                            lHtml += '<div class="Name">'+lName+'</div>';
                            lHtml += '</div>';
                            lHtml += '</div>';
                            lUploadView.innerHTML += lHtml;
                        });
                        lFileReader.readAsDataURL(file);
                    })(lFile);
                }
                m_upload = true;
            },
            //===============================================
            saveUploadFile: function(obj) {
                if(!m_upload) return;
                var lUploadForm = document.getElementById("UploadForm");
                lUploadForm.submit();
            },
            //===============================================
            closeUpload: function(obj) {
				var lModalUpload = document.getElementById("ModalUpload");
				var lUploadMsg = document.getElementById("UploadMsg");
                lUploadMsg.style.display = "none";
				lModalUpload.style.display = "none";	
            }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if (!m_instance) {
                m_instance = Container();
            }
            return m_instance;
        }
    };
    //===============================================
})();
//===============================================
GUpload.Instance().init();
//===============================================
