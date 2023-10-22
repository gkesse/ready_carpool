//===============================================
var com = com || {};
var pad = pad || {};
//===============================================
pad.GFacebook = class extends pad.GObject {
    //===============================================
    constructor() {
        super();
        this.m_loginUrl = "";
    }
    //===============================================
    serialize(_code = "facebook") {
        var lDom = new com.GCode();
        lDom.createDoc();
        lDom.addData(_code, "login_url", this.m_loginUrl, true);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "facebook") {
        var lDom = new com.GCode();
        lDom.loadXml(_data);
        this.m_loginUrl = lDom.getData(_code, "login_url", true);
        lDom.getMap(_code, this.m_map, this);
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
        var lAjax = new pad.GAjax();
        lAjax.callServer("facebook", "register", "", this.onRegisterCB);
    }
    //===============================================
    onRegisterCB(_data, _isOk) {
        if(_isOk) {
            var lFBook = new pad.GFacebook();
            lFBook.deserialize(_data);
            lFBook.redirectUrl(lFBook.m_loginUrl);
        }
    }
    //===============================================
    onLogin(_obj, _data) {
        var lAjax = new pad.GAjax();
        lAjax.callServer("facebook", "login", "", this.onLoginCB);
    }
    //===============================================
    onLoginCB(_data, _isOk) {
        if(_isOk) {
            var lFBook = new pad.GFacebook();
            lFBook.deserialize(_data);
            lFBook.redirectUrl(lFBook.m_loginUrl);
        }
    }
    //===============================================
}
//===============================================
