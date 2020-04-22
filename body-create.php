<body id="create">
    <?php
        if ($create == 'success') {
            echo '<h1>Successfully created!</h1>';
            echo '<h2><a href="/socket.php?uaid=' . $uaid . '&token=' . $token . '">Here is your Bot Endpoint</a></h2>';
        } else if ($create == 'fail') {
            echo '<h1>Create failed!</h1><br /><a href="/?create=0">Go back!</a>';
        }
    ?>
</body>