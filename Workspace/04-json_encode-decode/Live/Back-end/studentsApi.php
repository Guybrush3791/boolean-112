<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5173");

    $students = [
        [
            'name' => 'Francesca',
            'lastname' => 'Bianchi',
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
    echo $jsonStudents;