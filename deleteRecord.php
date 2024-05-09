<!DOCTYPE html>
<html>
<body>

<h2>Remove Record</h2>

<?php
include 'config.php'; 

$studentNo = $_POST['studentNo'];
$houseNo = $_POST['houseNo'];
$startDate = $_POST['startDate'];
$finishDate = $_POST['finishDate'];

$sql1 = "SELECT studentNo, houseNo, startDate, finishDate FROM HouseForRent WHERE studentNo = '$studentNo' AND houseNo = '$houseNo' AND startDate = '$startDate'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // delete row   	  
	$sql2 = "DELETE FROM HouseForRent WHERE studentNo = '$studentNo' AND houseNo = '$houseNo' AND startDate = '$startDate'";
	$result2 = $conn->query($sql2);
	
	$row = $result1->fetch_row();	
	echo "<b>The House Record below was deleted successfully:</b> <br><br>StudentNo: " .$row[0]. 
	" <br> HouseNo: $row[1] <br> StartDate: $row[2] <br> FinishDate: $row[3] <br>";	 
} else {
  echo "Record does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageRecord.php">Back to manage house record menu</a>

</body>
</html>
