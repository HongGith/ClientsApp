<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet">
<style>
table {
  border-collapse: collapse;
  width: 60%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: cyan;}
</style>
</head>
<body>

<h2>Students List</h2>

<p style="text-align:left"><a title='Click to add new Student' href='insertStudent.html'><button class='btn btn-info btn-large'>Add Student</button></a></p>
<?php
include 'config.php'; 

$sql = "SELECT studentNo, name, sex, age, email FROM Students";
$result = $conn->query($sql);


echo "<table>";
echo "<tr><th>StudentNo</th> <th> Name</th> <th> Sex</th> <th> Age</th> <th> Email </th> <th> Action </th> </tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {    
	echo "<tr> <td>$row[studentNo]</td> <td>$row[name]</td> <td>$row[sex]</td>  <td>$row[age]</td> <td>$row[email]</td> 
  <td><a title='Click to view the Student' href='viewStudent.php?studentNo=$row[studentNo]'<button class='btn btn-success btn-mini'> View </button></a> 
	<a title='Click to edit the Student' href='editStudent.php?studentNo=$row[studentNo]'<button class='btn btn-warning btn-mini'> Edit </button></a> 
	<a title='Click to delete the Student' href='removeStudent.php?studentNo=$row[studentNo]'<button class='btn btn-danger btn-mini'> Delete </button></a> </td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
echo "</table>"
?>

<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>