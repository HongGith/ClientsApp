<!DOCTYPE html>
<html>
<body>

<h2>Insert Owner</h2>

<?php
include 'config.php'; 

$ownerNo = $_POST["OwnerNo"];
$name = $_POST["name"];
$address = $_POST["address"];
$city = $_POST["city"];
$email = $_POST["email"];

$sql = "INSERT INTO Owners (ownerNo, name, address, city, email)
VALUES ('$ownerNo', '$name', '$address', '$city', '$email')";


if ($conn->query($sql) == TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="manageOwners.php">Back to manage owner menu</a>

</body>
</html>
