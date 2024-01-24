<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        require_once __DIR__ . "/partials/vars.php";

        session_start();
        $mail = $_SESSION["mail"];
    ?>

</head>
<body>
    <h1>Thank you</h1>
    <h1 style="color: green;">
        <?php echo "$mail_well_formatted: $mail"; ?>
    </h1>
</body>
</html>