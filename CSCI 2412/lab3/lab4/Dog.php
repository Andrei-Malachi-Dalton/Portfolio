<?php
include("Animal.php");
class Dog extends Animal {
        public function convertAge() {
            $convertedAge = $this->age * 7;
            echo "The dog $this->name is $this->age years old, which is $convertedAge in dog years!</br>";
        }
    }

$pochi = new Dog('Pochi', 7);
$pochi->convertAge();
