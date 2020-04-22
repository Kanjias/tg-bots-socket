<?php
    require_once('settings.php');

    require_once('mysql.php');
    $db = new DB();

    function generateToken($length){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
    }

    if (!isset($_GET['create'])) {
        $_GET['create'] = 0;
    }

    if($_GET['create'] == 1 && isset($_POST['name']) && isset($_POST['abbr'])){
        $uaid = uniqid();
        $token = generateToken(settings::$tokenLength);

        if (settings::$authRequired) {
            if ($_POST['auth'] == in_array($auth, auth_tokens::$auth_tokens)) {
                $status = $db->createApp($abbr, $name, $token, $uaid);//$abbr, $name, $token, $uaid
                if ($status == 1) {
                    $create = "success";
                } else {
                    $create = "fail";
                }
            }
        } else {
            $status = $db->createApp($abbr, $name, $token, $uaid);//$abbr, $name, $token, $uaid
            if ($status == 1) {
                $create = "success";
            } else {
                $create = "fail";
            }
        }
	} else {
        $create = "false";
    }
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title>APP-Creation</title>
        <link rel="stylesheet" href="./styles/bootstrap.min.css">
        <link rel="stylesheet" href="./styles/bootstrap-grid.min.css">
        <link rel="stylesheet" href="./styles/bootstrap-reboot.min.css">
        <script src="./js/jquery-3.4.1.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>

    <?php
        if ($create == "false") {
            require_once('body-form.php');
        }
        
        if ($create != "false") {
            require_once('body-create.php');
        }
    ?>
</html>