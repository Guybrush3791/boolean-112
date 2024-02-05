<?php

    require_once("models/movie.php");
    require_once("models/genre.php");

    $genre1 = new Genre("Genre 1");
    $genre2 = new Genre("Genre 2");
    $genre3 = new Genre("Genre 3");

    $movie1 = new Movie("My title 1", "My director 1", [
        $genre1,
        $genre2,
        $genre3
    ]);
    $movie2 = new Movie("My title 2", "My director 2", [
        $genre1,
        $genre3
    ]);

    $movies = [ $movie1, $movie2 ];