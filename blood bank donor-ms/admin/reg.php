<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$uname=$_POST['Name'];
$uemail=$_POST['Email'];
$upass=$_POST['Password'];
$ucpass=$_POST['Confirm Password']
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user_tbl (uname,uemail,upass,ucpass)
VALUES ('$uname', '$uemail','$upass','$ucpass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "Registration Succsessfull!!";
?>
<a href="register.html">Log In</a>