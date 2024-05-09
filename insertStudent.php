<!DOCTYPE html>
<html>
<body>

<h2>Insert Student</h2>

<?php
include 'config.php'; 

$studentNo = $_POST["studentNo"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$email = $_POST["email"];

$sql = "INSERT INTO Students (studentNo, name, sex, age, email)
VALUES ('$studentNo', '$name', '$sex', '$age', '$email')";


if ($conn->query($sql) == TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br><br>
<a href="manageStudents.php">Back to manage student menu</a>

</body>
</html>
