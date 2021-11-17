<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
 
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$username = $password = "";
$usernameErr = $passwordErr = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = clean_input($_POST["username"]);
    $password1 = clean_input($_POST["password1"]);
    $password2 = clean_input($_POST["password2"]);

    if ($password1 !== $password2) {
        $password = "";
        $passwordErr = "Passwords must match";
    } else {
        $password = password_hash($password1, PASSWORD_DEFAULT);
        //password_hash takes a users password and encrypts it
        //PASSWORD_DEFAULT specifies what type of hashing algorithm you want to use
    }
}
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=lab10", $dbusername, $dbpassword);

  if(empty($passwordErr)) {
    addUser($conn, $username, $password);
  }
 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 
function addUser($conn, $username, $password) {
    $insert = "INSERT INTO users (userName,password)
    VALUES (:username, :password)";
    $stmt = $conn->prepare($insert);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
}

function clean_input($data) {
    $data = trim($data); // removes whitespace
    $data = stripslashes($data); // strips slashes
    $data = htmlspecialchars($data); // replaces html chars
    return $data;
}
?>

<style>
    .error {color: #FF0000;}
</style>
<div class='userLoginForm container'>
    <div class="row">
        <div class="col-12 col-lg-6 offset-lg-3">
            <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="username">Username</label>
                    <span class="error">* <?php echo $usernameErr;?></span><br>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <span class="error">* <?php echo $passwordErr;?></span><br>
                    <input type="password" class="form-control" name="password1" id="password1" required>
                </div>
                <div class="form-group">
                    <label for="password2">Repeat Password</label>
                    <span class="error">* <?php echo $passwordErr;?></span><br>
                    <input type="password" class="form-control" name="password2" id="password2" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>


