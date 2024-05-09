<!DOCTYPE html>
<html>
<body>

<h2>Remove Record</h2>

<?php
include 'config.php'; 

$studentNo = $_GET['studentNo'];
$houseNo = $_GET['houseNo'];
$startDate = $_GET['startDate'];
$finishDate = $_GET['finishDate'];

echo "<form action='deleteRecord.php' method='post'>";
echo "
	StudentNo: <input type='text' name='studentNo' value='$studentNo'><br><br><br>
	HouseNo: <input type='text' name='houseNo' value='$houseNo'><br><br><br>
	StartDate: <input type='text' name='startDate' value='$startDate'><br><br><br>
	FinishDate: <input type='text' name='finishDate' value='$finishDate'><br><br><br>
	<input type='submit'>
";
echo "</form>";

$conn->close();
?>

<br><br>
<a href="manageRecord.php">Back to manage house record menu</a>

</body>
</html>
