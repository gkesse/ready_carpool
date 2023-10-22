//===============================================
var com = com || {};
var app = app || {};
//===============================================
app.GRegister = class extends app.GObject {
    //===============================================
    constructor() {
        super();
        this.m_email = "";
        this.m_password = "";
        this.m_confirm = "";
    }
    //===============================================
    readData() {
        var lEmail = document.getElementById("RegisterEmail_Email");
        var lPassword = document.getElementById("RegisterEmail_Password");
        var lConfirm = document.getElementById("RegisterEmail_Confirm");
        
        this.m_email = lEmail.value;
        this.m_password = lPassword.value;
        this.m_confirm = lConfirm.value;
    }
    //===============================================
    writeData() {
        var lEmail = document.getElementById("RegisterEmail_Email");
        var lPassword = document.getElementById("RegisterEmail_Password");
        var lConfirm = document.getElementById("RegisterEmail_Confirm");
        
        lEmail.value = this.m_email;
        lPassword.value = this.m_password;
        lConfirm.value = this.m_confirm;
    }
    //===============================================
    serialize(_code = "register") {
        var lDom = new com.GCode();
        lDom.createDoc();
        lDom.addData(_code, "email", this.m_email);
        lDom.addData(_code, "password", this.m_password);
        lDom.addData(_code, "confirm", this.m_confirm);
        lDom.addMap(_code, this.m_map);
        return lDom.toString();
    }
    //===============================================
    deserialize(_data, _code = "register") {
        var lDom = new com.GCode();
        lDom.loadXml(_data);
        this.m_email = lDom.getData(_code, "email");
        this.m_password = lDom.getData(_code, "password");
        this.m_confirm = lDom.getData(_code, "confirm");
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
        var lAjax = new app.GAjax();
        var lData = this.serialize();
        lAjax.callServer("register", "mail", lData, this.onMailCB);
    }
    //===============================================
    onMailCB(_data, _isOk) {
        if(_isOk) {
            var lRegister = new app.GRegister();
            lRegister.redirectUrl();
        }
    }
    //===============================================
    onKeydown(_obj, _data) {
        var lEvent = _obj || window.event;
        var lKeyCode = lEvent.charCode || lEvent.keyCode;
        if(lKeyCode == 13) {
            var lSubmit = document.getElementById("RegisterEmail_Submit")
            lSubmit.click();
        }
    }
    //===============================================
}
//===============================================
