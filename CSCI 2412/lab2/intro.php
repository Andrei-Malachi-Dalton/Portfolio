<?php 
    // echo "Hello world!";
    $firstName = "Andrei";
    $lastName = "Dalton";
    $age = 27;
    $currentYear = 2021;
    $isMarried = false;
    $birthYear = $currentYear - $age;

    echo "$firstName $lastName </br>";
	echo $firstName . " freaking " . $lastName . "</br>";
	echo "I was born in " . $currentYear - $age . "</br>";
	echo "I am married: $isMarried </br>"; //This will print a 1 or a 0, 1 means true, 0 means false

    $generation = ""; // set generation equal to an empty string
    if ($birthYear < 1965) {
	$generation = "Boomer";
    } elseif ($birthYear >= 1965 && $birthYear < 1981) {
	$generation = "Gen X";
    } elseif ($birthYear >= 1981 && $birthYear < 1996) {
	$generation = "Millennial";
    } elseif ($birthYear >= 1996 && $birthYear < 2012) {
	$generation = "Gen Z";
    } else {
	$generation = "Too young for a generational label";
    }
    echo $generation ."</br>";

