<html>
<?php

session_start();

?>



<head>
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
<?php
echo "<div align=center>";
// UCP BBA

$uni_data = file_get_contents('http://ucp.edu.pk/ps_admission_requirements');
    preg_match('#<strong>Eligibility and Admission Criteria</strong>(.*?)<strong>Requirements of the degree</strong>#is', $uni_data, $wraper);
?>
<?php
$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);
$p1 = 60;
$p2 = 45;

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	$p = substr($admission_criteria,$pos,2);
	
	
	
	if($p <= $_SESSION['percent']){
		
		echo '<br><br><br><h2 style="color:white"> UCP FACULTY OF INFORMATION TECHNOLOGY (Contains BSCS	)</h2>';
		
		echo '
		
			<div class="row">
				<div class="col s12 m6">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<p>';
							echo $admission_criteria ;
		echo '
						</p>
					</div>
				  </div>
				</div>
			</div>
		
		';
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
			echo '<br><br><br><h2 style="color:white"> UCP FACULTY OF INFORMATION TECHNOLOGY (Contains BSCS	)</h2>';
			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
			echo '<br><br><br><h2 style="color:white"> UCP FACULTY OF INFORMATION TECHNOLOGY (Contains BSCS	)</h2>';

			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	
	
}


?>

<?php
echo "<div align=center>";
// UOL BBA

$uni_data = file_get_contents('http://lbs.uol.edu.pk/PROGRAMS/Undergraduate/Bachelor-of-Business-Administration-Honors');
       preg_match('#<h1>Requirements</h1>(.*?)<h4>Why this</h4>#is', $uni_data, $wraper);
?>
<?php
$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);
$p1 = 60;
$p2 = 45;

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	 $p = substr($admission_criteria,$pos,2);
	
	
	
	if($p <= $_SESSION['percent']){
		
echo '<h2 style="color:white"> UOL Bachelor of Business Administration (BBA)</h2>';
		
		echo '
		
			<div class="row">
				<div class="col s12 m6">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<p>';
							echo $admission_criteria ;
		echo '
						</p>
					</div>
				  </div>
				</div>
			</div>
		
		';
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
			echo '<h2 style="color:white"> UOL Bachelor of Business Administration (BBA)</h2>';
			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo '<h2 style="color:white"> UOL Bachelor of Business Administration (BBA)</h2>';

			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	
	
}


?>

<?php
// UMT BBA

$uni_data = file_get_contents('http://admissions.umt.edu.pk/Admission-Criteria.aspx');
       preg_match('#<ol style="list-style-type: lower-alpha;">(.*?)</ol>#is', $uni_data, $wraper);
?>
<?php
$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);
$p1 = 60;
$p2 = 45;

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	 $p = substr($admission_criteria,$pos,2);
	
	
	
	if($p <= $_SESSION['percent']){
		
echo '<h2 style="color:white"> UMT Undergraduate Admission Requirements – Business Programs</h2>';
		
		echo '
		
			<div class="row">
				<div class="col s12 m6">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<p>';
							echo $admission_criteria ;
		echo '
						</p>
					</div>
				  </div>
				</div>
			</div>
		
		';
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
echo '<h2 style="color:white"> UMT Undergraduate Admission Requirements – Business Programs</h2>';
			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo '<h2 style="color:white"> UMT Undergraduate Admission Requirements – Business Programs</h2>';

			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	
	
}


?>
<?php
// PU BBA

$uni_data = file_get_contents('http://pu.edu.pk/program/show/305/Institute-of-Business-Administration-IBA');
       preg_match('#<b>Eligibility: </b>(.*?)<b>Merit Formula: </b>#is', $uni_data, $wraper);
?>
<?php
$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);
$p1 = 60;
$p2 = 45;

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	 $p = substr($admission_criteria,$pos,2);
	
	
	
	if($p <= $_SESSION['percent']){
		
echo '<h2 style="color:white"> PU Undergraduate Admission Requirements – Business Programs</h2>';
		
		echo '
		
			<div class="row">
				<div class="col s12 m6">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<p>';
							echo $admission_criteria ;
		echo '
						</p>
					</div>
				  </div>
				</div>
			</div>
		
		';
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
		echo '<h2 style="color:white"> PU Undergraduate Admission Requirements – Business Programs</h2>';	echo '<h2 style="color:white"> UOL Bachelor of Business Administration (BBA)</h2>';
			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo '<h2 style="color:white"> PU Undergraduate Admission Requirements – Business Programs</h2>';

			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	
	
}


?>
<?php
// Comsats BBA

