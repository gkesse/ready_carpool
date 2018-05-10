//===============================================
var GConnection = (function() {
    //===============================================
    var linstance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function(obj) {

            },
            //===============================================
            openConnection: function(obj) {
				var lHeaderConnection = document.getElementById("HeaderConnection");
				lHeaderConnection.style.display = "block";	
            },
            //===============================================
            closeConnection: function(obj) {
				var lHeaderConnection = document.getElementById("HeaderConnection");
				var lConnectionMsg = document.getElementById("ConnectionMsg");
                lConnectionMsg.style.display = "none";
				lHeaderConnection.style.display = "none";	
            },
            //===============================================
            connect: function(obj) {
				var lEmail = document.getElementsByName("Email")[0];
				var lPassword = document.getElementsByName("Password")[0];
				var lConnectionMsg = document.getElementById("ConnectionMsg");
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
                    var lHtml = "<i class='fa fa-book'></i> "; 
                    lHtml += lMessage; 
                    lConnectionMsg.innerHTML = lHtml;
                    lConnectionMsg.style.display = "block";
                }
                else {
                    this.sendConnection(lEmail.value, lPassword.value);
                }
            },
            //===============================================
            sendConnection: function(email, pass) {
				var lConnectionMsg = document.getElementById("ConnectionMsg");
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        if(!lDataMap["STATUS"]) {
                            var lHtml = "<i class='fa fa-book'></i> "; 
                            lHtml += lDataMap["MSG"]; 
                            lConnectionMsg.innerHTML = lHtml;
                            lConnectionMsg.style.display = "block";
                        }
                    }
                }
                lXmlhttp.open("POST", "/php/connection.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"REQ="+"CONNECT"+
					"&EMAIL="+email+
					"&PASSWORD="+pass
                    );            
                }
            //===============================================
        };
    }
    //===============================================
    return {
        Instance: function() {
            if (!linstance) {
                linstance = Container();
            }
            return linstance;
        }
    };
    //===============================================
})();
//===============================================
GConnection.Instance().init();
//===============================================
