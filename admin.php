<html>

<?php
	session_start();
	
	//isset()
	$applyformaster = isset($_POST['appmaster']) ? $_POST['appmaster'] : '';
	
	//$applyformaster = $_POST['appmaster'];
	include('conn.php');
	$lid=$_SESSION['mid'];

	$var="select * from marks where loginid='$lid'";
	$var1 = mysqli_query($dbc,$var);
	$var2 = mysqli_fetch_array($var1);
	echo "<style>
		table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		}
		th, td {
			padding: 5px;
			text-align: center;    
		}
		table#t01 tr:nth-child(even) {
			background-color: #eee;
		}
		table#t01 tr:nth-child(odd) {
			background-color: #fff;
		}
		table#t01 th {
			color: white;
			background-color: red;
			
		}
	</style>";
	echo "<table id='t01' style='width:80%' align='center'>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<tr>";
		echo "<th>Matric Obtain Marks</th>";
		echo "<th>Matric Total Marks</th>";
		
		echo "<th>Matric %</th>";
		echo "<th>Inter Obtain Marks</th>";
		echo "<th>Inter Total Marks</th>";
		echo "<th>Inter %</th>";
		echo "<th>Update/Delete</th>";
	echo "</tr>";
	while($var2)
	{
		
			echo "<tr>";
				echo "<td>";echo $var2['matric_omarks'];echo "</td>";
				echo "<td>";echo $var2['matric_tmarks'];echo "</td>";
				echo "<td>";echo $var2['matric_per'];echo "</td>";
				echo "<td>";echo $var2['inter_omarks'];echo "</td>";
				echo "<td>";echo $var2['inter_tmarks'];echo "</td>";
				echo "<td>";echo $per = $var2['inter_per'];echo "</td>";
				echo "<td>";echo "<a  href='up.php?id=".$var2['id']."'>Update</a>";echo "<a href='delete.php?id=".$var2['id']."'> / Delete</a>";echo "</td>";
			echo "</tr>";
		$var2 = mysqli_fetch_array($var1);
	}
	echo "</table>";
	
	$_SESSION['percent'] = $per;
	
	if(isset($_POST['save'])){
			if($applyformaster==='bscs'){
				header('Location:bscs.php');
		}
		else if($applyformaster==='bsse'){
				header('Location:bscs.php');
		}
		else if($applyformaster==='bsme'){
				header('Location:bsme.php');
		}
		else if($applyformaster==='bsee'){
				header('Location:bsee.php');
		}
		else if($applyformaster==='bsce'){
				header('Location:bsce.php');
		}
		else if($applyformaster==='bsit'){
				header('Location:bsit.php');
		}
		else if($applyformaster==='bba'){
				header('Location:bba.php');
		}
		
	}
?>

<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Eligibility Finder</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	
	
</head>
<body id="top">
		<!-- header 
   ================================================== -->
   <header>

   	<div class="row">

   		

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="current"><a class="smoothscroll"  href="index.html" title="">LOg Out</a></li>
					
										
				</ul>
			</nav>

			<a class="menu-toggle" href="#"><span>Menu</span></a>
   		
   	</div>   	
   	
   </header> <!-- /header -->
   <form action="" method="POST">
   
		<select id="applyformaster" name="appmaster">
	   
			<option value="bscs">BSCS</option>
			<option value="bsme">BSME</option>
			<option value="bsee">BSEE</option>
			<option value="bba">BBA</option>
			
		</select>
	   
	   <input type ="submit" class="button" name="save" id='save' value = "eligible Show" style="width: 20%" >
   
   </form>
<!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            
				<h4>Contact Us </h4>
	            <div class="footer-logo"></div>
				
	            <p>
		        	University of Central Punjab <br>
					Khayaban-e-Jinnah, Lahore<br>
		        	ikhlaq.ahmad@ucp.edu.pk &nbsp; <br>+92-313-6307006
		        	</p>

		      </div> <!-- /footer-info -->

	
	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="https://twitter.com/">Twitter</a></li>
						<li><a href="https://www.facebook.com/">Facebook</a></li>
						<li><a href="https://www.youtube.com/">Youtube</a></li>
						<li><a href="https://plus.google.com">Google+</a></li>
						<li><a href="https://www.linkedin.com/uas/login">Linkedin</a></li>
					</ul>
	      	           	
	      	</div> <!-- /social --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email &amp; hit enter" required=""> 
	   		
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- /subscribe -->         

	      </div> <!-- /row -->

   	</div> <!-- /footer-main -->


      <div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright 4Tech 2017.</span> 
		         	<span>Design by 4Tech</span>		         	
		         </div>

		         <div id="go-top" style="display: block;">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> <!-- /footer-bottom -->     	

      </div>

   </footer>  
   
   

  

</body>

</html>