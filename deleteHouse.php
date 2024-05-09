<!DOCTYPE html>
<html>
<body>

<h2>Remove House</h2>

<?php
include 'config.php'; 

$houseNo = $_POST["houseNo"];

$sql1 = "SELECT houseNo, street, city, room, ownerNo FROM Houses WHERE houseNo = '$houseNo'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // delete row   	  
	$sql2 = "DELETE FROM Houses WHERE houseNo = '$houseNo'";
	$result2 = $conn->query($sql2);
	
	$row = $result1->fetch_row();	
	echo "<b>The House below was deleted successfully:</b> <br><br>HouseNo: " .$row[0]. 
	" <br> Street: $row[1] <br> City: $row[2] <br> Room: $row[3] <br> OwnerNo: $row[4] <br>";	 
} else {
  echo "house does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageHouses.php">Back to manage house menu</a>

</body>
</html>
