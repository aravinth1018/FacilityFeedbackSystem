<?php
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM library";

 
 $cb1 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM library WHERE books = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb1 = $row["avgh1"];
	
	}
}
$cb2 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM library WHERE books = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb2 = $row["avgh2"];

	}
}
$cb3 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM library WHERE books = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb3 = $row["avgh3"];

	}
}
$cb4 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM library WHERE books = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb4 = $row["avgh4"];

	}
}
$cb5 = "SELECT COUNT(books) / (SELECT COUNT(books) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM library WHERE books = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb5 = $row["avg"];

	}
}


$cb6 = "SELECT COUNT(books) as counth FROM library where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb6))
{
	while ($row = $result->fetch_assoc()){
			$totcountb = $row["counth"];
	}
}


$cb7 = "SELECT COUNT(books) as counth1 FROM library WHERE books = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb7))
{
	while ($row = $result->fetch_assoc()){
			$totcountb1 = $row["counth1"];
	}
}

$cb8 = "SELECT COUNT(books) as counth2 FROM library WHERE books = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb8))
{
	while ($row = $result->fetch_assoc()){
			$totcountb2 = $row["counth2"];
	}
}
$cb9 = "SELECT COUNT(books) as counth3 FROM library WHERE books = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb9))
{
	while ($row = $result->fetch_assoc()){
			$totcountb3 = $row["counth3"];
	}
}
$cb10 = "SELECT COUNT(books) as counth4 FROM library WHERE books = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb10))
{
	while ($row = $result->fetch_assoc()){
			$totcountb4 = $row["counth4"];
	}
}
$cb11 = "SELECT COUNT(books) as counth5 FROM library WHERE books = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cb11))
{
	while ($row = $result->fetch_assoc()){
			$totcountb5 = $row["counth5"];
	}
}



$cj1 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM library WHERE journal = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj1 = $row["avgh1"];
	
	}
}
$cj2 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM library WHERE journal = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj2 = $row["avgh2"];

	}
}
$cj3 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM library WHERE journal = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj3 = $row["avgh3"];

	}
}
$cj4 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM library WHERE journal = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj4 = $row["avgh4"];

	}
}
$cj5 = "SELECT COUNT(journal) / (SELECT COUNT(journal) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM library WHERE journal = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj5 = $row["avg"];

	}
}


$cj6 = "SELECT COUNT(journal) as counth FROM library where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj6))
{
	while ($row = $result->fetch_assoc()){
			$totcountj = $row["counth"];
	}
}


$cj7 = "SELECT COUNT(journal) as counth1 FROM library WHERE journal = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj7))
{
	while ($row = $result->fetch_assoc()){
			$totcountj1 = $row["counth1"];
	}
}

$cj8 = "SELECT COUNT(journal) as counth2 FROM library WHERE journal = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj8))
{
	while ($row = $result->fetch_assoc()){
			$totcountj2 = $row["counth2"];
	}
}
$cj9 = "SELECT COUNT(journal) as counth3 FROM library WHERE journal = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj9))
{
	while ($row = $result->fetch_assoc()){
			$totcountj3 = $row["counth3"];
	}
}
$cj10 = "SELECT COUNT(journal) as counth4 FROM library WHERE journal = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj10))
{
	while ($row = $result->fetch_assoc()){
			$totcountj4 = $row["counth4"];
	}
}
$cj11 = "SELECT COUNT(journal) as counth5 FROM library WHERE journal = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cj11))
{
	while ($row = $result->fetch_assoc()){
			$totcountj5 = $row["counth5"];
	}
}



$cm1 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM library WHERE material = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm1 = $row["avgh1"];
	
	}
}
$cm2 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM library WHERE material = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm2 = $row["avgh2"];

	}
}
$cm3 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM library WHERE material = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm3 = $row["avgh3"];

	}
}
$cm4 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM library WHERE material = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm4 = $row["avgh4"];

	}
}
$cm5 = "SELECT COUNT(material) / (SELECT COUNT(material) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM library WHERE material = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm5 = $row["avg"];

	}
}


$cm6 = "SELECT COUNT(material) as counth FROM library where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm6))
{
	while ($row = $result->fetch_assoc()){
			$totcountm = $row["counth"];
	}
}


$cm7 = "SELECT COUNT(material) as counth1 FROM library WHERE material = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm7))
{
	while ($row = $result->fetch_assoc()){
			$totcountm1 = $row["counth1"];
	}
}

