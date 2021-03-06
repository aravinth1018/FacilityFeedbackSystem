<?php
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM bus";
 $query = "SELECT * FROM computing";
 $dept=$_SESSION['dept'];
$sec=$_SESSION['sec'];
$year=$_SESSION['year'];
 
 $bus1 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM bus WHERE bus = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb1 = $row["avgh1"];
	
	}
}
$bus2 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM bus WHERE bus = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb2 = $row["avgh2"];

	}
}
$bus3 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM bus WHERE bus = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb3 = $row["avgh3"];

	}
}
$bus4 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM bus WHERE bus = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb4 = $row["avgh4"];

	}
}
$bus5 = "SELECT COUNT(bus) / (SELECT COUNT(bus) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM bus WHERE bus = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgb5 = $row["avg"];

	}
}


$bus6 = "SELECT COUNT(bus) as counth FROM bus where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus6))
{
	while ($row = $result->fetch_assoc()){
			$totcountb = $row["counth"];
	}
}


$bus7 = "SELECT COUNT(bus) as counth1 FROM bus WHERE bus = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus7))
{
	while ($row = $result->fetch_assoc()){
			$totcountb1 = $row["counth1"];
	}
}

$bus8 = "SELECT COUNT(bus) as counth2 FROM bus WHERE bus = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus8))
{
	while ($row = $result->fetch_assoc()){
			$totcountb2 = $row["counth2"];
	}
}
$bus9 = "SELECT COUNT(bus) as counth3 FROM bus WHERE bus = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus9))
{
	while ($row = $result->fetch_assoc()){
			$totcountb3 = $row["counth3"];
	}
}
$bus10 = "SELECT COUNT(bus) as counth4 FROM bus WHERE bus = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus10))
{
	while ($row = $result->fetch_assoc()){
			$totcountb4 = $row["counth4"];
	}
}
$bus11 = "SELECT COUNT(bus) as counth5 FROM bus WHERE bus = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($bus11))
{
	while ($row = $result->fetch_assoc()){
			$totcountb5 = $row["counth5"];
	}
}



$seat1 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM bus WHERE seat = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj1 = $row["avgh1"];
	
	}
}
$seat2 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM bus WHERE seat = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj2 = $row["avgh2"];

	}
}
$seat3 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM bus WHERE seat = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj3 = $row["avgh3"];

	}
}
$seat4 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM bus WHERE seat = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj4 = $row["avgh4"];

	}
}
$seat5 = "SELECT COUNT(seat) / (SELECT COUNT(seat) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM bus WHERE seat = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgj5 = $row["avg"];

	}
}


$seat6 = "SELECT COUNT(seat) as counth FROM bus where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat6))
{
	while ($row = $result->fetch_assoc()){
			$totcountj = $row["counth"];
	}
}


$seat7 = "SELECT COUNT(seat) as counth1 FROM bus WHERE seat = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat7))
{
	while ($row = $result->fetch_assoc()){
			$totcountj1 = $row["counth1"];
	}
}

$seat8 = "SELECT COUNT(seat) as counth2 FROM bus WHERE seat = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat8))
{
	while ($row = $result->fetch_assoc()){
			$totcountj2 = $row["counth2"];
	}
}
$seat9 = "SELECT COUNT(seat) as counth3 FROM bus WHERE seat = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat9))
{
	while ($row = $result->fetch_assoc()){
			$totcountj3 = $row["counth3"];
	}
}
$seat10 = "SELECT COUNT(seat) as counth4 FROM bus WHERE seat = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat10))
{
	while ($row = $result->fetch_assoc()){
			$totcountj4 = $row["counth4"];
	}
}
$seat11 = "SELECT COUNT(seat) as counth5 FROM bus WHERE seat = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($seat11))
{
	while ($row = $result->fetch_assoc()){
			$totcountj5 = $row["counth5"];
	}
}