$uni_data = file_get_contents('http://ww3.comsats.edu.pk/ms/BSBA.aspx');
       preg_match('#<b>Qualification: </b>(.*?)<b>Duration & Semesters: </b>#is', $uni_data, $wraper);
?>
<?php
$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);
$p1 = 60;
$p2 = 45;

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	 $p = substr($admission_criteria,$pos,2);
	
	
	
	if($p <= $_SESSION['percent']){
		
echo '<h2 style="color:white"> Comsats Undergraduate Admission Requirements – Business Programs</h2>';
		
		echo '
		
			<div class="row">
				<div class="col s12 m6">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<p>';
							echo $admission_criteria ;
		echo '
						</p>
					</div>
				  </div>
				</div>
			</div>
		
		';
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
		echo '<h2 style="color:white"> Comsats Undergraduate Admission Requirements – Business Programs</h2>';
			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo '<h2 style="color:white"> Comsats Undergraduate Admission Requirements – Business Programs</h2>';

			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	
	
}


?> 
<?php
// FAST BBA
ini_set('max_execution_time', 300); //300 seconds = 5 minutes

$uni_data = file_get_contents('http://www.nu.edu.pk/admissions#Eligibility');
       preg_match('#<div class="eligibilityHeading">Eligibility:</div>(.*?)<div class="eligibilityHeading">Selection Criteria:</div>#is', $uni_data, $wraper);
?>
<?php
$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);
$p1 = 60;
$p2 = 45;

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	 $p = substr($admission_criteria,$pos,2);
	
	
	
	if($p <= $_SESSION['percent']){
		
echo '<h2 style="color:white"> FAST Undergraduate Admission Requirements – Business Programs</h2>';
		
		echo '
		
			<div class="row">
				<div class="col s12 m6">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<p>';
							echo $admission_criteria ;
		echo '
						</p>
					</div>
				  </div>
				</div>
			</div>
		
		';
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
		echo '<h2 style="color:white"> FAST Undergraduate Admission Requirements – Business Programs</h2>';
			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo '<h2 style="color:white"> FAST Undergraduate Admission Requirements – Business Programs</h2>';

			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	
	
}


?>
<?php
// Superior BBA

$uni_data = file_get_contents('https://www.superior.edu.pk/Course/CourseDetails/21');
       preg_match('#<div><br>Eligibility</div>(.*?)<h4 class="tribe-events-single-event-title mg-top-60 fs-25 heading-color">Road Map</h4>#is', $uni_data, $wraper);
?>
<?php
$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);
$p1 = 60;
$p2 = 45;

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	 $p = substr($admission_criteria,$pos,2);
	
	
	
	if($p <= $_SESSION['percent']){
		
echo '<h2 style="color:white"> Superior Undergraduate Admission Requirements – Business Programs</h2>';
		
		echo '
		
			<div class="row">
				<div class="col s12 m6">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<p>';
							echo $admission_criteria ;
		echo '
						</p>
					</div>
				  </div>
				</div>
			</div>
		
		';
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	$div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
			echo '<h2 style="color:white"> Superior Undergraduate Admission Requirements – Business Programs</h2>';
			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo '<h2 style="color:white"> Superior Undergraduate Admission Requirements – Business Programs</h2>';

			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	
	
}


?>
<?php
// UE BBA

$uni_data = file_get_contents('http://ue.edu.pk/beta/programDetail/Default.aspx?programCode=062&programName=BBA%20(Hons)');
       preg_match('#<h4>Entry Requirements</h4>(.*?)<h4>Age Limit</h4>#is', $uni_data, $wraper);
?>
<?php
$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);
$p1 = 60;
$p2 = 45;

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	 $p = substr($admission_criteria,$pos,2);
	
	
	
	if($p <= $_SESSION['percent']){
		
echo '<h2 style="color:white" align="center"> University Of Education Undergraduate Admission Requirements – Business Programs</h2>';
		
		echo '
		
			<div class="row">
				<div class="col s12 m6">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text">
						<p>';
							echo $admission_criteria ;
		echo '
						</p>
					</div>
				  </div>
				</div>
			</div>
		
		';
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
echo '<h2 style="color:white" align="center"> University Of Education Undergraduate Admission Requirements – Business Programs</h2>';
			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo '<h2 style="color:white" align="center"> University Of Education Undergraduate Admission Requirements – Business Programs</h2>';

			
			echo '
		
				<div class="row">
					<div class="col s12 m6">
					  <div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<p>';
									echo $admission_criteria ;
			echo '
							</p>
						</div>
					  </div>
					</div>
				</div>
			
			';
		}
	}
	
	
}


?>
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