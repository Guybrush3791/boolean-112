<?php

    // header('Content-Type: application/json');

    $students = [
        [
            'name' => 'John',
            'lastname' => 'Doe',
        ],
        [
            'name' => 'Marco',
            'lastname' => 'Rossi',
        ],
        [
            'name' => 'Francesco',
            'lastname' => 'Verdi',
        ],
    ];

    $jsonStudents = json_encode($students);
    file_put_contents("students.json", $jsonStudents);

    echo "File creato con successo!<br>";

?>
