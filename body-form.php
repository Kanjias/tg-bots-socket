<body id="form">
    <form action="/?create=1" method="POST">
        <h1>Create App</h1>
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" required /></td>
                </tr>
            <tr>
                <td>Abbreviation: </td>
            <td><input type="text" name="abbr" required /></td>
            </tr>

            <tr <?php
                    if (!settings::$authRequired) {
                        echo 'style="display: none;"';
                    }
                ?>>
                <td>Auth_Token </td>
                <td><input type="text" name="auth" <?php
                        if (settings::$authRequired) {
                            echo "required";
                        }
                    ?> />
                </td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit">Submit</button></td>
            </tr>

</body>