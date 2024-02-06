<?php

    class Product {

        private $id;

        private $title;
        private $image;
        private $price;
        
        private $category;

        public function __construct(
            $id, $title, $image, $price,
            Category $category
        ) {

            $this -> setId($id);
            
            $this -> setTitle($title);
            $this -> setImage($image);
            $this -> setPrice($price);
            
            $this -> setCategory($category);
        }

        public function getId() {

            return $this -> id;
        }
        public function setId($id) {

            $this -> id = $id;
        }

        public function getTitle() {

            return $this -> title;
        }
        public function setTitle($title) {

            $this -> title = $title;
        }

        public function getImage() {

            return $this -> image;
        }
        public function setImage($image) {

            $this -> image = $image;
        }

        public function getPrice() {

            return $this -> price;
        }
        public function setPrice($price) {

            $this -> price = $price;
        }

        public function getCategory() {

            return $this -> category;
        }
        public function setCategory(Category $category) {

            $this -> category = $category;
        }
    }