<?php
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM general";
 

 
 $med1 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM general WHERE MEDICAL = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb1 = $row["avgh1"];
	
	}
}
$med2 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM general WHERE MEDICAL = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb2 = $row["avgh2"];

	}
}
$med3 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM general WHERE MEDICAL = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb3 = $row["avgh3"];

	}
}
$med4 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM general WHERE MEDICAL = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb4 = $row["avgh4"];

	}
}
$med5 = "SELECT COUNT(MEDICAL) / (SELECT COUNT(MEDICAL) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM general WHERE MEDICAL = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb5 = $row["avg"];

	}
}


$med6 = "SELECT COUNT(MEDICAL) as counth FROM general where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med6))
{
	while ($row = $result->fetch_assoc()){
			$totcountb = $row["counth"];
	}
}


$med7 = "SELECT COUNT(MEDICAL) as counth1 FROM general WHERE MEDICAL = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med7))
{
	while ($row = $result->fetch_assoc()){
			$totcountb1 = $row["counth1"];
	}
}

$med8 = "SELECT COUNT(MEDICAL) as counth2 FROM general WHERE MEDICAL = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med8))
{
	while ($row = $result->fetch_assoc()){
			$totcountb2 = $row["counth2"];
	}
}
$med9 = "SELECT COUNT(MEDICAL) as counth3 FROM general WHERE MEDICAL = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med9))
{
	while ($row = $result->fetch_assoc()){
			$totcountb3 = $row["counth3"];
	}
}
$med10 = "SELECT COUNT(MEDICAL) as counth4 FROM general WHERE MEDICAL = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med10))
{
	while ($row = $result->fetch_assoc()){
			$totcountb4 = $row["counth4"];
	}
}
$med11 = "SELECT COUNT(MEDICAL) as counth5 FROM general WHERE MEDICAL = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($med11))
{
	while ($row = $result->fetch_assoc()){
			$totcountb5 = $row["counth5"];
	}
}



$transport1 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM general WHERE TRANSPORT = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj1 = $row["avgh1"];
	
	}
}
$transport2 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM general WHERE TRANSPORT = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj2 = $row["avgh2"];

	}
}
$transport3 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM general WHERE TRANSPORT = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj3 = $row["avgh3"];

	}
}
$transport4 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM general WHERE TRANSPORT = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj4 = $row["avgh4"];

	}
}
$transport5 = "SELECT COUNT(TRANSPORT) / (SELECT COUNT(TRANSPORT) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM general WHERE TRANSPORT = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj5 = $row["avg"];

	}
}


$transport6 = "SELECT COUNT(TRANSPORT) as counth FROM general where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport6))
{
	while ($row = $result->fetch_assoc()){
			$totcountj = $row["counth"];
	}
}


$transport7 = "SELECT COUNT(TRANSPORT) as counth1 FROM general WHERE TRANSPORT = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport7))
{
	while ($row = $result->fetch_assoc()){
			$totcountj1 = $row["counth1"];
	}
}

$transport8 = "SELECT COUNT(TRANSPORT) as counth2 FROM general WHERE TRANSPORT = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport8))
{
	while ($row = $result->fetch_assoc()){
			$totcountj2 = $row["counth2"];
	}
}
$transport9 = "SELECT COUNT(TRANSPORT) as counth3 FROM general WHERE TRANSPORT = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport9))
{
	while ($row = $result->fetch_assoc()){
			$totcountj3 = $row["counth3"];
	}
}
$transport10 = "SELECT COUNT(TRANSPORT) as counth4 FROM general WHERE TRANSPORT = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport10))
{
	while ($row = $result->fetch_assoc()){
			$totcountj4 = $row["counth4"];
	}
}
$transport11 = "SELECT COUNT(TRANSPORT) as counth5 FROM general WHERE TRANSPORT = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($transport11))
{
	while ($row = $result->fetch_assoc()){
			$totcountj5 = $row["counth5"];
	}
}



$class1 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM) FROM general where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM general WHERE CLASSROOM  = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm1 = $row["avgh1"];
	
	}
}
$class2 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM general WHERE CLASSROOM  = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm2 = $row["avgh2"];

	}
}
$class3 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM general WHERE CLASSROOM  = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm3 = $row["avgh3"];

	}
}
$class4 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general where and dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM general WHERE CLASSROOM  = 4 and and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm4 = $row["avgh4"];

	}
}
$class5 = "SELECT COUNT(CLASSROOM ) / (SELECT COUNT(CLASSROOM ) FROM general where and dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM general WHERE CLASSROOM  = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm5 = $row["avg"];

	}
}


$class6 = "SELECT COUNT(CLASSROOM ) as counth FROM general where  dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class6))
{
	while ($row = $result->fetch_assoc()){
			$totcountm = $row["counth"];
	}
}


