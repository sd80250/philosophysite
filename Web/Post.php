<!DOCTYPE html>
<html>
<head>
<title>Philosophy Page</title>
</head>
<body>
<link rel="stylesheet" href="Political.css">

<h1 style="color: white;"><center>Political Philosophy</center></h1>


<body>

<form action="./comments.php" method="post" >
<p></p>
<textarea name="comments" id="comments" style="width:50%;height:100px;padding:2%;font-size:1.2em;border:12px ridge #6DB72C;"> -Argument: 
</textarea><br>
<input type="submit" value="Post">
<button id = "results" class = "result" type = "submit">
	</button>
</form>

</body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error){
	die("connection failed: " . $conn -> connect_error);
}

$sql1 = "SELECT * FROM display";
$result1 = $conn -> query($sql1);
if($result1 -> num_rows > 0){
	$rowNumber1 = ($result1 -> num_rows);
	while($row = $result1 -> fetch_assoc()){
		echo "<tr><td>" . $row["comment"]. "</td>"."<br>"."<br>";
	}
	echo "</table>";
}else{
	echo "0 comments";
}

$conn -> close();

?>
<table>
	<tr>
		<th>comments</th>
	</tr>
</table>




</body>


</html>