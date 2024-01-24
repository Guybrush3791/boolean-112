<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        require_once __DIR__ . "/partials/vars.php";

        session_start();

    ?>
</head>
<body>

    <form>
        <input type="text" name="mail">
        <input type="submit" value="CHECK">
    </form>

    <?php

        $mail = $_GET["mail"];

        $errors = false;
        if (strpos($mail, '.') === false) {

            $errors = true;

            ?>

                <h1 style="color: red;">
                    <?php echo $error_punto; ?>
                </h1>

            <?php
        }
        if (strpos($mail, '@') === false) {

            $errors = true;
            ?>

                <h1 style="color: red;">
                    <?php echo $error_at; ?>
                </h1>

            <?php
        }
        
        // VERSIONE 1
        /* 
        
            if (!$errors) {
                ?>

                    <h1 style="color: green;">
                        <?php echo $mail_well_formatted; ?>
                    </h1>

                <?php
            }
        */

        // VERSIONE 2
        if (!$errors) {

            $_SESSION["mail"] = $mail;
            header('Location: ./thankyou.php');
        }
    ?>
</body>
</html>