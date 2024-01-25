<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        require_once __DIR__ . "/partials/functions.php";

        session_start();

        $color = "red";
    ?>


</head>
<body>
    
    <form>
        <input type="number" name="pws_lng">

        <br>

        <input type="checkbox" name="number" id="number">
        <label for="number">Numeri</label>
        <br>
        <input type="checkbox" name="letter" id="letter">
        <label for="letter">Lettere</label>
        <br>
        <input type="checkbox" name="symbol" id="symbol">
        <label for="symbol">Simboli</label>
        <br>
        <input type="checkbox" name="duplicate" id="duplicate">
        <label for="duplicate">Dupplicati</label>
        <br>
        

        <br>
        <input type="submit" value="GENERA">
    </form>

    <?php

        $pws_lng = $_GET["pws_lng"] ?? -1;

        $number = isset($_GET["number"]);
        $letter = isset($_GET["letter"]);
        $symbol = isset($_GET["symbol"]);  
        $duplicate = isset($_GET["duplicate"]);

        if ($pws_lng > 0) {
    
            // $pws = getPws($pws_lng);
            $_SESSION["pws"] = getAdvPws($pws_lng, $number, $letter, $symbol, $duplicate);
            header("Location: ./thankyou.php");
        }
    ?>

    <!-- <br><br>

    <h2 style="color: red;">
        La tua password e': 
        <?php echo $pws; ?>
    </h2> -->
</body>
</html>