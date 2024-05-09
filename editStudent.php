<!DOCTYPE html>
<html>
<body>

<h2>Edit Student</h2>

<?php
include 'config.php'; 

$studentNo = $_GET['studentNo'];
$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$email = $_POST["email"];

$sql = "SELECT studentNo, name, sex, age, email FROM Students WHERE studentNo = '$studentNo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Update row

  while($row = $result->fetch_assoc()) {
    echo " 
    <form action='updateStudent.php' method='post'>
    StudentNo: <input type='text' name='studentNo' value='$row[studentNo]'><br><br>
    Name: <input type='text' name='name' value='$row[name]'><br><br>";

    if("$row[sex]" == "Male")
    {
      echo "Sex: <select name='sex' >
      <option value='None'> </option>
      <option value='Male' selected>Male</option>
      <option value='Female'>Female</option>
      <option value='None'>Not specified</option>
      </select>";
    }
    elseif("$row[sex]" == "Female")
    {
      echo "Sex: <select name='sex'>      
      <option value='None'> </option>
      <option value='Male'>Male</option>
      <option value='Female' selected>Female</option>
      <option value='None'>Not specified</option>
      </select>";
    }
    else
    {
      echo "Sex: <select name='sex'>     
      <option value='None'> </option>
      <option value='Male'>Male</option>
      <option value='Female'>Female</option>
      <option value='None'>Not specified</option>
      </select>";
    }

    echo "
    <br><br>
    Age: <input type='text' name='age' value='$row[age]'><br><br>
    E-mail: <input type='text' name='email' value='$row[email]'><br><br><br>
    <input type='submit'>
  </form>";
  };
} else {
  echo "Student does not exist!";
}

$conn->close();
?>

<br><br>
<a href="manageStudents.php">Back to manage student menu</a>

</body>
</html>
