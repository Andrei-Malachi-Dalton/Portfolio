<html>
    <?php
        include("header.php");

        $name = "";
        $favoriteNumber = "";
        $fullNameErr = "";
        $numErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fullName"])) {
                $fullNameErr = "Name is required";
        } else {
            $name = clean_input($_POST["fullName"]);
        }
        $favoriteNumber = clean_input($_POST["number"]);
        if (!is_numeric($favoriteNumber)) {
            $numErr = "Input must be a number";
            $favoriteNumber = ""; // clear invalid result for $favoriteNumber
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
        <h1>Welcome to a basic site</h1>
            <!-- 
                action is what sends the data to the specific file. Sends it via a post method.
                $_SERVER["PHP_SELF"] tells the code to stay on the same page and do something with it.
                This is helpful in the case of a user logging in and inputting the wrong password. 
            -->
        <style>
            .error {color: #FF0000;}
        </style>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="fullName">Name:</label>
            <input type="text" name="fullName" id="fullName" required>
            <span class="error">* <?php echo $fullNameErr;?></span><br>
            <label for="number">Favorite Number:</label>
            <input type="text" name="number" id="number">
            <span class="error">* <?php echo $numErr;?></span><br>
            <input type="submit" value="Submit">
        </form>

        <p>Name: <?php echo $name; ?> </p>
        <p>Your favorite number is: <?php echo $favoriteNumber ?> </p>
    </body>
</html>