<?php
	session_start();
	include('conn.php');
	$id=$_GET['id'];
	$q="delete from marks where id='$id'";
	mysqli_query($dbc,$q);
	header('location:admin.php');

?>