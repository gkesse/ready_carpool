//===============================================
class GHeader extends GObject {
    //===============================================
    constructor() {
        super();
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
            lChevron.className = "Header10 fa fa-chevron-up";
            lMenu.style.display = "block";
        }
        else {
            lChevron.className = "Header10 fa fa-chevron-down";
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
