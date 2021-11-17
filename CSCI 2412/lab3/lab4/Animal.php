<?php
    class Animal {
        //Properties
        public $name;
        public $age;
        /*
            For classes variables are called properties and functions are called methods
        */
        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        //Destructors are called once when an object is no longer being used
        //Prevents objects from taking up memory
        function __destruct() {
            echo "$this->name is no longer being used. Taking it out back. </br>";
        }
        
        //Setter
        function set_name($name) {
            $this->name = $name;
        }
        //Getters always have a return because they are supposed to return a property
        function get_name() {
            return $this->name;
        }

        //Creating a setter and getter for the age of the Animal
        function set_age($age) {
            $this->age = $age;
        }

        function get_age() {
            return $this->age;
        }

        function echoNameAndAge() {
            echo "$this->name is $this->age years old</br>";
        }
    }
    $spot = new Animal('Spot', 3);
    $spot->echoNameAndAge();