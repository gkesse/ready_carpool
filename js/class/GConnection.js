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
