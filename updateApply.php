<!DOCTYPE html>
<html>
<body>

<h2>Apply House</h2>

<?php
include 'config.php'; 

$houseNo = $_POST['houseNo'];
$street = $_POST["street"];
$city = $_POST["city"];
$room = $_POST["room"];
$studentNo = $_POST["studentNo"];
$startDate = $_POST["startDate"];
$finishDate = $_POST["finishDate"];

$sql = "SELECT * FROM Students WHERE studentNo = '$studentNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // insert row
	$sql = "INSERT INTO HouseForRent (studentNo, houseNo, startDate, finishDate)
	VALUES ('$studentNo', '$houseNo', '$startDate', '$finishDate')";
	$result = $conn->query($sql);
	echo "Your apply successfully"; 
} else {
  echo "Student does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageApply.php">Back to manage house menu</a>

</body>
</html>
