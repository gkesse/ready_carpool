//===============================================
var com = com || {};
var app = app || {};
//===============================================
app.GServer = class extends app.GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_module, _method, _obj, _data) {
        if(_module == "") {
            this.m_logs.addError("Le module est obligatoire.");
        }
        else if(_module == "test") {
            this.runTest(_method, _obj, _data);
        }
        else if(_module == "logs") {
            this.runLogs(_method, _obj, _data);
        }
        else if(_module == "header") {
            this.runHeader(_method, _obj, _data);
        }
        else if(_module == "register") {
            this.runRegister(_method, _obj, _data);
        }
        else if(_module == "login") {
            this.runLogin(_method, _obj, _data);
        }
        else if(_module == "facebook") {
            this.runFacebook(_method, _obj, _data);
        }
        else if(_module == "redirect") {
            this.runRedirect(_method, _obj, _data);
        }
        else {
            this.m_logs.addError("Le module est inconnu.");
        }
    }
    //===============================================
    runTest(_method, _obj, _data) {
        var lObj = new app.GTest();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runLogs(_method, _obj, _data) {
        var lObj = new com.GLog();
        lObj.run(_method, _obj, _data);
    }
    //===============================================
    runHeader(_method, _obj, _data) {
        var lObj = new app.GHeader();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runRegister(_method, _obj, _data) {
        var lObj = new app.GRegister();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runLogin(_method, _obj, _data) {
        var lObj = new app.GLogin();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runFacebook(_method, _obj, _data) {
        var lObj = new app.GFacebook();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runRedirect(_method, _obj, _data) {
        var lObj = new app.GRedirect();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
}
//===============================================
