<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("connection failed: " . $conn -> connect_error);
}

$Comments = mysqli_real_escape_string($conn, $_POST['comments']);

$sql = "INSERT INTO display (comment)
VALUES ('$Comments')";
if($conn->query($sql) === true){
	echo "page saved";
}
else {
	echo "Error: ". $sql. "<br>".$conn->error;
}


$array = array();
$returnvalue = 0;
$conn -> close();



?>

<form method = "post" action ="./Post.php">
  <button id = "posted" class = "result" type = "submit" value = "posted" >Post</button>
</form>