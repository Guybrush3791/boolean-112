<?php

    // VERSIONE PRE-BONUS2

    // GENRES: STRING VERSION
    // class Movie {

    //     public $title;
    //     public $director;

    //     public $genres;

    //     public function __construct($title, $director, $genres) {

    //         $this -> title = $title;
    //         $this -> director = $director;

    //         $this -> genres = $genres;
    //     }

    //     public function getInfo() {

    //         $infoGenres = "";
    //         foreach ($this -> genres as $genre) {
    //             $infoGenres .= " - " . $genre;
    //         }

    //         return $this -> title 
    //             . " - " . $this -> director 
    //             . $infoGenres;
    //     }
    // }
    // GENRES: CLASS VERSION
    class Movie {

        public $title;
        public $director;

        public $genres;

        public function __construct($title, $director, $genres) {

            $this -> title = $title;
            $this -> director = $director;

            $this -> genres = $genres;
        }

        public function getInfo() {

            $infoGenres = "";
            foreach ($this -> genres as $genre) {
                $infoGenres .= " - " . $genre -> name;
            }

            return $this -> title 
                . " - " . $this -> director 
                . $infoGenres;
        }
    }
    class Genre {

        public $name;

        public function __construct($name) {

            $this -> name = $name;
        }
    }

    $genre1 = new Genre("Genre 1");
    $genre2 = new Genre("Genre 2");
    $genre3 = new Genre("Genre 3");

    var_dump($genre1);
    echo "<br>";
    var_dump($genre2);
    echo "<br>";
    var_dump($genre3);
    echo "<br>";
    echo "Genre: " . $genre1 -> name;
    echo "<br>";
    echo "Genre: " . $genre2 -> name;
    echo "<br>";
    echo "Genre: " . $genre3 -> name;
    echo "<br>";

    // GENRES: STRING VERSION
    // $movie1 = new Movie("My title 1", "My director 1", [
    //     "myGen1",
    //     "myGen2",
    //     "myGen3"
    // ]);
    // $movie2 = new Movie("My title 2", "My director 2", [
    //     "myGen1",
    //     "myGen3"
    // ]);
    // GENRES: CLASS VERSION
    $movie1 = new Movie("My title 1", "My director 1", [
        $genre1,
        $genre2,
        $genre3
    ]);
    $movie2 = new Movie("My title 2", "My director 2", [
        $genre1,
        $genre3
    ]);

    var_dump($movie1);
    echo "<br>";
    var_dump($movie2);
    echo "<br>";
    echo "Movie1: " . $movie1 -> getInfo();
    echo "<br>";
    echo "Movie2: " . $movie2 -> getInfo();
    echo "<br>";

    