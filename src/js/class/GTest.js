//===============================================
class GTest extends GObject {
    //===============================================
    constructor() {
        super();
    }
    //===============================================
    run(_module, _method) {
                alert(sprintf("Bonjour tout le monde: %s, %s.\n", _module, _method));

        if(_method == "log") {
            this.runLog(_module, _method);
        }
    }
    //===============================================
    runLog(_module, _method) {

    }
    //===============================================
}
//===============================================
