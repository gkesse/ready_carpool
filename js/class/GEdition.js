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
                        lBackgroundMod1Img.value = lDataMap["Img"];
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"REQ="+"OPEN_BACKGROUNDMOD1"
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
                        lHtml += lDataMap["Msg"]; 
                        lBackgroundMod1Msg.innerHTML = lHtml;
                        lBackgroundMod1Msg.style.display = "block";
                        lBackgroundMod1Msg.style.color = "#339933";
                        location.reload();
                    }
                }
                lXmlhttp.open("POST", "/php/edition.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"REQ="+"SAVE_BACKGROUNDMOD1"+
					"&IMG="+lImg                    
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
