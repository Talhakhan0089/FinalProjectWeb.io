<?php
session_start();
include('conn.php');

if(isset($_POST['signupbtn']))
{
	
	$email=$_POST['email'];
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$cpassword=$_POST['cpass'];
	$q="select * from slogin where email='$email'";
		$q2 = mysqli_query($dbc,$q);
		$q3 = mysqli_fetch_array($q2);
	
	 	
	if($q3['email']!=$email)
	{
		if($password==$cpassword)
		{

			$password=md5($password);
			$sql="INSERT INTO `slogin` (`id`, `email`, `username`, `password`) VALUES (NULL, '$email', '$username', '$password')";
			mysqli_query($dbc,$sql);
			$_SESSION['message']="Registration Successful";
			$_SESSION['username']=$username;
			echo "<script>
			
			window.location.href='/aa/#pricing';
			</script>";
		}
		else
		{
			echo "<script>
			alert('Password do not match');
			window.location.href='/aa/#features';
			</script>";
		}
	}
	else
		{
			echo "<script>
			alert('Email Already Exist');
			window.location.href='/aa/#features';
			</script>";
		}


}






?>