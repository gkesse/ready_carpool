<?php   
    class GMetaData {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {
            
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GMetaData();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getData() {
            if(GConfig::Instance()->existData("view") == true) {
                $lFile = "/data/json/";
                $lFile .= GConfig::Instance()->getData("view"); 
                $lFile .= ".json";
                $m_data = GJson::Instance()->getData($lFile);
                if(isset($m_data["meta_data"])) {
                    $lMetaData = $m_data["meta_data"];
                    
                    foreach($lMetaData as $key => $value) {
                        GConfig::Instance()->setData($key, $value);
                    }
                }
            }
        }
        //===============================================
    }
?>        