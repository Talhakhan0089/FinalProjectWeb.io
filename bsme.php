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
// UCP BSME

$uni_data = file_get_contents('http://ucp.edu.pk/ps_admission_requirements');
    preg_match('#<strong>Eligibilty</strong>(.*?)<p class="main-text">&nbsp;</p>#is', $uni_data, $wraper);
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
		
echo '<br><br><br><h2 style="color:white"> UCP FACULTY OF ENGINEERING (B.SC. (MECHANICAL Engineering)</h2>';
		
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

	if($div == "2nd")
	{
		if($p2 <= $_SESSION['percent'])
		{				
			echo '<br><br><br><h2 style="color:white"> UCP FACULTY OF ENGINEERING (B.SC. (MECHANICAL Engineering)</h2>';
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
			
echo '<br><br><br><h2 style="color:white"> UCP FACULTY OF ENGINEERING (B.SC. (MECHANICAL Engineering)</h2>';		
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
// UOL BSME

$uni_data = file_get_contents('http://me.uol.edu.pk/PROGRAMS/Undergraduate/bachelor_of_science_in_mechanical_engineering');
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
		
echo '<h2 style="color:white"> UOL Bachelor of Science in Mechanical Engineering</h2>';
		
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
			
			
echo '<h2 style="color:white"> UOL Bachelor of Science in Mechanical Engineering</h2>';
			
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
			
echo '<h2 style="color:white"> UOL Bachelor of Science in Mechanical Engineering</h2>';

			
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
// UMT BSME
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
$uni_data = file_get_contents('http://admissions.umt.edu.pk/Admission-Criteria.aspx');
       preg_match('#<p>A prospective applicant to an Engineering Undergraduate program must have:</p>(.*?)</ol>#is', $uni_data, $wraper);
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
		
echo '<h2 style="color:white"> UMT Undergraduate Admission Requirements – Engineering Programs</h2>';
		
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
			
			
echo '<h2 style="color:white"> UMT Undergraduate Admission Requirements – Engineering Programs</h2>';
			
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
			
echo '<h2 style="color:white"> UMT Undergraduate Admission Requirements – Engineering Programs</h2>';

			
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
// BZU BSME

$uni_data = file_get_contents('http://www.bzu.edu.pk/v2_department.php?cid=48');
       preg_match('#<li class="code">B.Sc. Mechanical Engineering</li>(.*?)<b>Determination of Merit</b>#is', $uni_data, $wraper);
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
		
echo '<h2 style="color:white"> BZU Undergraduate Admission Requirements – Engineering Programs</h2>';
		
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
			
			
echo '<h2 style="color:white"> BZU Undergraduate Admission Requirements – Engineering Programs</h2>';
			
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
			
echo '<h2 style="color:white"> BZU Undergraduate Admission Requirements – Engineering Programs</h2>';

			
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
// WAH BSME

$uni_data = file_get_contents('http://www.wecuw.edu.pk/index.php/adm/requirements');
       preg_match('#<dt>Eligibility Criteria</dt>(.*?)<dt>Degree Requirements</dt>#is', $uni_data, $wraper);
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
		
echo '<h2 style="color:white"> WAH University Undergraduate Admission Requirements – Engineering Programs</h2>';
		
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
			
			
echo '<h2 style="color:white"> WAH University Undergraduate Admission Requirements – Engineering Programs</h2>';
			
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
			
echo '<h2 style="color:white"> WAH University Undergraduate Admission Requirements – Engineering Programs</h2>';

			
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
// IST BSME

$uni_data = file_get_contents('http://www.ist.edu.pk/me/undergraduate/bs-mechanical-engineering/eligibility');
       preg_match('#<strong>Candidates must fulfill the following conditions: </strong>(.*?)<strong>For Space Science Program:&nbsp;</strong>#is', $uni_data, $wraper);
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
		
echo '<h2 style="color:white"> Institute of Space and Technology Undergraduate Admission Mechanical Engineering</h2>';
		
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
			
			
echo '<h2 style="color:white"> Institute of Space and Technology Undergraduate Admission Mechanical Engineering</h2>';
			
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
			
echo '<h2 style="color:white"> Institute of Space and Technology Undergraduate Admission Mechanical Engineering</h2>';

			
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
// CUST BSME

$uni_data = file_get_contents('http://cust.edu.pk/admission/eligibility');
       preg_match('#<h2>Eligibility</h2>(.*?)<li>BS Computer Science and BS Software Engineering  programs require a minimum of 45% marks in FA/FSc/DAE or equivalent.</li>#is', $uni_data, $wraper);
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
		
echo '<h2 style="color:white"> Capital University of Science and Technology Undergraduate Admission Mechanical Engineering</h2>*';
		
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
			
			
echo '<h2 style="color:white"> Capital University of Science and Technology Undergraduate Admission Mechanical Engineering</h2>*';
			
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
			
echo '<h2 style="color:white"> Capital University of Science and Technology Undergraduate Admission Mechanical Engineering</h2>*';

			
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