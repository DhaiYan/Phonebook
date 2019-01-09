<?php
	include('session.php');
	
	if(!isset($_SESSION['login_user'])) {
		header("location: RegisterSignIn.html");
	}
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `data` WHERE CONCAT(`id`, `name`, `number`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `data`";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "cordeno");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
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
<form class="form-inline" action="Read.php" method="post">
    <input class="form-control mr-sm-2" name="search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" name="btn_search">Search</button>
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
	<li class="breadcrumb-item"><a href="Create.php">Add Contact</a></li>
	<li class="breadcrumb-item active" aria-current="page"><strong>View Contact</strong></li>
  </ol>
</nav>

<br>
<br>
<center>
<div class="container">          
  <table class="table">
    <thead>
      <tr>
		<th>ID:</th>
        <th>Name:</th>
        <th>Contact Number:</th>
		<th>Action:</th>
     	
      </tr>
    </thead>
	<?php while($row = mysqli_fetch_array($search_result)):?>
    <tbody>
      <tr>
        <td><?php echo $row['id'];?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['number'];?></td>
		<td><div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="False">
      Dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
      <a class="dropdown-item" href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
    </div>
  </div></td>
        
      </tr>
	  </tbody>
	  <?php endwhile;?>
	 </table>
	</div>

</center>

</body>
</html>