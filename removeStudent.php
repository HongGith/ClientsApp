<!DOCTYPE html>
<html>
<body>

<h2>Remove Student</h2>

<?php
include 'config.php'; 

$studentNo = $_GET['studentNo'];

echo "<form action='deleteStudent.php' method='post'>";
echo "
	StudentNo: <input type='text' name='studentNo' value='$studentNo' readonly><br><br><br>
	<input type='submit'>
";
echo "</form>";

$conn->close();
?>

<br><br>
<a href="manageStudents.php">Back to manage student menu</a>

</body>
</html>
