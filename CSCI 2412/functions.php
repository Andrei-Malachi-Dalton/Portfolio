<?php
    //Functions declare that they're a function, names the function, and does something
    function echoHelloWorld() {
        echo "Hello World </br>";
    }
    echoHelloWorld();

    //Make sure that functions are named descriptively

    /*
        Functions with input values allows the user to change the behavior inside of the function
        by passing different parameters
    */
    function echoName($name) {
        echo "Hello $name</br>";
    }
    echoName("Andrei");

    //From lab 2. Creating a function to see if a number is divisible by 3 or 5
    function checkDivisibleBy3or5($number) {
        if ($number % 3 == 0) {
            echo "$number is divisible by 3</br>";
        }elseif ($number % 5 == 0) {
            echo "$number is divisible by 5</br>";
        }elseif ($number % 3 == 0 && $number % 5 == 0) {
            echo "$number is divisible by 3 and 5</br>";
        }else {
            echo "$number is not divisible by 3 or 5</br>";
        }
    }
    checkDivisibleBy3or5(3);
    checkDivisibleBy3or5(5);
    checkDivisibleBy3or5(9);
    checkDivisibleBy3or5(10);
    checkDivisibleBy3or5(15);
    checkDivisibleBy3or5(19);

    //Functions can have more than one input
    function loginUser ($userName, $password) {
        //if $userName and $password match a user from the database, log them in
    }
    loginUser("AzureDiamond", "hunter2");

    //Functions can also return a value
    function cube($numToCube) {
        $cube = $numToCube * $numToCube * $numToCube;
        return $cube;
    }
    $cubeOf3 = cube(3);
    $cubeOf5 = cube(5);
    echo $cubeOf3; //should print 27
    echo $cubeOf5; //should print 125
    echo $cubeOf3 * $cubeOf5; //should print 3375