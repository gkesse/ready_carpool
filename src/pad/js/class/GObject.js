//===============================================
var pad = pad || {};
var com = com || {};
//===============================================
pad.GObject = class {
    //===============================================
    constructor() {
        this.m_logs = new com.GLog();
        this.m_dataLogs = new com.GLog();
        this.m_map = [];
    }
    //===============================================
    isLogin() {
        var lIsLogin = document.getElementById("gIsLogin");
        return lIsLogin.value;
    }
    //===============================================
    redirectUrl(_url = "/") {
        location.replace(_url);
    }
    //===============================================
}
//===============================================
