
<?php
  SESSION_START();

  if(!isset($_SESSION['user']))
  {
	  echo"<script>location.href='plogin.php'</script>";
  }

?>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}




 
	caption,th,td,tr
	{
	font-family:"comicsans-ms", serif;
	color:rgb(80, 0, 64);
	}
	table{
		border-collapse: solid;
		width: 100%;
	}
	
	th,td{
		text-align: left;
  padding: 8px;
	}
	tr:nth-child(even) {background-color: #f2f2f2;}
	th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.cap{background-color:rgb(127, 128, 178);color:white;}




.anchor {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.acnchor1:link,.anchor1:visited {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.anchor1:hover {
  background-color: rgb(0,187,235);
  color: white;
}
</style>
</head>
<form action="" method="post">
<title>BUS</title>
<body><center>


<center><table><caption>II-BUS</caption><tbody><tr><td><br>
<table>
<tbody>

<th>OUR QUERIES</th>
<th>STAR RATING</th>
<link rel="stylesheet" href="style1.html">
<tr>
<td> AVAILABLITY OF BUS </td>

<td><fieldset class="rating">
    <input type="radio" id="star5_1" name="bus" value="5" /><label class = "full" for="star5_1" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_1" name="bus" value="4" /><label class = "full" for="star4_1" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_1" name="bus" value="3" /><label class = "full" for="star3_1" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2_1" name="bus" value="2" /><label class = "full" for="star2_1" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1_1" name="bus" value="1" /><label class = "full" for="star1_1" title="Sucks big time - 1 star"></label>
    
</fieldset>
</td>

</tr>
<tr>
<td>SEAT AVAILABLITY</td>

<td><fieldset class="rating">
    <input type="radio" id="star5_2" name="seat" value="5" /><label class = "full" for="star5_2" title="Awesome - 5 stars"></label>
    
	<input type="radio" id="star4_2" name="seat" value="4" /><label class = "full" for="star4_2" title="Pretty good - 4 stars"></label>

    <input type="radio" id="star3_2" name="seat" value="3" /><label class = "full" for="star3_2" title="Meh - 3 stars"></label>

    <input type="radio" id="star2_2" name="seat" value="2" /><label class = "full" for="star2_2" title="Kinda bad - 2 stars"></label>

    <input type="radio" id="star1_2" name="seat" value="1" /><label class = "full" for="star1_2" title="Sucks big time - 1 star"></label>

</fieldset>
</td>

</tr>

<tr>
<td>BUS CONDITION</td>

<td><link rel="stylesheet" href="style1.css" />

	<fieldset class="rating">
    <input type="radio" id="star5_3" name="busc" value="5" /><label class = "full" for="star5_3" title="Awesome - 5 stars"></label>
 
    <input type="radio" id="star4_3" name="busc" value="4" /><label class = "full" for="star4_3" title="Pretty good - 4 stars"></label>
 
    <input type="radio" id="star3_3" name="busc" value="3" /><label class = "full" for="star3_3" title="Meh - 3 stars"></label>
 
    <input type="radio" id="star2_3" name="busc" value="2" /><label class = "full" for="star2_3" title="Kinda bad - 2 stars"></label>
   
    <input type="radio" id="star1_3" name="busc" value="1" /><label class = "full" for="star1_3" title="Sucks big time - 1 star"></label>
 
</fieldset>
  

</td>

</tr>

<tr>
<td>DRIVER BEHAVIOUR</td>

<td><fieldset class="rating">
    <input type="radio" id="star5_4" name="driver" value="5" /><label class = "full" for="star5_4" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_4" name="driver" value="4" /><label class = "full" for="star4_4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_4" name="driver" value="3" /><label class = "full" for="star3_4" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2_4" name="driver" value="2" /><label class = "full" for="star2_4" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1_4" name="driver" value="1" /><label class = "full" for="star1_4" title="Sucks big time - 1 star"></label>
    
</fieldset>
  

</td>

</tr>
<tr>
<td>ENTER BUS NO.</td>



<td>
<input type="text" name="busno"/>
</td>
</tr>

<tr>
<td>other feedback</td>
<td colspan=5><textarea rows="7" cols="63" name="feedback"></textarea></td>
</tr></tbody></table><br><center>
<input type="submit" class="button button1" name="sub7">
<input type="reset" class="button button3"></center>

</td></tr></tbody></table>
</center>
</form>


</body>






<?php

if(isset($_POST['sub7']))
{
$bus=$_POST['bus'];
$seat=$_POST['seat'];
$busc=$_POST['busc'];
$driver=$_POST['driver'];
$busno=$_POST['busno'];
$feedback=$_POST['feedback'];
$dept=$_SESSION['dept'];
  $sec=$_SESSION['sec'];
  $year=$_SESSION['year'];
$conn=mysqli_connect("localhost","root","","facilities");
$a="insert into bus values('$dept','$sec','$year','$bus','$seat','$busc','$driver','$busno','$feedback')";

if(mysqli_query($conn,$a));
	
mysqli_close($conn);

}
?>