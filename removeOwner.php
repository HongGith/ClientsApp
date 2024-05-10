<!DOCTYPE html>
<html>
<body>

<h2>Remove Owner</h2>

<?php
include 'config.php'; 

$ownerNo = $_GET['ownerNo'];

echo "<form action='deleteOwner.php' method='post'>";
echo "
	OwnerNo: <input type='text' name='ownerNo' value='$ownerNo' readonly><br><br><br>
	<input type='submit'>
";
echo "</form>";

$conn->close();
?>

<br><br>
<a href="manageOwners.php">Back to manage owner menu</a>

</body>
</html>
