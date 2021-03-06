<?php
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM computing";




 $HARD1 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgHARD1 FROM computing WHERE HARD = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD1 = $row["avgHARD1"];
	
	}
}
$HARD2 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgHARD2 FROM computing WHERE HARD = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD2 = $row["avgHARD2"];

	}
}
$HARD3 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgHARD3 FROM computing WHERE HARD = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD3 = $row["avgHARD3"];

	}
}
$HARD4 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgHARD4 FROM computing WHERE HARD = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD4 = $row["avgHARD4"];

	}
}
$HARD5 = "SELECT COUNT(HARD) / (SELECT COUNT(HARD) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM computing WHERE HARD = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgHARD5 = $row["avg"];

	}
}


$HARD6 = "SELECT COUNT(HARD) as countHARD FROM computing where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD6))
{
	while ($row = $result->fetch_assoc()){
			$totcountHARD = $row["countHARD"];
	}
}


$HARD7 = "SELECT COUNT(HARD) as countHARD1 FROM computing WHERE HARD = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD7))
{
	while ($row = $result->fetch_assoc()){
			$totcountHARD1 = $row["countHARD1"];
	}
}

$HARD8 = "SELECT COUNT(HARD) as countHARD2 FROM computing WHERE HARD = 2 and dept = '$dept' and sec = '$sec' and year = '$year' ";

if ($result = $mysqli->query($HARD8))
{
	while ($row = $result->fetch_assoc()){
			$totcountHARD2 = $row["countHARD2"];
	}
}
$HARD9 = "SELECT COUNT(HARD) as countHARD3 FROM computing WHERE HARD = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD9))
{
	while ($row = $result->fetch_assoc()){
			$totcountHARD3 = $row["countHARD3"];
	}
}
$HARD10 = "SELECT COUNT(HARD) as countHARD4 FROM computing WHERE HARD = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD10))
{
	while ($row = $result->fetch_assoc()){
			$totcountHARD4 = $row["countHARD4"];
	}
}
$HARD11 = "SELECT COUNT(HARD) as countHARD5 FROM computing WHERE HARD = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($HARD11))
{
	while ($row = $result->fetch_assoc()){
			$totcountHARD5 = $row["countHARD5"];
	}
}




 $SOFT1 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgSOFT1 FROM computing WHERE SOFT = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT1 = $row["avgSOFT1"];
	
	}
}
$SOFT2 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgSOFT2 FROM computing WHERE SOFT = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT2 = $row["avgSOFT2"];

	}
}
$SOFT3 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgSOFT3 FROM computing WHERE SOFT = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT3 = $row["avgSOFT3"];

	}
}
$SOFT4 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgSOFT4 FROM computing WHERE SOFT = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT4 = $row["avgSOFT4"];

	}
}
$SOFT5 = "SELECT COUNT(SOFT) / (SELECT COUNT(SOFT) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM computing WHERE SOFT = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgSOFT5 = $row["avg"];

	}
}


$SOFT6 = "SELECT COUNT(SOFT) as countSOFT FROM computing where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT6))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT = $row["countSOFT"];
	}
}


$SOFT7 = "SELECT COUNT(SOFT) as countSOFT1 FROM computing WHERE HARD = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT7))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT1 = $row["countSOFT1"];
	}
}

$SOFT8 = "SELECT COUNT(SOFT) as countSOFT2 FROM computing WHERE SOFT = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT8))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT2 = $row["countSOFT2"];
	}
}
$SOFT9 = "SELECT COUNT(SOFT) as countSOFT3 FROM computing WHERE SOFT = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT9))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT3 = $row["countSOFT3"];
	}
}
$SOFT10 = "SELECT COUNT(SOFT) as countSOFT4 FROM computing WHERE SOFT = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT10))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT4 = $row["countSOFT4"];
	}
}
$SOFT11 = "SELECT COUNT(SOFT) as countSOFT5 FROM computing WHERE SOFT = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($SOFT11))
{
	while ($row = $result->fetch_assoc()){
			$totcountSOFT5 = $row["countSOFT5"];
	}
}





 $INTER1 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgINTER1 FROM computing WHERE INTER = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER1 = $row["avgINTER1"];
	
	}
}
$INTER2 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgINTER2 FROM computing WHERE INTER = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER2 = $row["avgINTER2"];

	}
}
$INTER3 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgINTER3 FROM computing WHERE INTER = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER3 = $row["avgINTER3"];

	}
}
$INTER4 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgINTER4 FROM computing WHERE INTER = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER4 = $row["avgINTER4"];

	}
}
$INTER5 = "SELECT COUNT(INTER) / (SELECT COUNT(INTER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM computing WHERE INTER = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgINTER5 = $row["avg"];

	}
}


$INTER6 = "SELECT COUNT(INTER) as countINTER FROM computing where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER6))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER = $row["countINTER"];
	}
}


