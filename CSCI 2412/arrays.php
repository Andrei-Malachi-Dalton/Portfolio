<?php
//Basic array syntax with Strings
$starWarsFilms = array("A New Hope", "The Empire Strikes Back", "Return of the Jedi");

/*Printing an array
    PHP uses print_r unlike Java that uses print or println. 
    Don't forget the underscore.
*/

print_r($starWarsFilms);

//Accessing an element in an array. Arrays start at 0.
echo $starWarsFilms[1]; //the second element of the array. 

//Counting the amount of elements in an array
echo count($starWarsFilms); //should spit out 3

//Sorting an array. When sorting Strings they sort alphabetically
echo sort($starWarsFilms);

//Adding an element to the end of an array
array_push($starWarsFilms, "The Phantom Menace");

//Remove an element from an array
unset($starWarsFilms[0]); //removes the 2nd element in the list

//An associative array
$releaseDate = array("A New Hope"=>1977, "Empire Strikes Back"=>1980, "Return of the Jedi"=>1983);
echo "Empire was relaeased in ". $releaseDate["Empire Strikes Back"];

$animalSounds = array("Tiger"=>"Roar", "Cat"=>"Meow", "Dog"=>"Bark");
echo "Dogs go ". $animalSounds["Dog"];
