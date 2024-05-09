
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

<h2>View Student</h2>

<?php
include 'config.php'; 

$studentNo = $_GET['studentNo'];

$sql = "SELECT studentNo, name, sex, age, email FROM Students WHERE studentNo = '$studentNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>";
  while($row = $result->fetch_assoc()) {
  echo "
  <tr>
  <th>StudentNo</th>
  <td>$row[studentNo]</td>
  </tr>
  <tr>
  <th>Name</th>
  <td>$row[name]</td>
  </tr>
  <tr>
  <th>Sex</th>
  <td>$row[sex]</td>
  </tr>
  <tr>
  <th>Age</th>
  <td>$row[age]</td>
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
<a href="manageStudents.php">Back to manage student menu</a>

</body>
</html>