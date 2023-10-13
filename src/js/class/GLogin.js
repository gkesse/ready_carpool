//===============================================
class GLogin extends GObject {
    //===============================================
    constructor() {
        super();
        this.m_email = "";
        this.m_password = "";
    }
    //===============================================
    readData() {
        var lEmail = document.getElementById("LoginEmail_Email");
        var lPassword = document.getElementById("LoginEmail_Password");
        
        this.m_email = lEmail.value;
        this.m_password = lPassword.value;
    }
    //===============================================
    writeData() {
        var lEmail = document.getElementById("LoginEmail_Email");
        var lPassword = document.getElementById("LoginEmail_Password");
        
        lEmail.value = this.m_email;
        lPassword.value = this.m_password;
    }
    //===============================================
    serialize(_code = "register") {
        var lDom = new GCode();
        lDom.createDoc();
        lDom.addData(_code, "email", this.m_email);
        lDom.addData(_code, "password", this.m_password);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "register") {
        var lDom = new GCode();
        lDom.loadXml(_data);
        this.m_email = lDom.getData(_code, "email");
        this.m_password = lDom.getData(_code, "password");
        lDom.getMap(_code, this.m_map, this);
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "mail") {
            this.onMail(_obj, _data);
        }
        else if(_method == "keydown") {
            this.onKeydown(_obj, _data);
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    onMail(_obj, _data) {
        this.readData();
        var lAjax = new GAjax();
        var lData = this.serialize();
        lAjax.callServer("login", "mail", lData, this.onMailCB);
    }
    //===============================================
    onMailCB(_data, _isOk) {
        if(_isOk) {
            var lLogin = new GLogin();
            lLogin.redirectUrl();
        }
    }
    //===============================================
    onKeydown(_obj, _data) {
        var lEvent = _obj || window.event;
        var lKeyCode = lEvent.charCode || lEvent.keyCode;
        if(lKeyCode == 13) {
            var lSubmit = document.getElementById("LoginEmail_Submit")
            lSubmit.click();
        }
    }
    //===============================================
}
//===============================================
