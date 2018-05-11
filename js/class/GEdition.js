//===============================================
var GEdition = (function() {
    //===============================================
    var m_instance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function(obj) {

            },
            //===============================================
            // BackgroundMod1
            //===============================================
            openBackgroundMod1: function(obj) {
				var lModalBackgroundMod1 = document.getElementById("ModalBackgroundMod1");
				var lBackgroundMod1Img = document.getElementsByName("BackgroundMod1Img")[0];
				var lBackgroundMod1Msg = document.getElementById("BackgroundMod1Msg");
				lModalBackgroundMod1.style.display = "block";	
				lBackgroundMod1Msg.style.display = "none";	
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        lBackgroundMod1Img.value = lDataMap["img"];
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"OPEN_BACKGROUNDMOD"+
					"&item="+"item1"
                    );    
            },
            //===============================================
            closeBackgroundMod1: function(obj) {
				var lModalBackgroundMod1 = document.getElementById("ModalBackgroundMod1");
				lModalBackgroundMod1.style.display = "none";	
            },
            //===============================================
            saveBackgroundMod1: function(obj) {
				var lBackgroundMod1Img = document.getElementsByName("BackgroundMod1Img")[0];
				var lBackgroundMod1Msg = document.getElementById("BackgroundMod1Msg");
                var lImg = lBackgroundMod1Img.value;
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        var lHtml = "<i class='fa fa-check-circle'></i> "; 
                        lHtml += lDataMap["msg"]; 
                        lBackgroundMod1Msg.innerHTML = lHtml;
                        lBackgroundMod1Msg.style.display = "block";
                        lBackgroundMod1Msg.style.color = "#339933";
                        location.reload();
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"SAVE_BACKGROUNDMOD"+
					"&item="+"item1"+
					"&img="+lImg                    
                    );        
            },
            //===============================================
            // BackgroundMod2
            //===============================================
            openBackgroundMod2: function(obj) {
				var lModalBackgroundMod2 = document.getElementById("ModalBackgroundMod2");
				var lBackgroundMod2Img = document.getElementsByName("BackgroundMod2Img")[0];
				var lBackgroundMod2Msg = document.getElementById("BackgroundMod2Msg");
				lModalBackgroundMod2.style.display = "block";	
				lBackgroundMod2Msg.style.display = "none";	
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        lBackgroundMod2Img.value = lDataMap["img"];
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"OPEN_BACKGROUNDMOD"+
					"&item="+"item2"
                    );       
            },
            //===============================================
            closeBackgroundMod2: function(obj) {
				var lModalBackgroundMod2 = document.getElementById("ModalBackgroundMod2");
				lModalBackgroundMod2.style.display = "none";	
            },
            //===============================================
            saveBackgroundMod2: function(obj) {
				var lBackgroundMod2Img = document.getElementsByName("BackgroundMod2Img")[0];
				var lBackgroundMod2Msg = document.getElementById("BackgroundMod2Msg");
                var lImg = lBackgroundMod2Img.value;
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        var lHtml = "<i class='fa fa-check-circle'></i> "; 
                        lHtml += lDataMap["msg"]; 
                        lBackgroundMod2Msg.innerHTML = lHtml;
                        lBackgroundMod2Msg.style.display = "block";
                        lBackgroundMod2Msg.style.color = "#339933";
                        location.reload();
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"SAVE_BACKGROUNDMOD"+
					"&item="+"item2"+
					"&img="+lImg                    
                    );         
            },
            //===============================================
            // BackgroundMod3
            //===============================================
            openBackgroundMod3: function(obj) {
				var lModalBackgroundMod3 = document.getElementById("ModalBackgroundMod3");
				var lBackgroundMod3Img = document.getElementsByName("BackgroundMod3Img")[0];
				var lBackgroundMod3Msg = document.getElementById("BackgroundMod3Msg");
				lModalBackgroundMod3.style.display = "block";	
				lBackgroundMod3Msg.style.display = "none";	
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        lBackgroundMod3Img.value = lDataMap["img"];
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"OPEN_BACKGROUNDMOD"+
					"&item="+"item3"
                    );       
            },
            //===============================================
            closeBackgroundMod3: function(obj) {
				var lModalBackgroundMod3 = document.getElementById("ModalBackgroundMod3");
				lModalBackgroundMod3.style.display = "none";	
            },
            //===============================================
            saveBackgroundMod3: function(obj) {
				var lBackgroundMod3Img = document.getElementsByName("BackgroundMod3Img")[0];
				var lBackgroundMod3Msg = document.getElementById("BackgroundMod3Msg");
                var lImg = lBackgroundMod3Img.value;
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        var lHtml = "<i class='fa fa-check-circle'></i> "; 
                        lHtml += lDataMap["msg"]; 
                        lBackgroundMod3Msg.innerHTML = lHtml;
                        lBackgroundMod3Msg.style.display = "block";
                        lBackgroundMod3Msg.style.color = "#339933";
                        location.reload();
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"SAVE_BACKGROUNDMOD"+
					"&item="+"item3"+
					"&img="+lImg                    
                    );         
            },
            //===============================================
            // HomeText
            //===============================================
            openHomeText: function(obj) {
				var lModalHomeText = document.getElementById("ModalHomeText");
				var lHomeTextData = document.getElementById("HomeTextData");
				var lHomeTextCtn = document.getElementById("HomeTextCtn");
				var lHomeTextMsg = document.getElementById("HomeTextMsg");
                lHomeTextData.innerHTML = lHomeTextCtn.innerHTML;
				lModalHomeText.style.display = "block";	
				lHomeTextMsg.style.display = "none";	
            },
            //===============================================
            closeHomeText: function(obj) {
				var lModalHomeText = document.getElementById("ModalHomeText");
				lModalHomeText.style.display = "none";	
            },
            //===============================================
            saveHomeText: function(obj) {
				var lHomeTextData = document.getElementById("HomeTextData");
				var lHomeTextMsg = document.getElementById("HomeTextMsg");
                var lText = lHomeTextData.innerHTML;
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        var lHtml = "<i class='fa fa-check-circle'></i> "; 
                        lHtml += lDataMap["msg"]; 
                        lHomeTextMsg.innerHTML = lHtml;
                        lHomeTextMsg.style.display = "block";
                        lHomeTextMsg.style.color = "#339933";
                        location.reload();
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"req="+"SAVE_HOMETEXT"+
					"&text="+lText
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
GEdition.Instance().init();
//===============================================
