<!DOCTYPE html>
<html>
<body>

<h2>Apply House</h2>

<?php
include 'config.php'; 

$houseNo = $_GET['houseNo'];
$startDate = date("m/d/Y");

$sql = "SELECT houseNo, street, city, room, ownerNo FROM Houses WHERE houseNo = '$houseNo'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // Update row

  while($row = $result->fetch_assoc()) {
    echo " 
    <form action='updateApply.php' method='post'>
    HouseNo: <input type='text' name='houseNo' value='$row[houseNo]' readonly><br><br>
    Street: <input type='text' name='street' value='$row[street]' readonly><br><br>
    City: <input type='text' name='city' value='$row[city]' readonly><br><br>
    Rooms: <input type='text' name='room' value='$row[room]' readonly><br><br>
    StudentNo: <input type='text' name='studentNo'><br><br>
    StartDate: <input type='text' name='startDate' value='$startDate'><br><br>
    FinishDate: <input type='text' name='finishDate'><br><br>
    <input type='submit'>
  </form>";
  };
} else {
  echo "House does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageHouses.php">Back to manage house menu</a>

</body>
</html>
