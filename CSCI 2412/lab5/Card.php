<?php 
include("Article.php");
class Card extends Article {
    public function render() {
        $card = "
        <div class=\"card\">
            <h2>$this->header</h2>
            <p>$this->summary</p>
        </div>";
        echo $card;
    }
}

/*
    It's a bad idea to create objects and render them inside of a Class file. 
    This is because the objects will be created and rendered everytime the class is called in other files. 
    Only create and render objects in the final spots where you want them created. 
*/
$imagineCard = new Card("Imagine This!", "Imagination!", "paragraph text for imagination");
$visualizeCard = new Card("Visualize This!", "Visualization!", "paragraph text for visualization");
?>

<div class="container"> 
    <?php $imagineCard->render(); ?>
    <?php $visualizeCard->render(); ?>
</div>
