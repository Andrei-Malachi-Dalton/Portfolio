<?php
    class Animal {
        /*
            Inheritance allows you to create a class, assign it properties and methods, then
            "extend" the class into a new class which "inherits" all the properties and 
            mehtods of the parent class. 
        */
        public $name;
        public $age;
        

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        
        function __destruct() {
            echo "$this->name is no longer being used. Taking it out back. </br>";
        }

        function set_name($name) {
            $this->name = $name;
        }
        
        function get_name() {
            return $this->name;
        }

        
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

    //Created a new class that extends the Animal class above
    class Dog extends Animal {
        public function convertAge() {
            $convertedAge = $this->age * 7;
            echo "The dog $this->name is $this->age years old, which is $convertedAge in dog years!</br>";
        }
    }

    class Cat extends Animal {
        public function amountOfTimeSpentSleeping() {
            $this->age = $this->getTimeAsleep();
            echo "$this->name spent $this->age of their life sleeping.</br>";
        }

        private function getTimeAsleep() {
            return $this->age * 365 * 15;
        }
    }

    
    $eevee = new Cat('Eevee', 6);
    $eevee->amountOfTimeSpentSleeping();