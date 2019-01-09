<?php
$name = filter_input(INPUT_POST, 'name');
$number = filter_input(INPUT_POST, 'number');
if (!empty($name)){
	if (!empty($number)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cordeno";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO data (name,number)
  values ('$name','$number')";
  if ($conn->query($sql)){
    header("location: Read.php");
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Number should not be empty";
  die();
}
 }
 else{
  echo "Name should not be empty";
  die();
 }
?>