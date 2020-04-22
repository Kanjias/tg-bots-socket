<?php
	require_once('/var/www/.mysql.credentials.php');

	class DB extends DB_Credentials {
		private static $_db;	
		
		function __construct() {
			try {
			self::$_db = new PDO("mysql:host=" . settings::$db_host . ";dbname=" . settings::$db_name,  self::$_db_username , self::$_db_password);
			} catch(PDOException $e) {
				echo "Datenbankverbindung gescheitert! " . $e;
				die();
			}
        }
        
        function createApp($abbr, $name, $token, $uaid){
			
        }
    }
?>