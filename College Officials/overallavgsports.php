<?php
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM sports";
 
  

 $indoor1 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM sports WHERE INDOOR = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi1 = $row["avgh1"];
	
	}
}
$indoor2 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM sports WHERE INDOOR = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi2 = $row["avgh2"];

	}
}
$indoor3 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM sports WHERE INDOOR = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi3 = $row["avgh3"];

	}
}
$indoor4 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM sports WHERE INDOOR = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi4 = $row["avgh4"];

	}
}
$indoor5 = "SELECT COUNT(INDOOR) / (SELECT COUNT(INDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM sports WHERE INDOOR = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgi5 = $row["avg"];

	}
}


$indoor6 = "SELECT COUNT(INDOOR) as counth FROM sports where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor6))
{
	while ($row = $result->fetch_assoc()){
			$totcounti = $row["counth"];
	}
}


$indoor7 = "SELECT COUNT(INDOOR) as counth1 FROM sports WHERE INDOOR = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor7))
{
	while ($row = $result->fetch_assoc()){
			$totcounti1 = $row["counth1"];
	}
}

$indoor8 = "SELECT COUNT(INDOOR) as counth2 FROM sports WHERE INDOOR = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor8))
{
	while ($row = $result->fetch_assoc()){
			$totcounti2 = $row["counth2"];
	}
}
$indoor9 = "SELECT COUNT(INDOOR) as counth3 FROM sports WHERE INDOOR = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor9))
{
	while ($row = $result->fetch_assoc()){
			$totcounti3 = $row["counth3"];
	}
}
$indoor10 = "SELECT COUNT(INDOOR) as counth4 FROM sports WHERE INDOOR = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor10))
{
	while ($row = $result->fetch_assoc()){
			$totcounti4 = $row["counth4"];
	}
}
$indoor11 = "SELECT COUNT(INDOOR) as counth5 FROM sports WHERE INDOOR = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor11))
{
	while ($row = $result->fetch_assoc()){
			$totcounti5 = $row["counth5"];
	}
}



$indoor1 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year')*100 as avgh1 FROM sports WHERE OUTDOOR = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor1)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo1 = $row["avgh1"];
	
	}
}
$indoor2 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh2 FROM sports WHERE OUTDOOR = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor2)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo2 = $row["avgh2"];

	}
}
$indoor3 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh3 FROM sports WHERE OUTDOOR = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor3)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo3 = $row["avgh3"];

	}
}
$indoor4 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avgh4 FROM sports WHERE OUTDOOR = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor4)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo4 = $row["avgh4"];

	}
}
$indoor5 = "SELECT COUNT(OUTDOOR) / (SELECT COUNT(OUTDOOR) FROM sports where dept = '$dept' and sec = '$sec' and year = '$year') *100 as avg FROM sports WHERE OUTDOOR = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor5)) {
	
    while ($row = $result->fetch_assoc()) {
			$avgo5 = $row["avg"];

	}
}


$indoor6 = "SELECT COUNT(OUTDOOR) as counth FROM sports where dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor6))
{
	while ($row = $result->fetch_assoc()){
			$totcounto = $row["counth"];
	}
}


$indoor7 = "SELECT COUNT(OUTDOOR) as counth1 FROM sports WHERE OUTDOOR = 1 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor7))
{
	while ($row = $result->fetch_assoc()){
			$totcounto1 = $row["counth1"];
	}
}

$indoor8 = "SELECT COUNT(OUTDOOR) as counth2 FROM sports WHERE OUTDOOR = 2 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor8))
{
	while ($row = $result->fetch_assoc()){
			$totcounto2 = $row["counth2"];
	}
}
$indoor9 = "SELECT COUNT(OUTDOOR) as counth3 FROM sports WHERE OUTDOOR = 3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor9))
{
	while ($row = $result->fetch_assoc()){
			$totcounto3 = $row["counth3"];
	}
}
$indoor10 = "SELECT COUNT(OUTDOOR) as counth4 FROM sports WHERE OUTDOOR = 4 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor10))
{
	while ($row = $result->fetch_assoc()){
			$totcounto4 = $row["counth4"];
	}
}
$indoor11 = "SELECT COUNT(OUTDOOR) as counth5 FROM sports WHERE OUTDOOR = 5 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($indoor11))
{
	while ($row = $result->fetch_assoc()){
			$totcounto5 = $row["counth5"];
	}
}



?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome Icon sports -->
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
.barsportssports-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.barsports1-5 {width: <?php echo $avgi5; ?>%; height: 18px; background-color: #4CAF50;}
.barsports1-4 {width: <?php echo $avgi4; ?>%; height: 18px; background-color: #2196F3;}
.barsports1-3 {width: <?php echo $avgi3; ?>%; height: 18px; background-color: #00bcd4;}
.barsports1-2 {width: <?php echo $avgi2; ?>%; height: 18px; background-color: #ff9800;}
.barsports1-1 {width: <?php echo $avgi1; ?>%; height: 18px; background-color: #f44336;}

.barsports2-5 {width: <?php echo $avgo5; ?>%; height: 18px; background-color: #4CAF50;}
.barsports2-4 {width: <?php echo $avgo4; ?>%; height: 18px; background-color: #2196F3;}
.barsports2-3 {width: <?php echo $avgo3; ?>%; height: 18px; background-color: #00bcd4;}
.barsports2-2 {width: <?php echo $avgo2; ?>%; height: 18px; background-color: #ff9800;}
.barsports2-1 {width: <?php echo $avgo1; ?>%; height: 18px; background-color: #f44336;}



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
<center><span class="heading"><h3>sportss RATING</h3></span></center>

<span class="heading"><center><?php echo "DEPT:&nbsp;",$dept,"&nbsp;&nbsp; YEAR:&nbsp;",$year,"&nbsp;&nbsp; SEC:&nbsp;",$sec;?></center><br></span>


<span class="heading">1.Facilities For Indoor Games</span>

<p> average based on <?php echo $totcounti; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports1-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports1-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports1-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports1-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports1-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounti1; ?></div>
  </div>
</div>
<br>
<span class="heading">2.Facilities For Outdoor Games</span>

<p> average based on <?php echo $totcounto; ?> reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports2-5"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto5; ?></div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports2-4"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto4; ?></div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports2-3"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto3; ?></div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports2-2"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto2; ?></div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="barsports-container">
      <div class="barsports2-1"></div>
    </div>
  </div>
  <div class="side right">
    <div><?php echo $totcounto1; ?></div>
  </div>
</div>

<br>


<center><span class="heading"><h3>Top Comments(4 Stars & above)</h3></span></center>
<?php 
$username = "root";
$password = "";
$database = "facilities";
$mysqli = new mysqli("localhost", $username, $password, $database);

$f = "SELECT feedback as feed FROM sports WHERE ig>3 or og>3 and dept = '$dept' and sec = '$sec' and year = '$year'";

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

$f1 = "SELECT feedback as feed FROM sports WHERE ig<3 or og<3 and dept = '$dept' and sec = '$sec' and year = '$year'";

if ($result = $mysqli->query($f1)) {
	
    while ($row = $result->fetch_assoc()) {
			$worstfeed = $row["feed"];
			echo "Comments   :",$worstfeed,"<br>";
	}
}


?>


</body>
</html>