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

        // // IF-ELSE
        // $x = 0;

        // if ($x > 5) {

        //     echo "$x e' maggiore di 5";
        // } else if ($x < -5) {

        //     echo "$x e' minore di -5";
        // } else {

        //     echo "$x e' compreso tra -5 e +5";
        // }

        // // NULL COALESING OPERATOR
        // $pws = $_GET['password'] ?? '-NO PWS-';

        // echo "<div>Password: $pws</div>";

        // // ARRAY
        // $arr = [1, 2, 3, 4, 5];
        // var_dump($arr);
        // echo "<br>-----------------------<br>";

        // $first = $arr[0];
        // var_dump($first);
        // echo "<br>-----------------------<br>";

        // $arr[] = 6;
        // var_dump($arr);
        // echo "<br>-----------------------<br>";

        // $person = [
        //     'name' => "John",
        //     'surname' => "Doe"
        // ];
        // var_dump($person);
        // echo "<br>-----------------------<br>";

        // $name = $person['name'];
        // var_dump($name);
        // echo "<br>-----------------------<br>";

        // $person['age'] = 30;
        // var_dump($person);
        // echo "<br>-----------------------<br>";

        // $team = [ 
        //     [ 
        //         "name" => "Fabio",
        //         "lastname" => "Forghieri",
        //         "role" => "Co-Founder",
        //     ],
        //     [
        //         "name" => "Michele",
        //         "lastname" => "Papagni",
        //         "role" => "Head of Teaching",
        //     ]
        // ];
        // var_dump($team);
        // echo "<br>-----------------------<br>";

        // $team1 = $team[0];
        // var_dump($team1);
        // echo "<br>-----------------------<br>";

        // $nameTeam1 = $team[0]['name']; // $team1['name'];
        // var_dump($nameTeam1);
        // echo "<br>-----------------------<br>";

        // // RAND
        // $rand = rand(0, 100); 
        // echo $rand;

        // FOR
        // for ($x=0;$x<10;$x++) {

        //     echo $x . "<br>";
        // }

        // FOREACH
        // $products = [
        //     'biscuits',
        //     'cornflakes',
        //     'milk'
        // ];
        // foreach ($products as $key => $product) {

        //     echo "[$key] $product <br>";
        // }

        // $studentData = [
        //     "name" => "John",
        //     "lastname" => "Doe"
        // ];
        // foreach ($studentData as $key => $value) {

        //     if ($key == "name") {
        //         echo "<b>$value</b> ";
        //     } else {
        //         echo $value;
        //     }
        // }
	
        $animals = [
            "mammals" => ["cow", "pig", "horse", "dog"],
            "birds" => ["duck", "chicken"]
        ];
        $duck = $animals["birds"][0];
        foreach ($animals as $specie => $anmialGroup) {
            echo "$specie:<br>";
            
            foreach ($anmialGroup as $animal) {

                if (strlen($animal) > 3) {
                    echo "- $animal <br>";
                }
            }

            echo "<br>";
        }
    ?>
</body>
</html>