$cm8 = "SELECT COUNT(material) as counth2 FROM library WHERE material = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm8))
{
	while ($row = $result->fetch_assoc()){
			$totcountm2 = $row["counth2"];
	}
}
$cm9 = "SELECT COUNT(material) as counth3 FROM library WHERE material = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm9))
{
	while ($row = $result->fetch_assoc()){
			$totcountm3 = $row["counth3"];
	}
}
$cm10 = "SELECT COUNT(material) as counth4 FROM library WHERE material = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm10))
{
	while ($row = $result->fetch_assoc()){
			$totcountm4 = $row["counth4"];
	}
}
$cm11 = "SELECT COUNT(material) as counth5 FROM library WHERE material = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cm11))
{
	while ($row = $result->fetch_assoc()){
			$totcountm5 = $row["counth5"];
	}
}



$cl1 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM library WHERE Library = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl1 = $row["avgh1"];
	
	}
}
$cl2 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM library WHERE Library = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl2 = $row["avgh2"];

	}
}
$cl3 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM library WHERE Library = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl3 = $row["avgh3"];

	}
}
$cl4 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM library WHERE Library = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl4 = $row["avgh4"];

	}
}
$cl5 = "SELECT COUNT(Library) / (SELECT COUNT(Library) FROM library) *100 as avg FROM library WHERE Library = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl5 = $row["avg"];

	}
}


$cl6 = "SELECT COUNT(Library) as counth FROM library where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl6))
{
	while ($row = $result->fetch_assoc()){
			$totcountl = $row["counth"];
	}
}


$cl7 = "SELECT COUNT(Library) as counth1 FROM library WHERE Library = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl7))
{
	while ($row = $result->fetch_assoc()){
			$totcountl1 = $row["counth1"];
	}
}

$cl8 = "SELECT COUNT(Library) as counth2 FROM library WHERE Library = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl8))
{
	while ($row = $result->fetch_assoc()){
			$totcountl2 = $row["counth2"];
	}
}
$cl9 = "SELECT COUNT(Library) as counth3 FROM library WHERE Library = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl9))
{
	while ($row = $result->fetch_assoc()){
			$totcountl3 = $row["counth3"];
	}
}
$cl10 = "SELECT COUNT(Library) as counth4 FROM library WHERE Library = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl10))
{
	while ($row = $result->fetch_assoc()){
			$totcountl4 = $row["counth4"];
	}
}
$cl11 = "SELECT COUNT(Library) as counth5 FROM library WHERE Library = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cl11))
{
	while ($row = $result->fetch_assoc()){
			$totcountl5 = $row["counth5"];
	}
}




$cd1 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM library WHERE dlf = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd1 = $row["avgh1"];
	
	}
}
$cd2 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM library WHERE dlf = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd2 = $row["avgh2"];

	}
}
$cd3 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM library WHERE dlf = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd3 = $row["avgh3"];

	}
}
$cd4 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM library WHERE dlf = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd4 = $row["avgh4"];

	}
}
$cd5 = "SELECT COUNT(dlf) / (SELECT COUNT(dlf) FROM library where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM library WHERE dlf = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgd5 = $row["avg"];

	}
}


$cd6 = "SELECT COUNT(dlf) as counth FROM library where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd6))
{
	while ($row = $result->fetch_assoc()){
			$totcountd = $row["counth"];
	}
}


$cd7 = "SELECT COUNT(dlf) as counth1 FROM library WHERE dlf = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd7))
{
	while ($row = $result->fetch_assoc()){
			$totcountd1 = $row["counth1"];
	}
}

