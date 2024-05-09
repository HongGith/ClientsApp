<!DOCTYPE html>
<html>
<body>

<h2>Remove Student</h2>

<?php
include 'config.php'; 

$studentNo = $_POST["studentNo"];

$sql1 = "SELECT studentNo, name, sex, age, email FROM Students WHERE studentNo = '$studentNo'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // delete row   	  
	$sql2 = "DELETE FROM Students WHERE studentNo = '$studentNo'";
	$result2 = $conn->query($sql2);
	
	$row = $result1->fetch_row();	
	echo "<b>The Student below was deleted successfully:</b> <br><br>StudentNo: " .$row[0]. 
	" <br> Name: $row[1] <br> Sex: $row[2] <br> Age: $row[3] <br> E-mail: $row[4] <br>";	 
} else {
  echo "Student does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageStudents.php">Back to manage student menu</a>

</body>
</html>
