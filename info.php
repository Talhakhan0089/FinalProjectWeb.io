<?php
session_start();
include('conn.php');
if(isset($_POST['submit']))
{
	

	$matric_omark=$_POST['omarks'];
	
	$matric_tmark=$_POST['tmarks'];
	$inter_omark=$_POST['interomarks'];
	$inter_tmark=$_POST['intertmarks'];
	$matric_per=($matric_omark/$matric_tmark)*100;
	$inter_per=($inter_omark/$inter_tmark)*100;
	echo $_SESSION['mid'];
	$lid=$_SESSION['mid'];
	$sql="INSERT INTO `marks` (`id`,`matric_omarks`,`matric_tmarks`,`matric_per`,`inter_omarks`,`inter_tmarks`,`inter_per`,`loginid`) VALUES (NULL,'$matric_omark','$matric_tmark','$matric_per','$inter_omark','$inter_tmark','$inter_per','$lid')";
	mysqli_query($dbc,$sql);
	echo "Registration Successful";
	header('location:admin.php');
	
		
	
}

?>