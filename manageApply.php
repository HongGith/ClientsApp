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

<h2>Houses List</h2>

<?php
include 'config.php';

$curDate = date("m/d/Y");

$sql = "SELECT houseNo, street, city, room, ownerNo
FROM Houses
WHERE houseNo NOT IN (
    SELECT houseNo
    FROM HouseForRent
    WHERE startDate <= '$curDate'
    AND finishDate >= '$curDate'
);
";

$result = $conn->query($sql);

echo "<table>";
echo "<tr><th>HouseNo</th> <th> Street </th> <th> City </th> <th> Room </th>  <th> ownerNo </th> <th> Action </th> </tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {    
	echo "<tr> <td>$row[houseNo]</td> <td>$row[street]</td> <td>$row[city]</td>  <td>$row[room]</td> <td>$row[ownerNo]</td> 
  <td> <a title='Click to apply the house' href='editApply.php?houseNo=$row[houseNo]'<button class='btn btn-success btn-mini'> Apply </button></a> </td></tr>";
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