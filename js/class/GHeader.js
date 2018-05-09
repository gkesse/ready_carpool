//===============================================
var GHeader = (function() {
    //===============================================
    var linstance;
    //===============================================
    var Container = function() {
        return {
            //===============================================
            init: function(obj) {

            },
            //===============================================
            openHeaderMenu: function(obj) {
				var lHeaderMenu = document.getElementById("HeaderMenu");
				var lBars = '<i class="fa fa-bars"></i>';
				if(obj.innerHTML == lBars) {
					lBars = '<i class="fa fa-close"></i>';
					lHeaderMenu.className += " RWD";
				}
				else {
					var lClassName = lHeaderMenu.className;
					lHeaderMenu.className = lClassName.replace(" RWD", "");
				}
				obj.innerHTML = lBars;	
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
GHeader.Instance().init();
//===============================================
