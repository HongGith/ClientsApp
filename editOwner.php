<!DOCTYPE html>
<html>
<body>

<h2>Edit Owner</h2>

<?php
include 'config.php'; 

$ownerNo = $_GET['ownerNo'];

$sql = "SELECT ownerNo, name, address, city, email FROM Owners WHERE ownerNo = '$ownerNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row

  while($row = $result->fetch_assoc()) {
    echo " 
    <form action='updateOwner.php' method='post'>
    OwnerNo: <input type='text' name='ownerNo' value='$row[ownerNo]' readonly><br><br>
    Name: <input type='text' name='name' value='$row[name]'><br><br>
    Address: <input type='text' name='address' value='$row[address]'><br><br>
    City: <input type='text' name='city' value='$row[city]'><br><br>
    E-mail: <input type='text' name='email' value='$row[email]'><br><br><br>
    <input type='submit'>
  </form>";
  };
} else {
  echo "Owner does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageOwners.php">Back to manage owner menu</a>

</body>
</html>
