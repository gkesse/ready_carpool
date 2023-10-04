//===============================================
class GTest extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_method, _obj, _data) {
        if(_method == "") {
            this.m_logs.addError("Le module est obligatoire.");
        }
        else if(_method == "log") {
            this.runLog(_obj, _data);
        }
        else {
            this.m_logs.addError("Le module est inconnu.");
        }
    }
    //===============================================
    runLog(_obj, _data) {

    }
    //===============================================
}
//===============================================
