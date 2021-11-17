<?php

//While loops continue until the specified condition is met
$i = 0;
while($i <= 5) {
    echo "The current number is $i </br>";
    $i++; //Increases $i by 1 until it gets to 5.
}//if you forget to end the loop you'll create an infinite loop

/* For loops are better suited for things that need to run for a set number of iterations
   The first section sets the initial value of the iterator. 
   The second section sets what causes the loop to end. 
   The third section says what will happen at the end of each iteration. 
*/
for($i = 0; $i <= 5; $i++) {
    echo "The current number is $i </br>";
}

for($i = -52; $i <= 100; $i += 5) {
    echo "The current number is $i </br>";
}

for($i = 0; $i <= 20; $i++) {
    echo "$i sheep at the bar buying a drink. </br>";
}

/* Foreach loops are only used for iterating through arrays
    Passes through the array ($avengers) and specifies each individual element within the
    array ($hero). 
    Then does something with the invidual elements.
*/
$avengers = array("Thor", "Captain America", "Iron Man", "Black Widow");

foreach ($avengers as $hero) {
    echo "$hero is in the Avengers <br>";
}

$topFiveGames = array("The Legend of Zelda: Breath of the Wild", "Skyrim", "Red Dead Redemption 2", "The Legend of Zelda: Majora's Mask", "Pokemon Alpha Sapphire");

foreach ($topFiveGames as $game) {
    echo "$game is one of my top five favorite games <br>";
}