$condition1 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM bus WHERE busc = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm1 = $row["avgh1"];
	
	}
}
$condition2 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM bus WHERE busc = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm2 = $row["avgh2"];

	}
}
$condition3 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM bus WHERE busc = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm3 = $row["avgh3"];

	}
}
$condition4 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM bus WHERE busc = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm4 = $row["avgh4"];

	}
}
$condition5 = "SELECT COUNT(busc) / (SELECT COUNT(busc) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM bus WHERE busc = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgm5 = $row["avg"];

	}
}


$condition6 = "SELECT COUNT(busc) as counth FROM bus where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition6))
{
	while ($row = $result->fetch_assoc()){
			$totcountm = $row["counth"];
	}
}


$condition7 = "SELECT COUNT(busc) as counth1 FROM bus WHERE busc = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition7))
{
	while ($row = $result->fetch_assoc()){
			$totcountm1 = $row["counth1"];
	}
}

$condition8 = "SELECT COUNT(busc) as counth2 FROM bus WHERE busc = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition8))
{
	while ($row = $result->fetch_assoc()){
			$totcountm2 = $row["counth2"];
	}
}
$condition9 = "SELECT COUNT(busc) as counth3 FROM bus WHERE busc = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition9))
{
	while ($row = $result->fetch_assoc()){
			$totcountm3 = $row["counth3"];
	}
}
$condition10 = "SELECT COUNT(busc) as counth4 FROM bus WHERE busc = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition10))
{
	while ($row = $result->fetch_assoc()){
			$totcountm4 = $row["counth4"];
	}
}
$condition11 = "SELECT COUNT(busc) as counth5 FROM bus WHERE busc = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($condition11))
{
	while ($row = $result->fetch_assoc()){
			$totcountm5 = $row["counth5"];
	}
}



$driver1 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM bus WHERE driver = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl1 = $row["avgh1"];
	
	}
}
$driver2 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM bus WHERE driver = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl2 = $row["avgh2"];

	}
}
$driver3 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM bus WHERE driver = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl3 = $row["avgh3"];

	}
}
$driver4 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM bus WHERE driver = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl4 = $row["avgh4"];

	}
}
$driver5 = "SELECT COUNT(driver) / (SELECT COUNT(driver) FROM bus where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM bus WHERE driver = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgl5 = $row["avg"];

	}
}


$driver6 = "SELECT COUNT(driver) as counth FROM bus where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver6))
{
	while ($row = $result->fetch_assoc()){
			$totcountl = $row["counth"];
	}
}


$driver7 = "SELECT COUNT(driver) as counth1 FROM bus WHERE driver = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver7))
{
	while ($row = $result->fetch_assoc()){
			$totcountl1 = $row["counth1"];
	}
}

$driver8 = "SELECT COUNT(driver) as counth2 FROM bus WHERE driver = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver8))
{
	while ($row = $result->fetch_assoc()){
			$totcountl2 = $row["counth2"];
	}
}
$driver9 = "SELECT COUNT(driver) as counth3 FROM bus WHERE driver = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver9))
{
	while ($row = $result->fetch_assoc()){
			$totcountl3 = $row["counth3"];
	}
}
$driver10 = "SELECT COUNT(driver) as counth4 FROM bus WHERE driver = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver10))
{
	while ($row = $result->fetch_assoc()){
			$totcountl4 = $row["counth4"];
	}
}
$driver11 = "SELECT COUNT(driver) as counth5 FROM bus WHERE driver = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($driver11))
{
	while ($row = $result->fetch_assoc()){
			$totcountl5 = $row["counth5"];
	}
}



