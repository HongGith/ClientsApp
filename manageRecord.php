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

<h2>Records List</h2>

<p style="text-align:left"><a title='Click to apply House' href='manageApply.php'><button class='btn btn-info btn-large'>Apply House</button></a></p>
<?php
include 'config.php'; 

$sql = "SELECT studentNo, houseNo, startDate, finishDate FROM HouseForRent
ORDER BY houseNo, startDate
";
$result = $conn->query($sql);


echo "<table>";
echo "<tr><th>HouseNo</th> <th> StudentNo </th> <th> StartDate </th> <th> FinishDate </th> <th> Action </th> </tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {    
	echo "<tr> <td>$row[houseNo]</td> <td>$row[studentNo]</td> <td>$row[startDate]</td>  <td>$row[finishDate]</td>
  <td><a title='Click to view the record' href='viewRecord.php?studentNo=$row[studentNo]&houseNo=$row[houseNo]&startDate=$row[startDate]'<button class='btn btn-success btn-mini'> View </button></a>
	<a title='Click to delete the record' href='removeRecord.php?studentNo=$row[studentNo]&houseNo=$row[houseNo]&startDate=$row[startDate]&finishDate=$row[finishDate]'<button class='btn btn-danger btn-mini'> Delete </button></a> </td></tr>";
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