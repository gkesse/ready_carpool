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
        else if(_method == "facebook") {
            this.runFacebook(_obj, _data);
        }
        else {
            this.m_logs.addError("Le module est inconnu.");
        }
    }
    //===============================================
    runFacebook(_obj, _data) {
        var lObj = new GObject();
        lObj.redirectUrl("https://www.facebook.com/v18.0/dialog/oauth?client_id=6312782368822113&state=19346324065d2faac6168ea5cc74d26a&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=http%3A%2F%2Flocalhost%3A9053%2Fcallbacks%2Ffacebook&scope=email");
    }
    //===============================================
}
//===============================================
