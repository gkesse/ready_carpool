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
            openDisconnection: function(obj) {
				var lHeaderDisconnection = document.getElementById("HeaderDisconnection");
				lHeaderDisconnection.style.display = "block";	
            },
            //===============================================
            closeConnection: function(obj) {
				var lHeaderConnection = document.getElementById("HeaderConnection");
				var lConnectionMsg = document.getElementById("ConnectionMsg");
                lConnectionMsg.style.display = "none";
				lHeaderConnection.style.display = "none";	
            },
            //===============================================
            closeDisconnection: function(obj) {
				var lHeaderDisconnection = document.getElementById("HeaderDisconnection");
				var lDisconnectionMsg = document.getElementById("DisconnectionMsg");
                lDisconnectionMsg.style.display = "none";
				lHeaderDisconnection.style.display = "none";	
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
                    var lHtml = "<i class='fa fa-exclamation-triangle'></i> "; 
                    lHtml += lMessage; 
                    lConnectionMsg.innerHTML = lHtml;
                    lConnectionMsg.style.display = "block";
                    lConnectionMsg.style.color = "#ff9933";
                }
                else {
                    this.sendConnection(lEmail.value, lPassword.value);
                }
            },
            //===============================================
            disconnect: function(obj) {
				var lDeconnectionMsg = document.getElementById("DeconnectionMsg");
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lHtml = "<i class='fa fa-power-off'></i> "; 
                        lHtml += lData; 
                        lDeconnectionMsg.innerHTML = lHtml;
                        lDeconnectionMsg.style.color = "#339933";
                        lDeconnectionMsg.style.display = "block";
                    }
                }
                lXmlhttp.open("POST", "/php/connection.php", true);
                lXmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                lXmlhttp.send(
					"REQ="+"DISCONNECT"
                    );            
            },
            //===============================================
            sendConnection: function(email, pass) {
				var lConnectionMsg = document.getElementById("ConnectionMsg");
				var lConnectionForm = document.getElementById("ConnectionForm");
                lConnectionMsg.style.display = "none";
                var lXmlhttp = new XMLHttpRequest();
                lXmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        var lData = this.responseText;
                        var lDataMap = JSON.parse(lData);
                        if(!lDataMap["STATUS"]) {
                            var lHtml = "<i class='fa fa-exclamation-triangle'></i> "; 
                            lHtml += lDataMap["MSG"]; 
                            lConnectionMsg.innerHTML = lHtml;
                            lConnectionMsg.style.color = "#ff9933";
                            lConnectionMsg.style.display = "block";
                        }
                        else {
                            var lHtml = "<i class='fa fa-check-circle'></i> "; 
                            lHtml += lDataMap["MSG"]; 
                            lConnectionMsg.innerHTML = lHtml;
                            lConnectionMsg.style.display = "block";
                            lConnectionMsg.style.color = "#339933";
                            ConnectionForm.submit();
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
