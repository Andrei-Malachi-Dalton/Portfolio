<?php
    class Animal {
        //Properties
        public $name;
        public $age;
        /*
            For classes variables are called properties and functions are called methods
        */

        //Constructors allow you to set multiple properties at once
        //Constructors have to have two underscores in php
        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        //Destructors are called once when an object is no longer being used
        //Prevents objects from taking up memory
        function __destruct() {
            echo "$this->name is no longer being used. Taking it out back. </br>";
        }
        function echoNameAndAge() {
            echo "$this->name is $this->age years old</br>";
        }
    }

    //Creating a new Animal object with the new __construct method
    //You have to provide the constructor with arguments or it won't run
    $spot = new Animal('Spot', 3);
    $spot->echoNameAndAge();

