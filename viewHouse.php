
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
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

<h2>View House</h2>

<?php
include 'config.php'; 

$houseNo = $_GET['houseNo'];

$sql = "SELECT houseNo, street, city, room, ownerNo FROM Houses WHERE houseNo = '$houseNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>";
  while($row = $result->fetch_assoc()) {
  echo "
  <tr>
  <th>HouseNo</th>
  <td>$row[houseNo]</td>
  </tr>
  <tr>
  <th>Street</th>
  <td>$row[street]</td>
  </tr>
  <tr>
  <th>City</th>
  <td>$row[city]</td>
  </tr>
  <tr>
  <th>Room</th>
  <td>$row[room]</td>
  </tr>
  <tr>
  <th>OwnerNo</th>
  <td>$row[ownerNo]</td>
  </tr>";	
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<br><br>
<a href="manageHouses.php">Back to manage house menu</a>

</body>
</html>