<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        define("DB_SERVERNAME", "localhost");
        define("DB_USERNAME","root");
        define("DB_PASSWORD", "code");
        define("DB_NAME", "db-university");
        
        // Connect
        $conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
        
        // Check connection
        if ($conn && $conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
        }

        $year = $_GET['year'] ?? -1;
    ?>
</head>
<body>
    
    <?php

        if ($year != -1) {
            $sql = "
                SELECT name, surname, date_of_birth 
                FROM students 
                WHERE YEAR(date_of_birth) = ?
                ORDER BY date_of_birth DESC;
            ";

            $stmt = $conn -> prepare($sql);
            $stmt -> bind_param("i", $year);
        } else {

            $sql = "
                SELECT name, surname, date_of_birth 
                FROM students 
                ORDER BY date_of_birth DESC;
            ";

            $stmt = $conn -> prepare($sql);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        // $result = $conn -> query($sql);

        if ($result && $result -> num_rows > 0) {
            
            ?>

            <h1>Students:</h1>
            <form>
                <select name="year">
                    <?php

                        for ($i=1970;$i<=2010;$i++) {

                            ?>

                                <option
                                    value="<?php echo $i; ?>"
                                    <?php
                                        if ($year == $i) {

                                            echo "selected";
                                        }
                                    ?>
                                >
                                    <?php echo $i; ?>
                                </option>
                            <?php
                        }

                    ?>
                </select>
                <input type="submit" value="FILTER">
            </form>
            <ul>
            <?php

                while($row = $result -> fetch_assoc()) {

                    ?>

                    <li>
                        <?php echo $row['name']; ?>
                        <?php echo $row['surname']; ?>: 
                        <?php echo $row['date_of_birth']; ?>
                    </li>

                    <?php
                }
            ?>
            </ul>
            <?php
        } elseif ($result) {
            echo "0 results";
        } else {
            echo "query error";
        }

        $conn -> close();

        echo "The end";

    ?>
    
</body>
</html>