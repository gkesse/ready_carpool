//===============================================
var com = com || {};
var pad = pad || {};
//===============================================
pad.GServer = class extends pad.GObject {
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
        var lObj = new pad.GTest();
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
        var lObj = new pad.GHeader();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runRegister(_method, _obj, _data) {
        var lObj = new pad.GRegister();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runLogin(_method, _obj, _data) {
        var lObj = new pad.GLogin();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runFacebook(_method, _obj, _data) {
        var lObj = new pad.GFacebook();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
    runRedirect(_method, _obj, _data) {
        var lObj = new pad.GRedirect();
        lObj.run(_method, _obj, _data);
        this.m_logs.addLogs(lObj.m_logs);
    }
    //===============================================
}
//===============================================
