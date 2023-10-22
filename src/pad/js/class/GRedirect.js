//===============================================
var pad = pad || {};
//===============================================
pad.GRedirect = class extends pad.GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "url") {
            this.onUrl(_obj, _data);
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    onUrl(_obj, _data) {
        var lObj = new pad.GObject();
        lObj.redirectUrl(_data);
    }
    //===============================================
}
//===============================================