$INTER7 = "SELECT COUNT(INTER) as countINTER1 FROM computing WHERE INTER = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER7))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER1 = $row["countINTER1"];
	}
}

$INTER8 = "SELECT COUNT(INTER) as countINTER2 FROM computing WHERE INTER = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER8))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER2 = $row["countINTER2"];
	}
}
$INTER9 = "SELECT COUNT(INTER) as countINTER3 FROM computing WHERE INTER = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER9))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER3 = $row["countINTER3"];
	}
}
$INTER10 = "SELECT COUNT(INTER) as countINTER4 FROM computing WHERE INTER = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER10))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER4 = $row["countINTER4"];
	}
}
$INTER11 = "SELECT COUNT(INTER) as countINTER5 FROM computing WHERE INTER = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($INTER11))
{
	while ($row = $result->fetch_assoc()){
			$totcountINTER5 = $row["countINTER5"];
	}
}



 $POWER1 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgPOWER1 FROM computing WHERE POWER = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER1 = $row["avgPOWER1"];
	
	}
}
$POWER2 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgPOWER2 FROM computing WHERE POWER = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER2 = $row["avgPOWER2"];

	}
}
$POWER3 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing) *100 as avgPOWER3 FROM computing WHERE POWER = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER3 = $row["avgPOWER3"];

	}
}
$POWER4 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgPOWER4 FROM computing WHERE POWER = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER4 = $row["avgPOWER4"];

	}
}
$POWER5 = "SELECT COUNT(POWER) / (SELECT COUNT(POWER) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM computing WHERE POWER = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgPOWER5 = $row["avg"];

	}
}


$POWER6 = "SELECT COUNT(POWER) as countPOWER FROM computing where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER6))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER = $row["countPOWER"];
	}
}


$POWER7 = "SELECT COUNT(POWER) as countPOWER1 FROM computing WHERE POWER = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER7))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER1 = $row["countPOWER1"];
	}
}

$POWER8 = "SELECT COUNT(POWER) as countPOWER2 FROM computing WHERE POWER = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER8))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER2 = $row["countPOWER2"];
	}
}
$POWER9 = "SELECT COUNT(POWER) as countPOWER3 FROM computing WHERE POWER = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER9))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER3 = $row["countPOWER3"];
	}
}
$POWER10 = "SELECT COUNT(POWER) as countPOWER4 FROM computing WHERE POWER = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER10))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER4 = $row["countPOWER4"];
	}
}
$POWER11 = "SELECT COUNT(POWER) as countPOWER5 FROM computing WHERE POWER = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($POWER11))
{
	while ($row = $result->fetch_assoc()){
			$totcountPOWER5 = $row["countPOWER5"];
	}
}



$FIRE1 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgFIRE1 FROM computing WHERE FIRE = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE1 = $row["avgFIRE1"];
	
	}
}
$FIRE2 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgFIRE2 FROM computing WHERE FIRE = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE2 = $row["avgFIRE2"];

	}
}
$FIRE3 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgFIRE3 FROM computing WHERE FIRE = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE3 = $row["avgFIRE3"];

	}
}
$FIRE4 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgFIRE4 FROM computing WHERE FIRE = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE4 = $row["avgFIRE4"];

	}
}
$FIRE5 = "SELECT COUNT(FIRE) / (SELECT COUNT(FIRE) FROM computing where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM computing WHERE FIRE = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgFIRE5 = $row["avg"];

	}
}


$FIRE6 = "SELECT COUNT(FIRE) as countFIRE FROM computing where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE6))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE = $row["countFIRE"];
	}
}


$FIRE7 = "SELECT COUNT(FIRE) as countFIRE1 FROM computing WHERE FIRE = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE7))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE1 = $row["countFIRE1"];
	}
}

