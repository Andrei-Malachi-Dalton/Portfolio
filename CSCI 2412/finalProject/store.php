<?php
    include("header.php");
?>
<html>
<head>
    <style>
        img {
            width: 200px;
            height: 200px;
            object-fit: contain;
        }
    </style>
</head>
<body style="background-color:  #ff8000;">
        <div style="background-color: #000000 !important" class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 style="color: white; text-align:center">Faz-Store</h1>
            </div>
        </div>
        <div class="container">
        <h2 style="color: white; text-align:center">Featured Product</h2>
            <div class="row d-flex justify-content-center text-center">
                <div class="col-sm-4 py-2">
                    <div class="card">
                        <img class ="card-img-top" src="images/chicaplush.jpg" alt="Small yellow chicken doll with blue eyes. Wearing a bib that says 'Lets Eat' and holding a cupcake with eyes on a plate" style="width:100%">
                        <div class="card=body">
                            <h4 class="card-title">Chica Plush Doll</h4>
                            <p class="card-text" style="font-size: 10px">Chica has been transformed into a 6" </p>
                            <button type="button"  class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal">
                                View Item
                            </button>
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="border-bottom-style:none">
                                            <button type="button" class="close" data-dismiss="modal">x</button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="images/chicaplush.jpg" alt="Small yellow chicken doll with blue eyes. Wearing a bib that says 'Lets Eat' and holding a cupcake with eyes on a plate" style="width:100%">
                                            Chica has been transformed into a 6"
                                            <br>
                                            6" Plush figure features Funko's unique style. These adorable plush figures are perfect for any Fazbear fan! Check out the other FNAF Plush figures from Fazbear Entertainment, collect them all!.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="close" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color:#993300">
            <div class="container" >
                    <div class="row" >
                        <div class="col-sm-4 py-2">
                            <div class="card">
                                <img class ="card-img-top" src="images/koloktos.png" alt="giant golden statue with 6 arms" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">10. Koloktos</h4>
                                    <p class="card-text">Ancient Automaton</p>
                                    <button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal">
                                        Click to learn more
                                    </button>
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Ancient Automaton: Koloktos</h4>
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                </div>
                                                <div class="modal-body">
                                                    The final boss of the Ancient Cistern dungeon featured in The Legend of Zelda: Skyward Sword. 
                                                    This golden automaton is the guardian of the dungeon and protects it's charge with powerful blows from it's mighty axes. 
                                                    Should the original plan of attack fail, Koloktos then rises out of the ground and attacks the intruder head on. 
                                                    User it's weaons against it and strike swiftly at it's red core to bring it down. 
                                                    <img src="images/koloktos.gif" alt="giant golden statue brandishing it's swords" style="width:100%">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 py-2">
                            <div class="card">
                                <img class ="card-img-top" src="images/bongobongo.png" alt="giant golden statue with 6 arms" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">9. Bongo-Bongo</h4>
                                    <p class="card-text">Phantom Shadow Beast</p>
                                    <button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal2">
                                        Click to learn more
                                    </button>
                                    <div class="modal fade" id="myModal2">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Phantom Shadow Beast: Bongo-Bongo</h4>
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                </div>
                                                <div class="modal-body">
                                                    The final boss of the Shadow Temple in The Legend of Zelda: Ocarina of Time. Escaping from it's seal at the Bottom of the Well in Kakariko Villiage, 
                                                    Bongo-Bongo began it's rampage within the Shadow Temple, where the Sage of Shadow, Impa, resided. 
                                                    Cloaking it's body in shadow, the beast uses it's floating hands to beat and squeeze the life out of the Hero of Time. 
                                                    Only with the aid of the Lens of Truth can the Hero have a chance at defesting this monstrosity and sealing it back within the Well once and for all. 
                                                    <img src="images/bongobongo.gif" alt="giant upside-down monster beating its hands on a bongo drum" style="width:100%">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 py-2">
                            <div class="card">
                                <img class ="card-img-top" src="images/odolwa.png" alt="warrior with tribal wooden mask" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">8. Odolwa</h4>
                                    <p class="card-text">Masked Jungle Warrior</p>
                                    <button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal3">
                                        Click to learn more
                                    </button>
                                    <div class="modal fade" id="myModal3">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Masked Jungle Warrior: Odolwa</h4>
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                </div>
                                                <div class="modal-body">
                                                    The rogue God of the Woodfall area of Termina who made his nest deep within the Woodfall Temple in The Legend of Zelda Majora's Mask. 
                                                    This jungle warrior leaps around the battlefield summoning giant bugs, fire, and flesh eating flying insects. 
                                                    Attack this monsters legs to knock it down to deliver the final blow. But WATCH OUT! As your fairy companion states "If you get close to him, you'll be beaten!".
                                                    <img src="images/odolwa.gif" alt="Jungle like warrior swinging massive sword" style="width:100%">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 py-2">
                            <div class="card">
                                <img class ="card-img-top" src="images/goht.png" alt="mechanical goat monster with a human like face" style="width:100%">
                                <div class="card-body">
                                    <h4 class="card-title">7. Goht</h4>
                                    <p class="card-text">Masked Mechnical Monster</p>
                                    <button type="button" class="btn btn-primary stretched-link" data-toggle="modal" data-target="#myModal4">
                                        Click to learn more
                                    </button>
                                    <div class="modal fade" id="myModal4">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Masked Mechanical Monster: Goht</h4>
                                                    <button type="button" class="close" data-dismiss="modal">x</button>
                                                </div>
                                                <div class="modal-body">
                                                    The rogue God of the Woodfall area of Termina who made his nest deep within the Woodfall Temple in The Legend of Zelda Majora's Mask. 
                                                    This jungle warrior leaps around the battlefield summoning giant bugs, fire, and flesh eating flying insects. 
                                                    Attack this monsters legs to knock it down to deliver the final blow. But WATCH OUT! As your fairy companion states "If you get close to him, you'll be beaten!".
                                                    <img src="images/goht.gif" alt="giant, horned, mechanical beast charging towards a green clad boy" style="width:100%">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>