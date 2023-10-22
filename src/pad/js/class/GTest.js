//===============================================
var pad = pad || {};
//===============================================
pad.GTest = class extends pad.GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("Le module est obligatoire.");
        }
        else if(_method == "test") {
            this.runTest(_obj, _data);
        }
        else {
            this.m_logs.addError("Le module est inconnu.");
        }
    }
    //===============================================
    runTest(_obj, _data) {
        this.m_logs.addLog("runTest...");
    }
    //===============================================
}
//===============================================
