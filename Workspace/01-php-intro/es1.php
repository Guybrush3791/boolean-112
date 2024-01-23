<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form>
        <input type="text" name="word">
        <input type="submit" value="Send">
    </form>

    <br>
    <br>

    <?php

        $words = [
            'Hello',
            'World',
            'Ciao',
            'Mondo',
            'Hola',
            'Mundo',
            'Bonjour',
            'Monde',
        ];
        var_dump($words);
        echo "<br>-----------------------------------------<br>";

        $userWord = $_GET['word'] ?? '';

        // if (in_array($word, $words)) {

        //     echo "The word '$word' is in the array";
        // } else {
            
        //     echo "The word '$word' is NOT in the array";
        // }

        $finded = false;
        foreach ($words as $word) {
            
            if ($word == $userWord) {

                echo "The word '$userWord' is in the array";
                $finded = true;
                
                break;
            }
        }

        if (!$finded) {

            echo "The word '$userWord' is NOT in the array";
        }

    ?>
</body>
</html>