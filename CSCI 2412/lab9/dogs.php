<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="toDoList.css">
</head>

<div class='toDoList'>
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="breed">Breed:</label>
    <input type="checkbox" name="breed" id="breed" required><br>
 
    <input type="submit" class="btn btn-primary" value="Submit">
</form>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $breed = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $toDoItem = clean_input($_POST["toDo"]);
        if (isset($_POST['isDone'])) {
            $isDone = "true";
        };
    }


?>

