
<?php
session_start();
	include('conn.php');
	if(isset($_POST['login']))
	{
	
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$password=md5($password);
		$q="select * from slogin where password='$password' AND email='$email'";
		$q2 = mysqli_query($dbc,$q);
		$q3 = mysqli_fetch_array($q2);
	if($email ==$q3['email'] && $password == $q3['password'])
	{
		echo $q3['id'];
		$_SESSION['mid']= $q3['id'];
		$lid=$q3['id'];
		$var="select * from marks where loginid='$lid'";
		echo $var;
		$q4 = mysqli_query($dbc,$var);
		$q5 = mysqli_fetch_array($q4);
		echo $q5['matric_omarks'];
		echo $q5['loginid'];
		if($q5['matric_omarks']==NULL)
		{
		header('location:info.html');	
		}
		else
		{
		header('location:admin.php');
		}
	}
	else
	{

		echo "<script>
		alert('Email or Password do not match');
		window.location.href='/aa/#pricing';
		</script>";
	}
}

 ?>
