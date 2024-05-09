<!DOCTYPE html>
<html>
<body>

<h2>Edit House</h2>

<?php
include 'config.php'; 

$houseNo = $_POST['houseNo'];
$street = $_POST["street"];
$city = $_POST["city"];
$room = $_POST["room"];
$ownerNo = $_POST["ownerNo"];

$sql = "SELECT houseNo, street, city, room, ownerNo FROM Houses WHERE houseNo = '$houseNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row

	$sql = "UPDATE Houses SET street = '$street', city = '$city', room = '$room', ownerNo = '$ownerNo' WHERE houseNo = '$houseNo'";
	$result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "House does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageHouses.php">Back to manage house menu</a>

</body>
</html>
