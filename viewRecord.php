
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

<h2>View Record</h2>

<?php
include 'config.php'; 

$studentNo = $_GET['studentNo'];
$houseNo = $_GET['houseNo'];
$startDate = $_GET['startDate'];

$sql = "SELECT studentNo, houseNo, startDate, finishDate FROM HouseForRent WHERE studentNo = '$studentNo' AND houseNo = '$houseNo' AND startDate = '$startDate'";
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
  <th>StudentNo</th>
  <td>$row[studentNo]</td>
  </tr>
  <tr>
  <th>StartDate</th>
  <td>$row[startDate]</td>
  </tr>
  <tr>
  <th>FinishDate</th>
  <td>$row[finishDate]</td>
  </tr>";	
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<br><br>
<a href="manageRecord.php">Back to manage house record menu</a>

</body>
</html>