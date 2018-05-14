//===============================================
var GUpload = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function(obj) {

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
                            var lImgSrc = this.result;
                            var lHtml = '';
                            lHtml += '<div class="DataCol">';
                            lHtml += '<div class="Block">';
                            lHtml += '<div class="Icon"><img class="ImgView" src="'+lImgSrc+'"/></div>';
                            lHtml += '<div class="Name">'+file.name+'</div>';
                            lHtml += '</div>';
                            lHtml += '</div>';
                            lUploadView.innerHTML += lHtml;
                        });
                        lFileReader.readAsDataURL(file);
                    })(lFile);
                }
            },
            //===============================================
            saveUploadFile: function(obj) {
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        alert(lDataMap["msg"]);
                    }
                }
                lXmlhttp.open("POST", "/php/req/upload.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"UPLOAD_FILE"+
					"&root="+"upload/img"
                    );            
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
