<!DOCTYPE html>
<html>
<body>

<h2>Remove Owner</h2>

<?php
include 'config.php'; 

$ownerNo = $_POST["ownerNo"];

$sql1 = "SELECT ownerNo, name, address, city, email FROM Owners WHERE ownerNo = '$ownerNo'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // delete row   	  
	$sql2 = "DELETE FROM Owners WHERE ownerNo = '$ownerNo'";
	$result2 = $conn->query($sql2);
	
	$row = $result1->fetch_row();	
	echo "<b>The Owner below was deleted successfully:</b> <br><br>OwnerNo: " .$row[0]. 
	" <br> Name: $row[1] <br> Address: $row[2] <br> City: $row[3] <br> E-mail: $row[4] <br>";	 
} else {
  echo "Owner does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageOwners.php">Back to manage owner menu</a>

</body>
</html>
