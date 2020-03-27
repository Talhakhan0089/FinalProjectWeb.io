<?php
	session_start();
	include('conn.php');
	$_SESSION['id']=$_GET['id'];
	
?>


<html>
<head>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>
	
	
	
	$(document).ready(function(){
	$('#nextmatric').click(function(){
	
//	var obtn_marks = ;
	//var tot_marks = ;
	if(document.getElementById("matric_omarks").value < document.getElementById("matric_tmarks").value )
	{
//	alert("aik;la gya");
	$("#matric").hide();
		$("#inter").show();return
	
	}
	else
	{
	//$("#matric").show();
	alert("Enter valid no");//return
	}
		
		
		
	});
	});
	
	$(document).ready(function(){
	$('#submit2').click(function(){
	
//	var obtn_marks = ;
	//var tot_marks = ;
	if(document.getElementById("inter_omarks").value < document.getElementById("inter_tmarks").value )
	{
	$("#inter").hide();
	$("#su1").show();
	}
	else
	{
	//$("#matric").show();
	alert("Enter valid obtain no");//return
	$("#inter").show();
	}
		
		
		
	});
	});
	
	
	</script>
	
	</script>
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



	<section id="features">
		<div class="row section-intro">
		<div class="col-twelve with-bottom-line">
	<form action="update.php" method="POST">
	<h5>Educational Detail</h5>
	<fieldset id="matric">
		<h1>Matric Marks</h1>
			<br><br>
		<h2 style="text-align: left; color:white;">Obtain Marks</h2>
		<input type = "number" placeholder="700"  id="matric_omarks" name="matric_omarks" style="width: 50%" required/>
		   
		<h2 style="text-align: left; color:white;">Total Marks</h2>
		<input type = "number" placeholder="850" id="matric_tmarks" name="matric_tmarks" style="width: 50%" required/>
		<input type ="button" class="button" id="nextmatric" name="nextmatric" value = "Next" style="width: 20%">
	</fieldset>
			<br>
		<fieldset id="inter" hidden>	
		<h1>Intermediate Marks</h1>
			<br><br>
		<h2 style="text-align: left; color:white;">Obtain Marks</h2>
		<input type = "number" placeholder="1000"  id="inter_omarks" name="inter_omarks" style="width: 50%" required/>
	  
		<h2 style="text-align: left; color:white;">Total Marks</h2>
		<input type = "number" placeholder="1100" id="inter_tmarks" name="inter_tmarks" style="width: 50%" required/>	

<input type ="button" class="button" id="submit2" name="submit2" value = "NEXT" style="width: 20%" >		
		
		</fieldset>
		<fieldset id="su1" hidden>
<input type ="submit" class="button" id="sub" name="sub" value = "Submit" style="width: 20%" >
	</fieldset>
	</form>
		</div>   		
		</div>

		</section>
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