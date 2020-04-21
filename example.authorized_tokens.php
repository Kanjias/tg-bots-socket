<?php

# This is an example how the authorized_tokens.php could looks like. 

    class auth_tokens {
        private static $_required = true; # set to false if you don't require an auth token - NOT RECOMMENDED! (Everyone can create Bots using your socket - this would flood your database (but can't be used to abuse your server, because the person won't be able to create a main.php))
        private static $_auth_tokens = ["Token1", "Token2" /* etc. */]; # list of the tokens that are authenticated to create Bots. Can be any string, but we recommend to use something secure alphanumeric (but not your passwords, because this is in clear text on your server)
    }
?>