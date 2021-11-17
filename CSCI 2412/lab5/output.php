<html>
    <body>
        <!--
            $_POST is where the information from the form is going to be stored. It will store them in the fullname and number spots
            echo returns the info from the forms
        -->
        <p>Welcome <?php echo htmlspecialchars($_POST["fullName"]); ?><br></p>
        <p>Your favorite number is: <?php echo htmlspecialchars($_POST["number"]); ?></p>

    </body>
</html>
