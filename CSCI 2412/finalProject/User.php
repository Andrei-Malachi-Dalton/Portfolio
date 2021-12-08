<?php
    class User {
        public $firstName;
        public $lastName;
        public $userName;
        public $password;
        protected $birthday;
 
        function __construct($firstName, $lastName, $userName) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->userName = $userName;
        }

        function set_password($password) {
            $this->password = $password;
        }

        function set_birthday($birthday) {
            $this->birthday = $birthday;
        }

        function echoUserInfo() {
            echo "First name: $this->firstName </br>Last name: $this->lastName </br> Username: $this->userName </br>";
        }
        function userLogin() {
            //no clue how to make this yet
        }   
    }
    $user = new User('Andrei', 'Dalton', 'AndreiDalton93');
    $user->echoUserInfo();