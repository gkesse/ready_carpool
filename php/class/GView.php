<?php   
    class GView {
        private static $m_instance = null;
        //===============================================
        private function __construct() {
            
        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GView();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function getView($page) {
            $lFile = "data/json/views.json";
            $lData = GJson::Instance()->getData($lFile);
            $lPage = strtolower($page);
            
            if(!isset($lData[$lPage])) {
                $lData[$lPage] = 250; 
            }
            else {
                if($lData[$lPage] < 250) $lData[$lPage] = 250;
            }
            
            $lData[$lPage]++;
            ksort($lData);
            
            GJson::Instance()->saveData($lFile, $lData);
            return $lData[$lPage];
        }
        //===============================================
    }
?>