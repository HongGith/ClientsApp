
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

<h2>View Owner</h2>

<?php
include 'config.php'; 

$ownerNo = $_GET['ownerNo'];

$sql = "SELECT ownerNo, name, address, city, email FROM Owners WHERE ownerNo = '$ownerNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>";
  while($row = $result->fetch_assoc()) {
  echo "
  <tr>
  <th>OwnerNo</th>
  <td>$row[ownerNo]</td>
  </tr>
  <tr>
  <th>Name</th>
  <td>$row[name]</td>
  </tr>
  <tr>
  <th>Address</th>
  <td>$row[address]</td>
  </tr>
  <tr>
  <th>City</th>
  <td>$row[city]</td>
  </tr>
  <tr>
  <th>Email</th>
  <td>$row[email]</td>
  </tr>";	
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<br><br>
<a href="manageOwners.php">Back to manage owner menu</a>

</body>
</html>