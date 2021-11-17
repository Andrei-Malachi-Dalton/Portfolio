<?php
    include("Animal.php");
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