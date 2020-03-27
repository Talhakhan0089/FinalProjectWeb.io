

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
	 <style>
		table, th, td {
		border: 2px solid black;
		border-collapse: collapse;
		}
		th, td {
			padding: 6px;
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
	</style>
</head>
<br><br><br><br>
<table id='t01' style='width:90%' border="1" align='center'>
<th>Universities Name</th><th>Eligibility Criteria </th><th>Visit   Site</th>;


<?php
echo "<div align=center>";
// Ucp Software Engineer (BSSE)

$uni_data = file_get_contents('http://ucp.edu.pk/ps_admission_requirements');
preg_match('#<strong>Eligibility</strong>(.*?)<p class="heading_02">MS Computer Science</p>#is', $uni_data, $wraper);
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
		
		echo"<tr><td>";
		echo '<h2 > University of Central Punjab</h2>';
		echo "</td>";
		echo "<td>";
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
		echo"</td>";
		echo"<td>";
		echo "<a  href='http://www.ucp.edu.pk/'>Click Me</a>";
		echo"<td></tr>";
		
		
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	$div = substr($admission_criteria,$pos2,3);
	
	
	
	
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
		echo"<tr><td>";
			
			echo '<h2 > University of Central Punjab</h2>';
			echo "</td>";
		echo "<td>";
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
			echo"</td>";
		echo"<td>";
		echo "<a  href='http://www.ucp.edu.pk/'>Click Me</a>";
		echo"<td></tr>";
		

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
		echo"<tr><td>";
			echo '<h2 > University of Central Punjab</h2>';
echo "</td>";
		echo "<td>";
			
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
			echo"</td>";
		echo"<td>";
		echo "<a  href='http://www.ucp.edu.pk/'>Click Me</a>";
		echo"<td></tr>";
		
	
		}
	}
	
	
}



?>

<?php
echo "<div align=center>";
// UOL Software Engineer (BSSE)
ini_set('max_execution_time', 300); //300 seconds = 5 minutes

$uni_data = file_get_contents('http://cs.uol.edu.pk/PROGRAMS/Undergraduate/BSCS');
       preg_match('#<h1>Requirements</h1>(.*?)<h4>Why this</h4>#is', $uni_data, $wraper);

$admission_criteria = $wraper[1];
$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	$p = intval(substr($admission_criteria,$pos,2));
	
	$per = intval($_SESSION['percent']);
	
	if($p <= $per){
		
		echo"<tr><td>";
		echo '<h2 > University of Lahore</h2>';
		echo "</td>";
		echo "<td>";
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
			echo"</td>";
		echo"<td>";
		echo "<a  href='http://www.uol.edu.pk/'>Click Me</a>";
		echo"<td></tr>";
		
				
	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	$div = substr($admission_criteria,$pos2,3);
	
	
	
	$p1 = 60;
	$p2 = 45;
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
echo"<tr><td>";
			echo '<h2 > University of Lahore</h2>';
			echo "</td>";
		echo "<td>";
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
			echo"</td>";
		echo"<td>";
		echo "<a  href='http://www.uol.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo"<tr><td>";

			echo '<h2 > University of Lahore</h2>';
			echo "</td>";
		echo "<td>";
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='http://www.uol.edu.pk/'>Click Me</a>";
		echo"<td></tr>";
		}
	}
	
	
}


?>

<?php
// UMT Software Engineer (BSSE)

$uni_data = file_get_contents('http://admissions.umt.edu.pk/Admission-Criteria.aspx');
       preg_match('#<p>A prospective applicant to an Engineering Undergraduate program must have:</p>(.*?)</ol>#is', $uni_data, $wraper);

$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	$p = substr($admission_criteria,$pos,2);
	
	if($p <= $_SESSION['percent']){
		
echo"<tr><td>";

		echo '<h2 >University of Management Technology</h2>';
		echo "</td>";
		echo "<td>";
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
			
		echo"</td>";
		echo"<td>";
		echo "<a  href='www.umt.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	$p1 = 60;
	$p2 = 45;
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
echo"<tr><td>";
			
			echo '<h2 >University of Management Technology</h2>';
			echo "</td>";
		echo "<td>";
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='www.umt.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
		
echo"<tr><td>";

			echo '<h2 >University of Management Technology</h2>';

			echo "</td>";
		echo "<td>";
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='www.umt.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	
	
}


