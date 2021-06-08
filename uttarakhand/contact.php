<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apnaUttarakhand";

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (name, phone, email,subject,message)
VALUES ('".$name."','".$phone."','".$email."','".$subject."','".$message."')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>Hey $name,your record has been created successfully.</h1>";
  echo "<h3>We will contact you shortly.</h3>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 