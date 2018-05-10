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
        public function connect() {
            if(empty($_POST)) return;
            $lUserMap = GJson::Instance()->getData("data/json/users.json");
            $lEmail = $_POST["Email"];
            $lGroup = GGlobal::Instance()->getData($lUserMap["USERS"], "EMAIL", $lEmail, "GROUP");
            if(!isset($_SESSION["LOGIN"])) {
                $_SESSION["LOGIN"] = array(
                "EMAIL" => $lEmail,
                "GROUP" => $lGroup
                );
            }
        }
        //===============================================
    }
?>        