$cd8 = "SELECT COUNT(dlf) as counth2 FROM library WHERE dlf = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd8))
{
	while ($row = $result->fetch_assoc()){
			$totcountd2 = $row["counth2"];
	}
}
$cd9 = "SELECT COUNT(dlf) as counth3 FROM library WHERE dlf = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd9))
{
	while ($row = $result->fetch_assoc()){
			$totcountd3 = $row["counth3"];
	}
}
$cd10 = "SELECT COUNT(dlf) as counth4 FROM library WHERE dlf = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd10))
{
	while ($row = $result->fetch_assoc()){
			$totcountd4 = $row["counth4"];
	}
}
$cd11 = "SELECT COUNT(dlf) as counth5 FROM library WHERE dlf = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($cd11))
{
	while ($row = $result->fetch_assoc()){
			$totcountd5 = $row["counth5"];
	}
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon Library -->
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
.barlib-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual barlibs */
.barlib1-5 {width: <?php echo $avgb5; ?>%; height: 18px; background-color: #4CAF50;}
.barlib1-4 {width: <?php echo $avgb4; ?>%; height: 18px; background-color: #2196F3;}
.barlib1-3 {width: <?php echo $avgb3; ?>%; height: 18px; background-color: #00bcd4;}
.barlib1-2 {width: <?php echo $avgb2; ?>%; height: 18px; background-color: #ff9800;}
.barlib1-1 {width: <?php echo $avgb1; ?>%; height: 18px; background-color: #f44336;}

.barlib2-5 {width: <?php echo $avgj5; ?>%; height: 18px; background-color: #4CAF50;}
.barlib2-4 {width: <?php echo $avgj4; ?>%; height: 18px; background-color: #2196F3;}
.barlib2-3 {width: <?php echo $avgj3; ?>%; height: 18px; background-color: #00bcd4;}
.barlib2-2 {width: <?php echo $avgj2; ?>%; height: 18px; background-color: #ff9800;}
.barlib2-1 {width: <?php echo $avgj1; ?>%; height: 18px; background-color: #f44336;}

.barlib3-5 {width: <?php echo $avgm5; ?>%; height: 18px; background-color: #4CAF50;}
.barlib3-4 {width: <?php echo $avgm4; ?>%; height: 18px; background-color: #2196F3;}
.barlib3-3 {width: <?php echo $avgm3; ?>%; height: 18px; background-color: #00bcd4;}
.barlib3-2 {width: <?php echo $avgm2; ?>%; height: 18px; background-color: #ff9800;}
.barlib3-1 {width: <?php echo $avgm1; ?>%; height: 18px; background-color: #f44336;}

.barlib4-5 {width: <?php echo $avgl5; ?>%; height: 18px; background-color: #4CAF50;}
.barlib4-4 {width: <?php echo $avgl4; ?>%; height: 18px; background-color: #2196F3;}
.barlib4-3 {width: <?php echo $avgl3; ?>%; height: 18px; background-color: #00bcd4;}
.barlib4-2 {width: <?php echo $avgl2; ?>%; height: 18px; background-color: #ff9800;}
.barlib4-1 {width: <?php echo $avgl1; ?>%; height: 18px; background-color: #f44336;}

.barlib5-5 {width: <?php echo $avgd5; ?>%; height: 18px; background-color: #4CAF50;}
.barlib5-4 {width: <?php echo $avgd4; ?>%; height: 18px; background-color: #2196F3;}
.barlib5-3 {width: <?php echo $avgd3; ?>%; height: 18px; background-color: #00bcd4;}
.barlib5-2 {width: <?php echo $avgd2; ?>%; height: 18px; background-color: #ff9800;}
.barlib5-1 {width: <?php echo $avgd1; ?>%; height: 18px; background-color: #f44336;}

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
<center><span class="heading"><h3>LIBRARY RATING</h3></span></center>
 
 <span class="heading"><center><?php echo "DEPT:&nbsp;",$dept,"&nbsp;&nbsp; YEAR:&nbsp;",$year,"&nbsp;&nbsp; SEC:&nbsp;",$sec;?></center><br></span>
 
<span class="heading">1.Books rating</span>

<p> average based on <?php echo $totcountb; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb1; ?></div>
  </div>
</div>

<span class="heading">2.Jouranl rating</span>

<p> average based on <?php echo $totcountj; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj1; ?></div>
  </div>
</div>



<span class="heading">3.Material rating</span>

<p> average based on <?php echo $totcountm; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm1; ?></div>
  </div>
</div>



<span class="heading">4.Library Furniture rating</span>

<p> average based on <?php echo $totcountl; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl1; ?></div>
  </div>
</div>


<span class="heading">5.Digital Library Facility rating</span>

<p> average based on <?php echo $totcountd; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barlib-container">
      <div class="barlib5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountd1; ?></div>
  </div>
</div>



<center><span class="heading"><h3>Top Comments(4 Stars & above)</h3></span></center>
<?php 
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f = "SELECT feedback as feed FROM library WHERE books>3 or journal>3 or material>3 or Library>3 or dlf>3 and dept = '$dept' and sec = '$sec' and year = '$year'";

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

$f1 = "SELECT feedback as feed FROM library WHERE books<3 or journal<3 or material<3 or Library<3 or dlf<3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f1)) {
	
    while ($row = $result->fetch_assoc()) {
			$worstfeed = $row["feed"];
			echo "Comments   :",$worstfeed,"<br>";
	}
}


?>
</body>
</html>