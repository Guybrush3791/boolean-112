<?php

    class Address {

        public $street;
        public $city;
        public $postcode;
        public static $country = "Italy";

        public function __construct($street, $city, $postcode) {

            $this -> street = $street;
            $this -> city = $city;
            $this -> postcode = $postcode;
        }

        public function getStreet() {

            return $this -> street;
        }
        public function setStreet($street) {

            $this -> street = $street;
        }

        public static function getCountry() {

            return self::$country;
        }
    }
    class User {

        public $nome;
        public $eta;
        public  $address;

        function __construct($nome, $eta,  $address) {

            $this -> nome = $nome;
            $this -> eta = $eta;
            $this -> address = $address;
        }
    }

    $address1 = new Address("via Roma", "Milano!", "20200");
    $address2 = new Address("via Milano", "Roma", "30300");

    $user1 = new User("Mario Rossi", 30, new Address("via Cavour", "Bologna", "40400"));
    $user2 = new User("Francesca Bianchi", 25, $address2);
    $user3 = new User("Franco Verdi", 45, null);

    // $address1 -> street = "via Roma";
    // $address1 -> city = "Torino";
    // $address1 -> postcode = "20200";

    // $address2 -> street = "via Milano";
    // $address2 -> city = "Roma";
    // $address2 -> postcode = "30300";

    var_dump($address1);
    echo "<br><br>";

    var_dump($address1 -> street);
    echo "<br>";
    var_dump($address1 -> city);
    echo "<br>";
    var_dump($address1 -> postcode);

    echo "<br>--------------------------<br>";

    var_dump($address2);
    echo "<br><br>";

    var_dump($address2 -> street);
    echo "<br>";
    var_dump($address2 -> city);
    echo "<br>";
    var_dump($address2 -> postcode);

    echo "<br>--------------------------<br>";

    var_dump($address1 -> getStreet());
    echo "<br>";

    $address1 -> setStreet("via Piero");
    var_dump($address1 -> getStreet());
    echo "<br>";
    var_dump($address2 -> getStreet());

    echo "<br>--------------------------<br>";

    var_dump($user1);
    echo "<br><br>";
    var_dump($user1 -> nome);
    echo "<br>";
    var_dump($user1 -> eta);
    // echo "<br>";
    // var_dump($user1 -> address);
    echo "<br>";
    var_dump($user1 -> address -> street);
    echo "<br>";
    var_dump($user1 -> address -> city);
    echo "<br>";
    var_dump($user1 -> address -> postcode);
    echo "<br>--------------------------<br>";
    var_dump($user2);

    echo "<br>--------------------------<br>";
    
    var_dump($address1::$country);
    echo "<br>";
    var_dump($address2::$country);
    echo "<br>";
    var_dump(Address::$country);
    echo "<br>";

    Address::$country = "Mexico";

    var_dump($address1::$country);
    echo "<br>";
    var_dump($address2::$country);
    echo "<br>";
    var_dump(Address::$country);
    
    echo "<br>--------------------------<br>";
    var_dump(Address::getCountry());

    echo "<br>--------------------------<br>";
    var_dump($user3);
    echo "<br>";
    echo("street: " . ($user3 -> address ?-> street));
    echo "<br>";
    echo "The end";