?>


<?php
// PUCIT Software Engineer (BSSE)
ini_set('max_execution_time', 300); //300 seconds = 5 minutes

$uni_data = file_get_contents('http://pucit.edu.pk/index.php/admission/admission-criteria.html');
       preg_match('#<h3 class="legend-title">Eligibility Criteria</h3>(.*?)<h3 class="legend-title">For M.Sc CS Program</h3>#is', $uni_data, $wraper);

$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	$p = substr($admission_criteria,$pos,2);
	
	if($p <= $_SESSION['percent']){
		
echo"<tr><td>";
	echo '<h2 >Punjab University College of Information Technology</h2>';
		
		echo '
		echo "</td>";
		echo "<td>";
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
			echo"</td>";
		echo"<td>";
		echo "<a  href='www.pucit.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	$p1 = 60;
	$p2 = 45;
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
echo"<tr><td>";
		echo '<h2 >Punjab University College of Information Technology</h2>';
			echo "</td>";
		echo "<td>";
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
				echo"</td>";
		echo"<td>";
		echo "<a  href='www.pucit.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
		
echo"<tr><td>";
	echo '<h2 >Punjab University College of Information Technology</h2>';

			echo "</td>";
		echo "<td>";
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
			
	echo"</td>";
		echo"<td>";
		echo "<a  href='www.pucit.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	
	
}


?>

<?php
/*
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// ComSats Software Engineer (BSSE)

$uni_data = file_get_contents('http://lahore.comsats.edu.pk/cs/BSCS.aspx');
       preg_match('#<td>10%</td>(.*?)<tr><td>NTS test</td><td>50%</td></tr>#is', $uni_data, $wraper);

$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	$p = substr($admission_criteria,$pos,2);
	
	if($p <= $_SESSION['percent']){
		
echo"<tr><td>";

echo '<h2 > CIIT Lahore - Comsats</h2>';
		echo "</td>";
		echo "<td>";
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
			
	echo"</td>";
		echo"<td>";
		echo "<a  href='lahore.comsats.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	 $div = substr($admission_criteria,$pos2,3);
	
	
	
	$p1 = 60;
	$p2 = 45;
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
echo"<tr><td>";

echo '<h2 > CIIT Lahore - Comsats</h2>';
			echo "</td>";
		echo "<td>";
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='lahore.comsats.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo"<tr><td>";
echo '<h2 > CIIT Lahore - Comsats</h2>';
echo "</td>";
		echo "<td>";
			
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='lahore.comsats.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	
	
}

*/
?>
<?php
// UOS Software Engineer (BSSE)

$uni_data = file_get_contents('http://uos.edu.pk/Academics/department/2');
       preg_match('#<h3 style="margin-left:9px;">BS Computer Science</h3>(.*?)<h3 style="margin-left:9px;">BS Information Technology</h3>#is', $uni_data, $wraper);

$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	 $p = substr($admission_criteria,$pos,2);
	
	if($p <= $_SESSION['percent']){
		
echo"<tr><td>";
echo '<h2 > University of Sargodha Lahore Campus</h2>';
		echo "</td>";
		echo "<td>";
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='uoslahore.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
$div = substr($admission_criteria,$pos2,3);
	
	
	
	$p1 = 60;
	$p2 = 45;
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
echo"<tr><td>";
		echo '<h2 > University of Sargodha Lahore Campus</h2>';
			echo "</td>";
		echo "<td>";
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='uoslahore.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
		
echo"<tr><td>";	
	echo '<h2 > University of Sargodha Lahore Campus</h2>';
echo "</td>";
		echo "<td>";
			
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
			echo"</td>";
		echo"<td>";
		echo "<a  href='uoslahore.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	
	
}


?>

<?php

ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// itu Software Engineer (BSSE)

$uni_data = file_get_contents('http://itu.edu.pk/admissions/bs-computer-science/#verticalTab1');
       preg_match('#<div class="course-detail">MINIMUM ELIGIBILITY CRITERIA</div>(.*?)<div class="course-detail">NOTE</div>#is', $uni_data, $wraper);

