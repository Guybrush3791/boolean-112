<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $alert = false;

    $firstname = "Guybrush";
    $lastname = "Threepwood";

    $users = [
        [
            "firstname" => "Guybrush",
            "lastname" => "Threepwood",
            "email" => "guybrush@gmail.com"
        ],
        [
            "firstname" => "Elaine",
            "lastname" => "Marley",
            "email" => "elaine@gmail.com"
        ],
        [
            "firstname" => "LeChuck",
            "lastname" => "LeChuck",
            "email" => "lechuck@gmail.com"
        ]
    ];

    return view('myTests.test', compact("firstname", "lastname", "alert", "users"));
});

Route::get('/test2', function() {
    return view('myTests.test2');
});
Route::get('/test3', function() {
    return view('myTests.test3');
});
