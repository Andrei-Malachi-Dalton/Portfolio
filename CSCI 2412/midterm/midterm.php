<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <?php
        //include("CashRegister.php");
        include("PiggyBank.php");

        $register = new CashRegister(20);
        $piggy = new PiggyBank(20);
        echo $register->get_amountInRegister(); 
        echo "<br>";
        echo $piggy->get_amountInRegister();
        echo "</br>";
        $register->addMoney(10);
        echo "<br>";
        $piggy->addMoney(10);
        echo "<br>";
        $register->removeMoney(5);
        echo $register->get_amountInRegister();
        echo "<br>";
        $piggy->removeMoney(5);
        echo "<br>";
        $register->removeMoney(70);
        echo "<br>";
        $piggy->removeMoney(70);
        echo "<br>";
        $piggy->breakBank();

        $twisterErr = $repeatErr = "";
        $twister = $repeat = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!isset($_POST["tongueTwister"])){
                $twisterErr = "Field is required";
            }else{
                $twister = clean_input($_POST["tongueTwister"]);
            }

            if(!isset($_POST["numRepeat"])){
                $repeatErr = "Field is required";
            }else{
                $repeat = clean_input($_POST["numRepeat"]);
            }
        }

        function clean_input($data) {
            $data = trim($data); // removes whitespace
            $data = stripslashes($data); // strips slashes
            $data = htmlspecialchars($data); // replaces html chars
            return $data;
          }

    ?>
    <body>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
          <input type="radio" name="tongueTwister1" value="Peter Piper Picked a Peck of pickled peppers">Peter Piper Picked a Peck of pickled peppers
          <span class="error">* <?php echo $twisterErr;?></span>
          <br>
          <input type="radio" name="tongueTwister2" value="She sells seashells by the seashore">She sells seashells by the seashore
          <span class="error">* <?php echo $twisterErr;?></span>
          <br>
          <input type="radio" name="tongueTwister3" value="How much wood">How much wood would a woodchuck chuck if a woodchuck could chuck wood?
          <span class="error">* <?php echo $twisterErr;?></span>
          <br>
          How many times would you like to repeat?
          <input type="text" name="repeat" value="">
          <span class="error">* <?php echo $repeatErr;?></span>
          <br>
          <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>