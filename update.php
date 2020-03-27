<?php
	session_start();
	include('conn.php');
	$id=$_SESSION['id'];
	
	$matric_omarks=$_POST['matric_omarks'];
	$matric_tmarks=$_POST['matric_tmarks'];
	$inter_omarks=$_POST['inter_omarks'];
	$inter_tmarks=$_POST['inter_tmarks'];
	$matric_per=($matric_omarks/$matric_tmarks)*100;
	$inter_per=($inter_omarks/$inter_tmarks)*100;
	
	$q="update marks set matric_omarks = '$matric_omarks',matric_tmarks = '$matric_tmarks',matric_per='$matric_per', inter_omarks = '$inter_omarks', inter_tmarks = '$inter_tmarks' ,inter_per='$inter_per' where id='$id' ";
	mysqli_query($dbc,$q);
	header('location:admin.php');

?>