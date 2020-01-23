<?php
	require_once('/var/www/.mysql.credentials.php');

	class DB extends DB_Credentials {
		private static $_db_host 			= "localhost";
		private static $_db_name			= "kanjias_bots";
		private static $_db;	
		
		function __construct() {
			try {
			self::$_db = new PDO("mysql:host=" . self::$_db_host . ";dbname=" . self::$_db_name,  self::$_db_username , self::$_db_password);
			} catch(PDOException $e) {
				echo "Datenbankverbindung gescheitert! " . $e;
				die();
			}
        }
        
        
    }
?>