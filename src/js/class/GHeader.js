//===============================================
class GHeader extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("La méthode est obligatoire.");
        }
        else if(_method == "connect_icon") {
            this.runConnectIcon(_obj, _data);
        }
        else {
            this.m_logs.addError("La méthode est inconnue.");
        }
    }
    //===============================================
    runConnectIcon(_obj, _data) {
        this.m_logs.addLog("runConnectIcon...");
    }
    //===============================================
}
//===============================================
