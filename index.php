<?php
	include('session.php');
	
	if(!isset($_SESSION['login_user'])) {
		header("location: RegisterSignIn.html");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Phonebook</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-slim.min.js"></script>
		<script src="js/popper.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
</head>
<body>

<div class="navbar navbar-dark bg-secondary justify-content-between">
<image style  src="images/phonebook.png" width="100" height="60">
<form class="form-inline">
    <input class="form-control mr-sm-2">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
  </form>
  <div id="profile">
					<b id="welcome">Hello, <i><?php echo $login_session; ?></i></b>
  <div class="desc"><b id="logout"><a href="logout.php">Log Out</a></b></div>
</div>
</div>

<br>
<br>
<div class="container">
<center><h1><div class="alert alert-secondary alert-dismissible fade show" role="alert">
  <font face="Cooper Std Black">Phonebook</font>
</div></h1></center>
<br>
<br>
<br>
<br>
<center>
<div class="container">
	<div class="col-7">
<a href="Create.php"><button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="tooltip" data-placement="bottom" title="Add Contact"><strong>Create Contact</strong></button><br>
<a href="Read.php"><button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="tooltip" data-placement="bottom" title="View Contact"><strong>View Contact</strong></button><br>
</div>
</center>

<br>
<br>
<br>
<div class="alert alert-secondary alert-dismissible fade show" role="alert">
  <p><strong>&copy; 2018 || Diane Cordeño</strong></p>
</div>

</body>
</html>