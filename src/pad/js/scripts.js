//===============================================
var pad = pad || {}
//===============================================
function call_server(_module, _method, _obj = null, _data = null) {
    var lServer = new pad.GServer();
    lServer.run(_module, _method, _obj, _data);
    lServer.m_logs.showLogsX();
}
//===============================================
