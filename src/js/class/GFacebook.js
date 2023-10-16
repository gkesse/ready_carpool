//===============================================
class GFacebook extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "register") {
            this.onRegister(_obj, _data);
        }
        else if(_method == "login") {
            this.onLogin(_obj, _data);
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    onRegister(_obj, _data) {
        var lAjax = new GAjax();
        lAjax.callServer("facebook", "register", "", this.onRegisterCB);
    }
    //===============================================
    onRegisterCB(_data, _isOk) {
        if(_isOk) {

        }
    }
    //===============================================
    onLogin(_obj, _data) {
        var lAjax = new GAjax();
        lAjax.callServer("facebook", "login", "", this.onLoginCB);
    }
    //===============================================
    onLoginCB(_data, _isOk) {
        if(_isOk) {

        }
    }
    //===============================================
}
//===============================================
