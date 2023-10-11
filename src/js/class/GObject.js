//===============================================
class GObject {
    //===============================================
    constructor() {
        this.m_logs = new GLog();
        this.m_dataLogs = new GLog();
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
