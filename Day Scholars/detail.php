<center><form name ="f1" action="" method="post">
DEPARTMENT:<select name="dept">
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
</select>
SECTION:<select name="sec">
	<option >A</option>
	<option >B</option>
	<option >C</option>
	<option >D</option>
</select><br><br>


DAY-SCHOLAR:<input type="radio" value="1" name="day" /><br><br>
HOSTEL:<input type="radio" value="2" name="day" /><br><br>

<a href="split.html" target=_blank>next</a>

<b><i></i></b><input type="submit" name="sub8"><br><br>

<?php

if(isset($_POST['sub8']))
{
$dept=$_POST['dept'];
$sec=$_POST['sec'];
$year=$_POST['year'];

session_start();
$_SESSION['dept']=$dept;
$_SESSION['sec']=$sec;
$_SESSION['year']=$year;

}
?>
