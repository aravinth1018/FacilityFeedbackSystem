<head>
<style>
*
{
	font-family: Sans-serif;
}
input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body><img src="logo.png" length="390px" height="80px"><center><h1>DETAILS:</h1><form name ="f1" action="" method="post">
<div>DEPARTMENT:<select name="dept">
	<option >IT</option>
	<option >MECH</option>
	<option >ECE</option>
	<option >EEE</option>
	<option >CSE</option>
</select><br><br>
YEAR:<select name="year">
	<option >I</option>
	<option >II</option>
	<option >III</option>
	<option >IV</option>
</select><br><br>
SECTION:<select name="sec">
	<option >A</option>
	<option >B</option>
	<option >C</option>
	<option >D</option>
</select><br><br>


DAY-SCHOLAR:<input type="radio" value="1" name="day" /><br><br>
HOSTEL:<input type="radio" value="2" name="day" /><br><br>



<b><i></i></b><input type="submit" name="sub8"><br><br>
</div>
<?php

if(isset($_POST['sub8']))
{
$dept=$_POST['dept'];
$sec=$_POST['sec'];
$year=$_POST['year'];
$x=$_POST['day'];
if($x==1)
	echo "<script> location.href='http://localhost/Facilities/Day%20Scholars/split.html';</script>";
else
	echo "<script> location.href='http://localhost/Facilities/Hostellers/split.html';</script>";
session_start();
$_SESSION['dept']=$dept;
$_SESSION['sec']=$sec;
$_SESSION['year']=$year;

}
?>
<!--<script>
let x =f1.day.value;
if(x == 0)
{
	x = 0;
	location.href='Day Scholars/split.html';
}
else
{
	x = 0;
	location.href='Hostellers/split.html';
}
</script>-->
