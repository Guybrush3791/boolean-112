<?php

    class User {

        private $username;
        private $email;
        private $password;

        public function __construct(
            $username, $email, $password
        ) {

            $this -> setUsername($username);
            $this -> setEmail($email);
            $this -> setPassword($password);
        }

        public function getUsername() {

            return $this -> username;
        }
        public function setUsername($username) {

            if (!is_string($username) || strlen($username) < 3)
                throw new Exception("$username is not a valid username");

            $this -> username = $username;
        }

        public function getEmail() {

            return $this -> email;
        }
        public function setEmail($email) {

            $this -> email = $email;
        }

        public function getPassword() {

            return $this -> password;
        }
        public function setPassword($password) {

            if (!is_string($username) || strlen($username) < 3)
                throw new Exception("$password is not a valid password");

            $this -> password = $password;
        }
    }
    class Employee extends User {

        // COME SE...
        // $username;
        // $email;
        // $password;

        private $level;
        
        public function __construct(
            $username, $email, $password, $level
        ) {

            $this -> setUsername($username);
            $this -> setEmail($email);
            $this -> setPassword($password);
            
            $this -> setLevel($level);
        }

        // COME SE...
        // public function getUsername() {...}
        // public function setUsername($username) {...}

        public function getLevel() {

            return $this -> level;
        }
        public function setLevel($level) {

            $this -> level = $level;
        }

        public function doSomething() {

            // $this -> username = "Marco"; // ERROR
            $this -> setUsername("Marco");
        }
    }
    class PremiumUser extends User {

        private $membership;        

        public function __construct(
            $username, $email, $password, Membership $membership
        ) {

            $this -> setUsername($username);
            $this -> setEmail($email);
            $this -> setPassword($password);
            
            $this -> setMembership($membership);
        }

        public function getMembership() {

            return $this -> membership;
        }
        public function setMembership($membership) {

            $this -> membership = $membership;
        }
    }
    class Membership {

        private $expireDate;

        public function __construct($expireDate) {

            $this -> setExpireDate($expireDate);
        }

        public function getExpireDate() {

            return $this -> expireDate;
        }
        public function setExpireDate($expireDate) {

            $this -> expireDate = $expireDate;
        }
    }
    
    try {

        // $user = new User("Guybrush", "guybrush@gmail.com", "miapws");
        $user = new User(543, "guybrush@gmail.com", "miapws");
        var_dump($user);

        echo "<br><br>";

        $user -> setUsername(543);

        echo "User: " . $user -> getUsername();
        echo "<br>";
        echo "Email: " . $user -> getEmail();
        echo "<br>";
        echo "Password: " . $user -> getPassword();
    } catch (Exception $e) {

        echo "Errore nella creazione dell'utente 1: " . $e -> getMessage();
    }

    

    echo "<br><br>";

    $employee = new Employee("Guybrush", "guybrush@gmail.com", "miapws", 4);
    var_dump($employee);
    echo "<br>";

    $employee -> doSomething();
    var_dump($employee);

    echo "<br><br>";

    $membership = new Membership("10/03/2024");

    $premiumUser = new PremiumUser("Guybrush", "guybrush@gmail.com", "miapws", $membership);
    var_dump($premiumUser);

    $membership2 = $premiumUser -> getMembership();

    echo "<br><br>";

    echo "Username: " . $premiumUser -> getUsername();
    echo "<br>";
    echo "Expire date: " . $premiumUser -> getMembership() -> getExpireDate();