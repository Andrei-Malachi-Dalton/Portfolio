
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="toDoList.css">
</head>

<div class='toDoList'>
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="toDo">To Do:</label>
    <input type="text" name="toDo" id="toDo" required><br>
 
    <input type="checkbox" name="isDone" id="isDone" value="true">
    <label for="isDone">Is Done</label>
 
    <input type="submit" class="btn btn-primary" value="Submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$toDoItem = "";
$isDone = "false";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $toDoItem = clean_input($_POST["toDo"]);
    if (isset($_POST['isDone'])) {
        $isDone = "true";
    };
}

try {
  $conn = new PDO("mysql:host=$servername;dbname=toDoList", $username, $password);
//   echo "Connected Successfully";
  if(!empty($toDoItem)) {
    addToDoListItem($conn, $toDoItem, $isDone);
  } 
  
  completeToDoListItem($conn, 2);

  printToDoList($conn);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function printToDoList($conn) {
    $selectItem = "SELECT * FROM items";
    $stmt = $conn->prepare($selectItem);
    $stmt->execute();
 
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $listRow) {
        echo "<div class='toDoListItem row'>";
        $item = $listRow['toDoItem'];
        $complete = $listRow['isComplete'] ? 'Done' : 'To Do';
        echo "<p class='col-4 offset-1'>$item</p>
                <p class='col-2'>$complete</p>";
        echo "</div>";    }
}

function addToDoListItem($conn, $item, $isDone) {
    $insert = "INSERT INTO items (toDoItem,isComplete)
    VALUES ('$item', $isDone)";
    $conn->query($insert);
}

function completeToDoListItem($conn, $itemId) {
    $update = "UPDATE items
    SET isComplete = true
    WHERE itemId=:itemId";
    $stmt = $conn->prepare($update);
    $stmt->bindParam(':itemId', $itemId);
    $stmt->execute();
}



function clean_input($data) {
    $data = trim($data); // removes whitespace
    $data = stripslashes($data); // strips slashes
    $data = htmlspecialchars($data); // replaces html chars
    return $data;
}
?>
</div>
