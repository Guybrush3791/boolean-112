<?php

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