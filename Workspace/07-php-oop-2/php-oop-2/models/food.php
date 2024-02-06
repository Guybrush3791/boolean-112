<?php

    class Food extends Product {

        private static $typology = "Cibo";

        private $expireDate;

        public function __construct(
            $id, $title, $image, $price,
            Category $category,
            $expireDate
        ) {

            $this -> setId($id);
            
            $this -> setTitle($title);
            $this -> setImage($image);
            $this -> setPrice($price);
            
            $this -> setCategory($category);

            $this -> setExpireDate($expireDate);
        }

        public function getExpireDate() {

            return $this -> expireDate;
        }
        public function setExpireDate($expireDate) {

            $this -> expireDate = $expireDate;
        }

        public function getTypology() {

            return self :: $typology;
        }
    }