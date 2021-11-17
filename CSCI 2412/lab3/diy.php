<?php
<<<<<<< HEAD
    function multiplyBy37($number) {
        if (is_bool($number) || is_string($number)) {
            throw new Exception("This isn't a number you doof.");
=======
    /*
        Name: Andrei Dalton
        Date: 9/16/2021
    */

    function multiplyBy37($number) {
        if (is_string($number) ||  is_bool($number)) {
            throw new Exception("This isn't a number ya doof.");
>>>>>>> 762cb3fe3518fe170acf3ef52419413cda20fbb8
        }
        return $number * 37;
    }
    try {
<<<<<<< HEAD
        echo multiplyBy37(24);
    }catch (Exception $ex) {
        $message = $ex->getMessage();
        echo $message;
    }finally {
        echo "<br>Process complete.<br>";
    }

    function sumOfMultiple() {
        $sum = 0;
        for($i = 1; $i <= 10; $i++) {
            if($i % 3 == 0 || $i % 5 == 0) {
                echo "$i<br>";
                $sum += $i;
            }
        }
        echo "Total: $sum";
    }
    sumOfMultiple();
=======
        echo multiplyBy37("kitty");
    }catch (Exception $e) {
        $message = $e->getMessage();
        echo $message;
    }finally {
        echo "</br>Done.";
    }

    function belowTen() {
        $sum = 0;
        for ($i = 10; $i >= 1; $i--) {
            if($i % 3 == 0 || $i % 5 == 0){
                echo "$i</br>";
                $sum += $i;
            }
        }
        echo $sum;
    }

    function belowOneThousand() {
        $sum = 0;
        for ($i = 1000; $i >= 1; $i--) {
            if($i % 3 == 0 || $i % 5 == 0){
                echo "$i</br>";
                $sum += $i;
            }
        }
        echo $sum;
    }
    belowTen();
    belowOneThousand();

>>>>>>> 762cb3fe3518fe170acf3ef52419413cda20fbb8