$FIRE8 = "SELECT COUNT(FIRE) as countFIRE2 FROM computing WHERE FIRE = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE8))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE2 = $row["countFIRE2"];
	}
}
$FIRE9 = "SELECT COUNT(INTER) as countFIRE3 FROM computing WHERE FIRE = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE9))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE3 = $row["countFIRE3"];
	}
}
$FIRE10 = "SELECT COUNT(FIRE) as countFIRE4 FROM computing WHERE FIRE = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE10))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE4 = $row["countFIRE4"];
	}
}
$FIRE11 = "SELECT COUNT(FIRE) as countFIRE5 FROM computing WHERE FIRE = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($FIRE11))
{
	while ($row = $result->fetch_assoc()){
			$totcountFIRE5 = $row["countFIRE5"];
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
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.barcomp1-5 {width: <?php echo $avgHARD5; ?>%; height: 18px; background-color: #4CAF50;}
.barcomp1-4 {width: <?php echo $avgHARD4; ?>%; height: 18px; background-color: #2196F3;}
.barcomp1-3 {width: <?php echo $avgHARD3; ?>%; height: 18px; background-color: #00bcd4;}
.barcomp1-2 {width: <?php echo $avgHARD2; ?>%; height: 18px; background-color: #ff9800;}
.barcomp1-1 {width: <?php echo $avgHARD1; ?>%; height: 18px; background-color: #f44336;}

.barcomp2-5 {width: <?php echo $avgSOFT5; ?>%; height: 18px; background-color: #4CAF50;}
.barcomp2-4 {width: <?php echo $avgSOFT4; ?>%; height: 18px; background-color: #2196F3;}
.barcomp2-3 {width: <?php echo $avgSOFT3; ?>%; height: 18px; background-color: #00bcd4;}
.barcomp2-2 {width: <?php echo $avgSOFT2; ?>%; height: 18px; background-color: #ff9800;}
.barcomp2-1 {width: <?php echo $avgSOFT1; ?>%; height: 18px; background-color: #f44336;}

.barcomp3-5 {width: <?php echo $avgINTER5; ?>%; height: 18px; background-color: #4CAF50;}
.barcomp3-4 {width: <?php echo $avgINTER4; ?>%; height: 18px; background-color: #2196F3;}
.barcomp3-3 {width: <?php echo $avgINTER3; ?>%; height: 18px; background-color: #00bcd4;}
.barcomp3-2 {width: <?php echo $avgINTER2; ?>%; height: 18px; background-color: #ff9800;}
.barcomp3-1 {width: <?php echo $avgINTER1; ?>%; height: 18px; background-color: #f44336;}

.barcomp4-5 {width: <?php echo $avgPOWER5; ?>%; height: 18px; background-color: #4CAF50;}
.barcomp4-4 {width: <?php echo $avgPOWER4; ?>%; height: 18px; background-color: #2196F3;}
.barcomp4-3 {width: <?php echo $avgPOWER3; ?>%; height: 18px; background-color: #00bcd4;}
.barcomp4-2 {width: <?php echo $avgPOWER2; ?>%; height: 18px; background-color: #ff9800;}
.barcomp4-1 {width: <?php echo $avgPOWER1; ?>%; height: 18px; background-color: #f44336;}

.barcomp5-5 {width: <?php echo $avgFIRE5; ?>%; height: 18px; background-color: #4CAF50;}
.barcomp5-4 {width: <?php echo $avgFIRE4; ?>%; height: 18px; background-color: #2196F3;}
.barcomp5-3 {width: <?php echo $avgFIRE3; ?>%; height: 18px; background-color: #00bcd4;}
.barcomp5-2 {width: <?php echo $avgFIRE2; ?>%; height: 18px; background-color: #ff9800;}
.barcomp5-1 {width: <?php echo $avgFIRE1; ?>%; height: 18px; background-color: #f44336;}

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
<center><span class="heading"><h3>LABORATORY RATING</h3></span></center>
<span class="heading"><center><?php echo "DEPT:&nbsp;",$dept,"&nbsp;&nbsp; YEAR:&nbsp;",$year,"&nbsp;&nbsp; SEC:&nbsp;",$sec;?></center><br></span>


<span class="heading">1.Hardware rating</span>

<p> average based on <?php echo $totcountHARD; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHARD5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHARD4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHARD3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHARD2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountHARD1; ?></div>
  </div>
</div>
<br><br>
<span class="heading">2.Software rating</span>

<p> average based on <?php echo $totcountSOFT; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountSOFT1; ?></div>
  </div>
</div>

<br><br>

<span class="heading">3.INTERNET FACILITIES rating</span>

<p> average based on <?php echo $totcountINTER; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp3-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp3-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp3-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp3-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp3-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountINTER1; ?></div>
  </div>
</div>

<br><br>

<span class="heading">4.POWER BACKUP FACILITIES rating</span>

<p> average based on <?php echo $totcountPOWER; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp4-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp4-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp4-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp4-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp4-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountPOWER1; ?></div>
  </div>
</div>
<br><br>


<span class="heading">5.FIRE SAFETY MEASURES rating</span>

<p> average based on <?php echo $totcountFIRE; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp5-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp5-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp5-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp5-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="barcomp5-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcountFIRE1; ?></div>
  </div>
</div>

<center><span class="heading"><h3>Top Comments(4 Stars & above)</h3></span></center>
<?php 
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f = "SELECT feedback as feed FROM computing WHERE HARD > 3 or SOFT>3 or INTER>3 or FIRE>3 or POWER>3 and dept = '$dept' and sec = '$sec' and year = '$year'";

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

$f1 = "SELECT feedback as feed FROM computing WHERE HARD < 3 or SOFT<3 or INTER<3 or FIRE<3 or POWER<3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f1)) {
	
    while ($row = $result->fetch_assoc()) {
			$worstfeed = $row["feed"];
			echo "Comments   :",$worstfeed,"<br>";
	}
}
?>

</body>
</html>