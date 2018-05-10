<?php   
    class GConnect {
        //===============================================
        private static $m_instance = null;
        //===============================================
        private function __construct() {

        }
        //===============================================
        public static function Instance() {
            if(is_null(self::$m_instance)) {
                self::$m_instance = new GConnect();  
            }
            return self::$m_instance;
        }
        //===============================================
        public function connect($email, $password) {
            
        }
        //===============================================
    }
?>        