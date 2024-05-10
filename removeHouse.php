<!DOCTYPE html>
<html>
<body>

<h2>Remove House</h2>

<?php
include 'config.php'; 

$houseNo = $_GET['houseNo'];

echo "<form action='deleteHouse.php' method='post'>";
echo "
	HouseNo: <input type='text' name='houseNo' value='$houseNo' readonly><br><br><br>
	<input type='submit'>
";
echo "</form>";

$conn->close();
?>

<br><br>
<a href="manageHouses.php">Back to manage house menu</a>

</body>
</html>
