<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
	if (!empty($email)){
		if (!empty($firstname)){
			if (!empty($lastname)){
				if (!empty($password)){
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
  $sql = "INSERT INTO signup (username,email,firstname,lastname,password)
  values ('$username','$email','$firstname','$lastname','$password')";
  if ($conn->query($sql)){
    header("location: index.php");
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Password should not be empty";
  die();
}
}
else{
  echo "Last Name should not be empty";
  die();
}
}
else{
  echo "First Name should not be empty";
  die();
}
}
else{
  echo "Email should not be empty";
  die();
}
 }
 else{
  echo "Username should not be empty";
  die();
 }
?>