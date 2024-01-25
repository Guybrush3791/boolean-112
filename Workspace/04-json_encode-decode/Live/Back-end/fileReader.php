<?php

    $jsonStudents = file_get_contents("students.json");
    $students = json_decode($jsonStudents, true);
    
    var_dump($students);