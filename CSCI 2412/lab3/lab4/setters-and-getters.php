<?php
    class Animal {
        //Properties
        public $name;
        public $age;
        /*
            For classes variables are called properties and functions are called methods
        */

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

    //Creating a new Object with an input 
    $fido = new Animal();
    $fido->set_name("Fido");

    //print_r($fido);
    //Prints Animal Object ( [name] => Fido )

    echo $fido->get_name() . "</br>";
    //Prints Fido
    //Most all properties will have a setter and a getter

    //Printing out the name and age of Animal object
    $fido->set_age(3);
    echo $fido->get_name() . "</br>";
    echo $fido->get_age() . " years old</br>";

    //Fun fact: Eevee is the name of my cat
    $eevee = new Animal();
    $eevee->set_name("Eevee");
    $eevee->set_age(6);

    //Using the function to return both getters in a sentence
    $stanley = new Animal();
    $stanley->set_name("Stanley");
    $stanley->set_age(2);
    $stanley->echoNameAndAge();



    