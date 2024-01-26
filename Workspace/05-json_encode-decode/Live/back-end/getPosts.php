<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5173");

    // VERSIONE CON FILE JSON
    $jsonPosts = file_get_contents("posts.json");
    echo $jsonPosts;

    // VERSIONE SENZA FILE JSON
    // $posts = [
    //     [
    //         'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod, nisl eget ultricies aliquam, nunc nisl aliquet nunc, eget aliquam nis',
    //         'date' => '01/01/2020',
    //     ],
    //     [
    //         'text' => 'Hello World',
    //         'date' => '02/01/2020',
    //     ],
    //     [
    //         'text' => 'Ciao Mondo',
    //         'date' => '03/01/2020',
    //     ]
    // ];

    // $jsonPosts = json_encode($posts);
    // echo $jsonPosts;
