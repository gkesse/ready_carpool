//===============================================
class GHeader extends GObject {
    //===============================================
    static m_instance = null;
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    static Instance() {
        if(this.m_instance == null) {
            this.m_instance = new GHeader();
        }
        return this.m_instance;
    }    
    //===============================================
    init() {
        document.addEventListener("click", function(e) {
            var lIsHide = true;
            lIsHide &&= !e.target.matches(".HeaderConnectIcon");
            lIsHide &&= !e.target.matches(".HeaderMenu");
            
            if(lIsHide) {
                var lChevron = document.getElementById("HeaderConnectChevron");
                var lMenu = document.getElementsByClassName("HeaderMenu")[0];
                lChevron.className = "HeaderConnectIcon Header10 fa fa-chevron-down";
                lMenu.style.display = "none";
            }
        });
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "connect_icon") {
            this.onConnectIcon(_obj, _data);
        }
        else if(_method == "disconnect") {
            this.onDisconnect(_obj, _data);
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    onConnectIcon(_obj, _data) {
        var lChevron = _obj.firstElementChild.nextElementSibling;
        var lMenu = _obj.nextElementSibling;

        if(lChevron.classList.contains("fa-chevron-down")) {
            lChevron.className = "HeaderConnectIcon Header10 fa fa-chevron-up";
            lMenu.style.display = "block";
        }
        else {
            lChevron.className = "HeaderConnectIcon Header10 fa fa-chevron-down";
            lMenu.style.display = "none";
        }        
    }
    //===============================================
    onDisconnect(_obj, _data) {
        var lAjax = new GAjax();
        lAjax.callServer("header", "disconnect");
    }
    //===============================================
}
//===============================================
GHeader.Instance().init();
//===============================================
