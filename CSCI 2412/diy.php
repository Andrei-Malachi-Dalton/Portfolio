<?php
    function multiplyBy37($number) {
        if (is_bool($number) || is_string($number)) {
            throw new Exception("This isn't a number you doof.");
        }
        return $number * 37;
    }
    try {
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