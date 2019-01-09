<?php
	require('db.php');
	$id = $_REQUEST['id'];
	$query = "update FROM data where id = $id";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: Read.php");
?>