<html>

    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <?php
            $milesDrivenErr = $milesPerGallonErr = $gasTypeErr = $groceryErr = "";
            $milesDriven = $milesPerGallon = $gasType = $fuelPerks = $groceries = $groceryCost = "";
            $toggleInput = false;
            
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if(empty($_POST["milesDriven"])) {
                    $milesDrivenErr = "Miles driven is required";
                }else {
                    $name = test_input($_POST["milesDriven"]);
                    //Check to see if milesDriven only contains ints
                    if(!is_int($milesDriven)) {
                        $milesDrivenErr = "Please input a valid number";
                    }
                }

                if(empty($_POST["milesPerGallon"])) {
                    $milesPerGallonErr = "Please enter the miles per gallon";
                }else {
                    $milesPerGallon = test_input($_POST["milesPerGallon"]);
                    //checking to see if the miles per gallon is an integer
                    if (!is_int($milesPerGallon)) {
                        $milesPerGallonErr = "Please enter a valid number";
                    }
                }

                if(empty($_POST["gasType"])) {
                    $gasTypeErr = "Type of gas required";
                }else {
                    $gasType = test_input($_POST["gasType"]);
                }
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            function discount($groceryCost) {
                $groceryCost = $_POST["groceryCost"];
                if($groceryCost % 100 == 0) {
                    
                }
            }

            function totalCost() {

            }

        
        ?>

        <h2>How much does gas cost for your car?</h2>
        <p><span class="error">All fields are required</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            How many miles did you drive? <input type="text" name="milesDriven" value="<?php echo $milesDriven;?>">
            <span class="error">* <?php echo $milesDrivenErr;?></span>
            <br><br>
            What is your cars miles per gallon?: 
            <input type="text" name="milesPerGallon" value="<?php echo $milesPerGallon;?>">
            <span class="error">* <?php echo $milesPerGallonErr;?></span>
            <br><br>
            Type of gas used: 
            <br><br>
            <input type="radio" name="gasType" <?php if (isset($gasType) && $gasType=="87 octane - 1.89$/gal") echo "checked";?> value="1.89">87 octane - 1.89$/global
            <br><br>
            <input type="radio" name="gasType" <?php if (isset($gasType) && $gasType=="89 octane - 1.99$/gal") echo "checked";?> value="1.99">89 octane - 1.99$/global
            <br><br>
            <input type="radio" name="gasType" <?php if (isset($gasType) && $gasType=="92 octane - 2.09$/gal") echo "checked";?> value="2.09">92 octane - 2.09$/global
            <br><br>
            Did you purchase groceries this week?
            <input type="text" name="groceries" 
                <?php
                    if ($groceries = "yes") {
                        echo "How much did you spend? <input type='text' name='groceryCost' value='".$groceryCost."'"; 
                        
                    }else if ($groceries = "no") {
                        //do nothing and proceed with the calculation
                    }
                ?>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>

</html>