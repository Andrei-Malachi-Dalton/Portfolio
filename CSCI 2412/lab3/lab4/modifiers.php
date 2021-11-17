<?php
    class Animal {
        /*
            These are created with the public access modifier. 
            The public modifier allows the properties to be changed by anything with no restrictions
            Be careful with these. 
            Due to them being so permisive, it is a bad practice to use them.
        */
        /*
            Protected modifier only allows the class and any subclasses to alter/use it. 
        */
        /*
            Private only allows the class itself to run the code
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
        
        function echoNameAndAge() {
            echo "$this->name is $this->age years old</br>";
        }

        public function dogAge() {
            $this->age = $this->multiplyAgeBy7();
            echo $this->age;
        }
        private function multiplyAgeBy7() {
            return $this->age * 7;
        }

    }
    $fido = new Animal("Fido", 7);
    $fido->dogAge(); //will return 49
    //$fido->multiplyAgeBy7(); will fail due to it being private. 