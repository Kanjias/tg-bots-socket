<?php
        /*
        *This File should be placed in /var/www/.mysql.credentials.php or in the settings.php defined path and should be readable for the webserver
        *I recommend placing this file outside website files to avoid data leakage
        */
        class DB_Credentials {
                protected static $_db_username = '{DB-Username}';
                protected static $_db_password = '{DB-Password}';
        }
?>