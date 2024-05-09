<!DOCTYPE html>
<html>
<body>

<h2>Insert House</h2>

<?php
include 'config.php'; 

$houseNo = $_POST["houseNo"];
$street = $_POST["street"];
$city = $_POST["city"];
$room = $_POST["room"];
$ownerNo = $_POST["ownerNo"];

$sql = "INSERT INTO Houses (houseNo, street, city, room, ownerNo)
VALUES ('$houseNo', '$street', '$city', '$room', '$ownerNo')";


if ($conn->query($sql) == TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="manageHouses.php">Back to manage house menu</a>

</body>
</html>
