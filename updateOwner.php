<!DOCTYPE html>
<html>
<body>

<h2>Edit Owner</h2>

<?php
include 'config.php'; 

$ownerNo = $_POST['ownerNo'];
$name = $_POST["name"];
$address = $_POST["address"];
$city = $_POST["city"];
$email = $_POST["email"];

$sql = "SELECT ownerNo, name, address, city, email FROM Owners WHERE ownerNo = '$ownerNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row

	$sql = "UPDATE Owners SET name = '$name', address = '$address', city = '$city', email = '$email' WHERE ownerNo = '$ownerNo'";
	$result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Owner does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageOwners.php">Back to manage owner menu</a>

</body>
</html>