$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	$p = substr($admission_criteria,$pos,2);
	
	if($p <= $_SESSION['percent']){
		
echo"<tr><td>";

echo '<h2 > Information Technology University</h2>';
		echo "</td>";
		echo "<td>";
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
				echo"</td>";
		echo"<td>";
		echo "<a  href='itu.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	$div = substr($admission_criteria,$pos2,3);
	
	
	
	$p1 = 60;
	$p2 = 45;
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
echo"<tr><td>";

			
		echo '<h2 > Information Technology University</h2>';
			echo "</td>";
		echo "<td>";
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='itu.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo"<tr><td>";

echo '<h2 > Information Technology University</h2>';
echo "</td>";
		echo "<td>";
			
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='itu.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	
	
}


?>
<?php
// FASt Software Engineer (BSSE)

$uni_data = file_get_contents('http://www.nu.edu.pk/admissions#Eligibility');
       preg_match('#<div class="eligibilityHeading">Eligibility:</div>(.*?)<div class="eligibilityHeading">Selection Criteria:</div>#is', $uni_data, $wraper);

$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	$p = substr($admission_criteria,$pos,2);
	
	if($p <= $_SESSION['percent']){
		
echo"<tr><td>";
echo '<h2 >National University of Computer and Emerging Sciences</h2>';
		echo "</td>";
		echo "<td>";
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
			
echo"</td>";
		echo"<td>";
		echo "<a  href='www.nu.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
	$div = substr($admission_criteria,$pos2,3);
	
	
	
	$p1 = 60;
	$p2 = 45;
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
echo"<tr><td>";
			
			echo '<h2 >National University of Computer and Emerging Sciences</h2>';
			echo "</td>";
		echo "<td>";
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
						
echo"</td>";
		echo"<td>";
		echo "<a  href='www.nu.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
			
echo"<tr><td>";
			echo '<h2 >National University of Computer and Emerging Sciences</h2>';

			echo "</td>";
		echo "<td>";
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
						
echo"</td>";
		echo"<td>";
		echo "<a  href='www.nu.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	
	
}


?>
<?php
// Superior University Computer Science

$uni_data = file_get_contents('https://www.superior.edu.pk/Course/CourseDetails/31');
       preg_match('#<div>Eligibility</div>(.*?)<h4 class="tribe-events-single-event-title mg-top-60 fs-25 heading-color">Road Map</h4>#is', $uni_data, $wraper);

$admission_criteria = $wraper[1];

$findme   = "%";
$findme2 = "division";
$pos = strpos($admission_criteria, $findme);
$pos2 = strpos($admission_criteria, $findme2);

if ($pos !== false) {
    
	
	
	$pos  = $pos - 2;
	$p = substr($admission_criteria,$pos,2);
	
	if($p <= $_SESSION['percent']){
		
echo"<tr><td>";
echo '<h2 > Superior University</h2>';
		echo "</td>";
		echo "<td>";
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
						
echo"</td>";
		echo"<td>";
		echo "<a  href='https://www.superior.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

	}
	
	
	
	
	
} else if($pos2 !== false){
	
	
	$pos2 = $pos2 - 4;
$div = substr($admission_criteria,$pos2,3);
	
	
	
	$p1 = 60;
	$p2 = 45;
	
	if($div == "2nd"){
		if($p2 <= $_SESSION['percent']){
			
			
echo"<tr><td>";
		echo '<h2 > Superior University</h2>';
			echo "</td>";
		echo "<td>";
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
			echo"</td>";
		echo"<td>";
		echo "<a  href='https://www.superior.edu.pk/'>Click Me</a>";
		echo"<td></tr>";

		}
	}
	else if($div == "1st"){
		
		if($p1 <= $_SESSION['percent']){
echo"<tr><td>";
			echo '<h2 > Superior University</h2>';

			echo "</td>";
		echo "<td>";
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
			echo"</td>";
		echo"<td>";
		echo "<a  href='https://www.superior.edu.pk/'>Click Me</a>";
		echo"<td></tr>";
		}
	}
	
	
}


?>
</table>
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