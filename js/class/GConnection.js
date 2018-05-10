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
                alert("ooooooooooooooo");
				var lHeaderConnection = document.getElementById("HeaderConnection");
				lHeaderConnection.style.display = "block";	
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
