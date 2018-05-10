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
				lHeaderConnection.style.display = "none";	
            },
            //===============================================
            connect: function(obj) {
				var lEmail = document.getElementsByName("Email")[0];
				var lPassword = document.getElementsByName("Password")[0];
                var lRegExp = /\S+@\S+\.\S+/;
                var lMessage = "";

                if(!lEmail.value.length) {
                    lMessage = "Email est obligatoire";
                }
                else if(!lRegExp.test(lEmail.value)) {
                    lMessage = "Email est incorrect";
                }
                else if(!lPassword.value.length) {
                    lMessage = "Password est obligatoire";
                }
                
                if(lMessage.length) {
                    alert(lMessage);
                }
                else {
                    alert("Bonne Connexion");
                }
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
