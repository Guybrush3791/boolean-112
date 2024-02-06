<?php

    class Category {

        private $id;

        private $name;
        private $icon;

        public function __construct(
            $id, $name, $icon
        ) {

            $this -> setId($id);

            $this -> setName($name);
            $this -> setIcon($icon);
        }

        public function getId() {

            return $this -> id;
        }
        public function setId($id) {

            $this -> id = $id;
        }

        public function getName() {

            return $this -> name;
        }
        public function setName($name) {

            $this -> name = $name;
        }

        public function getIcon() {

            return $this -> icon;
        }
        public function setIcon($icon) {

            $this -> icon = $icon;
        }
    }