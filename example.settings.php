<?php
    // example file - change the values to yours and place this file in settings.php
    class settings {
        static $tokenLength = 255; // set the token length here
        static $authRequired = true; // set to false if you don't require a token for app registration - really not recommended!
        static $auth_tokens = ["Token1", "Token2" /* etc. */]; // list of the tokens that are authenticated to create Bots. Can be any string, but we recommend to use something secure alphanumeric (but not your passwords, because this is in clear text on your server)

    }
?>