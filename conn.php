<?php

	 $hostname = "localhost";
	 $username ="root";
	 $password1 = "";
	 $dbname ="eligibility";
	 $dbc = mysqli_connect($hostname,$username,$password1,$dbname) OR die("Not connected, There is some problem :".mysqli_connect_error() );
	 mysqli_set_charset($dbc, "utf8");
 ?>