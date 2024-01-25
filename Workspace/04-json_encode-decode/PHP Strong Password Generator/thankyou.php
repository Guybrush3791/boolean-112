<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        session_start();

        $pws = $_SESSION["pws"];

    ?>

</head>
<body>
    <h2 style="color: red;">
        Complimenti, la tua password e': 
        <?php echo $pws; ?>
    </h2>
</body>
</html>