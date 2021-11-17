<?php
    class Person {
        public $firstName;
        protected $middleName;
        private $lastName;
        public $fullName;

        //Setters should be either public or have no access modifier
        public function set_firstName($name) {
            $this->firstName = $name;
        }
        public function set_middleName($name) {
            $this->middleName = $name;
        }
        public function set_lastName($name) {
            $this->lastName = $name;
        }

        function get_firstName() {
            return $this->firstName;
        }
        function get_middleName() {
            return $this->middleName;
        }
        function get_lastName() {
            return $this->lastName;
        }
        //This setter is private because the only place it's being called is in the method below.
        //If you have properties in the object that are made from other properties, use a private setter. 
        //it prevents others from altering the property from outside the class
        private function set_fullName() {
            $this->fullName = "$this->firstName $this->middleName $this->lastName";
        }
        public function get_fullName() {
            $this->set_fullName();
            return $this->fullName;
        }

}

$robin = new Person();
$robin->set_firstName("Robinson");
$robin->set_middleName("James");
$robin->set_lastName("Clower");

echo $robin->get_fullName();
