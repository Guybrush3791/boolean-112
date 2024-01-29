<?php
    
    header("Content-Type: application/json");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5173");

    // VERSIONE 2: DEFINITIVA
    $jsonTasks = file_get_contents(__DIR__ . "/tasks.json");
    echo $jsonTasks;

    // VERSIONE 1
    // $tasks = [
    //     [
    //         "text" => "Fare la spesa",
    //         "completed" => false
    //     ],
    //     [
    //         "text" => "Fare il bucato",
    //         "completed" => true
    //     ],
    //     [
    //         "text" => "Fare il letto",
    //         "completed" => false
    //     ]
    // ];

    // $jsonTasks = json_encode($tasks);
    // echo $jsonTasks;