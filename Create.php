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

<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="index.php">Homepage</a></li>
	<li class="breadcrumb-item active" aria-current="page"><strong>Add Contact</strong></li>
	<li class="breadcrumb-item"><a href="Read.php">View Contact</a></li>
  </ol>

<br>
<br>
<center>
<form action="add.php" method="post">
  <div class="form-group">
  <div class="col-6">
    <label for="exampleInputName">Name:</label>
    <input type="text" name="name">
  </div>
  <br>
  <br>
  <div class="form-group">
  <div class="col-6">
    <label for="exampleInputContactNumber">Contact Number:</label>
    <input type="text" name="number">
  </div>
<br>
<br>
		 <div class = "col-1">
			<button type="submit" class="btn btn-light"><strong>Save</strong></button>
</div>
</form>
</center>

</body>
</html>