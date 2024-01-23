<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
        <br>
        <input type="submit" value="Invia">
    </form>

    <?php

        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];

        if (
            strlen($name) > 3 
            && strpos($email, '@') !== false
            && strpos($email, '.') !== false
            && is_numeric($age)
        ) {

            echo "Accesso riuscito";
        } else {
            
            echo "Accesso negato";
        }

    ?>
</body>
</html>

<!-- 

    http://localhost/?name=Guybrush&email=guybrush%40gmail.com&age=34

 -->