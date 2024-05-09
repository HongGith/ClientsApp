<!DOCTYPE html>
<html>
<body>

<h2>Edit Student</h2>

<?php
include 'config.php'; 

$studentNo = $_POST['studentNo'];
$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$email = $_POST["email"];

$sql = "SELECT studentNo, name, sex, age, email FROM Students WHERE studentNo = '$studentNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row

	$sql = "UPDATE Students SET name = '$name', age = '$age', sex = '$sex', email = '$email' WHERE studentNo = '$studentNo'";
	$result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Student does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageStudents.php">Back to manage student menu</a>

</body>
</html>