$class7 = "SELECT COUNT(CLASSROOM ) as counth1 FROM general WHERE CLASSROOM  = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class7))
{
	while ($row = $result->fetch_assoc()){
			$totcountm1 = $row["counth1"];
	}
}

$class8 = "SELECT COUNT(CLASSROOM ) as counth2 FROM general WHERE CLASSROOM  = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class8))
{
	while ($row = $result->fetch_assoc()){
			$totcountm2 = $row["counth2"];
	}
}
$class9 = "SELECT COUNT(CLASSROOM ) as counth3 FROM general WHERE CLASSROOM  = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class9))
{
	while ($row = $result->fetch_assoc()){
			$totcountm3 = $row["counth3"];
	}
}
$class10 = "SELECT COUNT(CLASSROOM ) as counth4 FROM general WHERE CLASSROOM  = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class10))
{
	while ($row = $result->fetch_assoc()){
			$totcountm4 = $row["counth4"];
	}
}
$class11 = "SELECT COUNT(CLASSROOM ) as counth5 FROM general WHERE CLASSROOM  = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($class11))
{
	while ($row = $result->fetch_assoc()){
			$totcountm5 = $row["counth5"];
	}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon general -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  max-width: 800px; /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bargen-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bargen1-5 {width: <?php echo $avgb5; ?>%; height: 18px; background-color: #4CAF50;}
.bargen1-4 {width: <?php echo $avgb4; ?>%; height: 18px; background-color: #2196F3;}
.bargen1-3 {width: <?php echo $avgb3; ?>%; height: 18px; background-color: #00bcd4;}
.bargen1-2 {width: <?php echo $avgb2; ?>%; height: 18px; background-color: #ff9800;}
.bargen1-1 {width: <?php echo $avgb1; ?>%; height: 18px; background-color: #f44336;}

.bargen2-5 {width: <?php echo $avgj5; ?>%; height: 18px; background-color: #4CAF50;}
.bargen2-4 {width: <?php echo $avgj4; ?>%; height: 18px; background-color: #2196F3;}
.bargen2-3 {width: <?php echo $avgj3; ?>%; height: 18px; background-color: #00bcd4;}
.bargen2-2 {width: <?php echo $avgj2; ?>%; height: 18px; background-color: #ff9800;}
.bargen2-1 {width: <?php echo $avgj1; ?>%; height: 18px; background-color: #f44336;}

.bargen3-5 {width: <?php echo $avgm5; ?>%; height: 18px; background-color: #4CAF50;}
.bargen3-4 {width: <?php echo $avgm4; ?>%; height: 18px; background-color: #2196F3;}
.bargen3-3 {width: <?php echo $avgm3; ?>%; height: 18px; background-color: #00bcd4;}
.bargen3-2 {width: <?php echo $avgm2; ?>%; height: 18px; background-color: #ff9800;}
.bargen3-1 {width: <?php echo $avgm1; ?>%; height: 18px; background-color: #f44336;}


/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>
</head>
<body>
<center><span class="heading"><h3>general RATING</h3></span></center>

<span class="heading"><center><?php echo "DEPT:&nbsp;",$dept,"&nbsp;&nbsp; YEAR:&nbsp;",$year,"&nbsp;&nbsp; SEC:&nbsp;",$sec;?></center><br></span>



<span class="heading">1.First Aid Medical Facilities Rating</span>

<p> average based on <?php echo $totcountb; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb1; ?></div>
  </div>
</div>
<br>
<span class="heading">2.Transport rating</span>

<p> average based on <?php echo $totcountj; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj1; ?></div>
  </div>
</div>

<br>

<span class="heading">3.Classroom  rating</span>

<p> average based on <?php echo $totcountm; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bargen-container">
      <div class="bargen3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm1; ?></div>
  </div>
</div>


<center><span class="heading"><h3>Top Comments(4 Stars & above)</h3></span></center>
<?php 
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f = "SELECT feedback as feed FROM general WHERE MEDICAL > 3 or TRANSPORT>3 or CLASSROOM>3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f)) {
	
    while ($row = $result->fetch_assoc()) {
			$topfeed = $row["feed"];
			echo "Comments   :",$topfeed,"<br>";
	}
}

?>

<center><span class="heading"><h3>Bad Comments(3 Stars & below)</h3></span></center>
<?php 

$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f1 = "SELECT feedback as feed FROM general WHERE MEDICAL < 3 or TRANSPORT<3 or CLASSROOM<3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f1)) {
	
    while ($row = $result->fetch_assoc()) {
			$worstfeed = $row["feed"];
			echo "Comments   :",$worstfeed,"<br>";
	}
}

?>

</body>
</html>