?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon bus -->

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
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.barbus1-5 {width: <?php echo $avgb5; ?>%; height: 18px; background-color: #4CAF50;}
.barbus1-4 {width: <?php echo $avgb4; ?>%; height: 18px; background-color: #2196F3;}
.barbus1-3 {width: <?php echo $avgb3; ?>%; height: 18px; background-color: #00bcd4;}
.barbus1-2 {width: <?php echo $avgb2; ?>%; height: 18px; background-color: #ff9800;}
.barbus1-1 {width: <?php echo $avgb1; ?>%; height: 18px; background-color: #f44336;}

.barbus2-5 {width: <?php echo $avgj5; ?>%; height: 18px; background-color: #4CAF50;}
.barbus2-4 {width: <?php echo $avgj4; ?>%; height: 18px; background-color: #2196F3;}
.barbus2-3 {width: <?php echo $avgj3; ?>%; height: 18px; background-color: #00bcd4;}
.barbus2-2 {width: <?php echo $avgj2; ?>%; height: 18px; background-color: #ff9800;}
.barbus2-1 {width: <?php echo $avgj1; ?>%; height: 18px; background-color: #f44336;}

.barbus3-5 {width: <?php echo $avgm5; ?>%; height: 18px; background-color: #4CAF50;}
.barbus3-4 {width: <?php echo $avgm4; ?>%; height: 18px; background-color: #2196F3;}
.barbus3-3 {width: <?php echo $avgm3; ?>%; height: 18px; background-color: #00bcd4;}
.barbus3-2 {width: <?php echo $avgm2; ?>%; height: 18px; background-color: #ff9800;}
.barbus3-1 {width: <?php echo $avgm1; ?>%; height: 18px; background-color: #f44336;}

.barbus4-5 {width: <?php echo $avgl5; ?>%; height: 18px; background-color: #4CAF50;}
.barbus4-4 {width: <?php echo $avgl4; ?>%; height: 18px; background-color: #2196F3;}
.barbus4-3 {width: <?php echo $avgl3; ?>%; height: 18px; background-color: #00bcd4;}
.barbus4-2 {width: <?php echo $avgl2; ?>%; height: 18px; background-color: #ff9800;}
.barbus4-1 {width: <?php echo $avgl1; ?>%; height: 18px; background-color: #f44336;}



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
<center><span class="heading"><h3>bus RATING</h3></span></center>

<span class="heading"><center><?php echo "DEPT:&nbsp;",$dept,"&nbsp;&nbsp; YEAR:&nbsp;",$year,"&nbsp;&nbsp; SEC:&nbsp;",$sec;?></center><br></span>


<span class="heading">1.bus rating</span>

<p> average based on <?php echo $totcountb; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountb1; ?></div>
  </div>
</div>
<br>
<span class="heading">2.Seat Availability</span>

<p> average based on <?php echo $totcountj; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountj1; ?></div>
  </div>
</div>

<br>

<span class="heading">3.bus condition rating</span>

<p> average based on <?php echo $totcountm; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountm1; ?></div>
  </div>
</div>


<br>
<span class="heading">4.bus Furniture rating</span>

<p> average based on <?php echo $totcountl; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barbus4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountl1; ?></div>
  </div>
</div>
<br>

<center><span class="heading"><h3>Top Comments(4 Stars & above)</h3></span></center>
<?php 
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f = "SELECT feedback as feed , busno as busn FROM bus WHERE busc > 3 or bus>3 or driver>3 or seat>3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f)) {
	
    while ($row = $result->fetch_assoc()) {
			$topfeed = $row["feed"];
			$busno = $row["busn"];
			echo "Bus Number    :",$busno,"&nbsp;&nbsp;&nbsp;&nbsp;Comments   :",$topfeed,"<br>";
	}
}

?>

<center><span class="heading"><h3>Bad Comments(3 Stars & below)</h3></span></center>
<?php 

$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f1 = "SELECT feedback as feed , busno as busn FROM bus WHERE busc <= 3 or bus<=3 or driver<=3 or seat<=3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f1)) {
	
    while ($row = $result->fetch_assoc()) {
			$worstfeed = $row["feed"];
			$busno = $row["busn"];
			echo "Bus Number    :",$busno,"&nbsp;&nbsp;&nbsp;&nbsp;Comments   :",$worstfeed,"<br>";
	}
}

?>

</body>
</html>