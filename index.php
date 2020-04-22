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
        return $randomString;
    }

    if (!isset($_GET['create'])) {
        $_GET['create'] = 0;
    }

    if($_GET['create'] == 1 && isset($_POST['name']) && isset($_POST['abbr'])){
        $uaid = uniqid();
        $token = generateToken(settings::$tokenLength);

        if (settings::$authRequired) {
            if (in_array($_POST['auth'], settings::$auth_tokens)) {
                $status = $db->createApp($_POST['abbr'], $_POST['name'], $token, $uaid);//$abbr, $name, $token, $uaid
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