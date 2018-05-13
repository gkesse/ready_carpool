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
				var lModalUpload = document.getElementById("ModalUpload");
				lModalUpload.style.display = "block";	
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
				var lFiles = obj.files;
                alert(lFiles.length);
            },
            //===============================================
            connect: function(obj) {
				var lEmail = document.getElementsByName("Email")[0];
				var lPassword = document.getElementsByName("Password")[0];
				var lUploadMsg = document.getElementById("UploadMsg");
                var lRegExp = /\S+@\S+\.\S+/;
                var lMessage = "";

                if(!lEmail.value.length) {
                    lMessage = "Email est obligatoire";
                }
                else if(!lRegExp.test(lEmail.value)) {
                    lMessage = "Email est incorrect";
                }
                else if(!lPassword.value.length) {
                    lMessage = "Mot de passe est obligatoire";
                }
                
                if(lMessage.length) {
                    var lHtml = "<i class='fa fa-exclamation-triangle'></i> "; 
                    lHtml += lMessage; 
                    lUploadMsg.innerHTML = lHtml;
                    lUploadMsg.style.display = "block";
                    lUploadMsg.style.color = "#ff9933";
                }
                else {
                    this.sendUpload(lEmail.value, lPassword.value);
                }
            },
            //===============================================
            closeUpload: function(obj) {
				var lModalUpload = document.getElementById("ModalUpload");
				var lUploadMsg = document.getElementById("UploadMsg");
                lUploadMsg.style.display = "none";
				lModalUpload.style.display = "none";	
            },
            //===============================================
            keyUpload: function(obj, e) {
                if(e.keyCode == 13) {
                    connect(obj);
                }
            },
            //===============================================
            openDisUpload: function(obj) {
				var lModalDisUpload = document.getElementById("ModalDisUpload");
				lModalDisUpload.style.display = "block";	
            },
            //===============================================
            disconnect: function(obj) {
				var lDisUploadMsg = document.getElementById("DisUploadMsg");
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lHtml = "<i class='fa fa-power-off'></i> "; 
                        lHtml += lData; 
                        lDisUploadMsg.innerHTML = lHtml;
                        lDisUploadMsg.style.color = "#339933";
                        lDisUploadMsg.style.display = "block";
                        location.reload();
                    }
                }
                lXmlhttp.open("POST", "/php/req/Upload.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"DISCONNECT"
                    );            
            },
            //===============================================
            closeDisUpload: function(obj) {
				var lModalDisUpload = document.getElementById("ModalDisUpload");
				var lDisUploadMsg = document.getElementById("DisUploadMsg");
                lDisUploadMsg.style.display = "none";
				lModalDisUpload.style.display = "none";	
            },
            //===============================================
            sendUpload: function(email, pass) {
				var lUploadMsg = document.getElementById("UploadMsg");
				var lUploadForm = document.getElementById("UploadForm");
                lUploadMsg.style.display = "none";
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        if(!lDataMap["status"]) {
                            var lHtml = "<i class='fa fa-exclamation-triangle'></i> "; 
                            lHtml += lDataMap["msg"]; 
                            lUploadMsg.innerHTML = lHtml;
                            lUploadMsg.style.color = "#ff9933";
                            lUploadMsg.style.display = "block";
                        }
                        else {
                            var lHtml = "<i class='fa fa-check-circle'></i> "; 
                            lHtml += lDataMap["msg"]; 
                            lUploadMsg.innerHTML = lHtml;
                            lUploadMsg.style.display = "block";
                            lUploadMsg.style.color = "#339933";
                            lUploadForm.submit();
                        }
                    }
                }
                lXmlhttp.open("POST", "/php/req/Upload.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"CONNECT"+
					"&email="+email+
					"&password="+pass
                    );            
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
