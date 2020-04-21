<?php
        /*
        *This File should be placed in /var/www/.mysql.credentials.php and should be readable for the webserver
        *If you want it to place it anywhere else make sure to change the include path in the mysql.php
        */
        class DB_Credentials {
                protected static $_db_username = '{DB-Username}';
                protected static $_db_password = '{DB-Password}';
        }
?>