<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5173");

    $index = $_GET['index'];
    
    $jsonPosts = file_get_contents("posts.json");
    $posts = json_decode($jsonPosts, true);

    array_splice($posts, $index, 1);

    $jsonPosts = json_encode($posts);
    file_put_contents("posts.json", $jsonPosts);
    echo $jsonPosts;