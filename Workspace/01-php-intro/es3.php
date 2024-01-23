<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Invia">
    </form>

    <?php

        if (isset($_GET['password'])) {

            $password = $_GET['password'];
            if($password == 'Boolean') {

                echo '<h1 style="color: green">Password corretta</h1>';
            } else {

                echo '<h1 style="color: red">Password errata</h1>';
            }
        }
    ?>
</body>
</html>