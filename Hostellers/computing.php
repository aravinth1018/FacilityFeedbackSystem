<?php
  SESSION_START();

  if(!isset($_SESSION['user']))
  {
	  echo"<script>location.href='plogin.php'</script>";
  }
  

?>
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
</style>
</head>

<form  action="" method="post">
<center><table><caption class="cap">I-COMPUTING/LABORATORY FACILITIES</caption><tbody><tr><td><br>
<table>
<tbody>
<th>OUR QUERIES</th>
<th>STAR RATING </th>
</tr><tr>
<td>1.AVAILABILITY OF HARDWARE &AMP; ITS SPECIFICATION</td>




<td><link rel="stylesheet" href="style1.css" />
<fieldset class="rating">
    <input type="radio" id="star5_1" name="HARD" value="5" /><label class = "full" for="star5_1" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_1" name="HARD" value="4" /><label class = "full" for="star4_1" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_1" name="HARD" value="3" /><label class = "full" for="star3_1" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2_1" name="HARD" value="2" /><label class = "full" for="star2_1" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1_1" name="HARD" value="1" /><label class = "full" for="star1_1" title="Sucks big time - 1 star"></label>
    </fieldset>
  

</td>

</tr>
<tr>
<td>2.AVAILABILITY OF LICENSED SOFTWARE</td>

<td><fieldset class="rating">
    <input type="radio" id="star5_2" name="SOFT" value="5" /><label class = "full" for="star5_2" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_2" name="SOFT" value="4" /><label class = "full" for="star4_2" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_2" name="SOFT" value="3" /><label class = "full" for="star3_2" title="Meh - 3 stars"></label>

    <input type="radio" id="star2_2" name="SOFT" value="2" /><label class = "full" for="star2_2" title="Kinda bad - 2 stars"></label>

    <input type="radio" id="star1_2" name="SOFT" value="1" /><label class = "full" for="star1_2" title="Sucks big time - 1 star"></label>

</fieldset>


</td>

</tr>

<tr>
<td>3.INTERNET FACILITIES</td>


<td><link rel="stylesheet" href="style1.css" />

	<fieldset class="rating">
    <input type="radio" id="star5_3" name="INTER" value="5" /><label class = "full" for="star5_3" title="Awesome - 5 stars"></label>
 
    <input type="radio" id="star4_3" name="INTER" value="4" /><label class = "full" for="star4_3" title="Pretty good - 4 stars"></label>
  
    <input type="radio" id="star3_3" name="INTER" value="3" /><label class = "full" for="star3_3" title="Meh - 3 stars"></label>
  
    <input type="radio" id="star2_3" name="INTER" value="2" /><label class = "full" for="star2_3" title="Kinda bad - 2 stars"></label>
  
    <input type="radio" id="star1_3" name="INTER" value="1" /><label class = "full" for="star1_3" title="Sucks big time - 1 star"></label>
  
</fieldset>
  

</td>

</tr>

<tr>
<td>4.POWER BACKUP FACILITIES</td>


<td><fieldset class="rating">
    <input type="radio" id="star5_4" name="POWER" value="5" /><label class = "full" for="star5_4" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_4" name="POWER" value="4" /><label class = "full" for="star4_4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_4" name="POWER" value="3" /><label class = "full" for="star3_4" title="Meh - 3 stars"></label>
     
    <input type="radio" id="star2_4" name="POWER" value="2" /><label class = "full" for="star2_4" title="Kinda bad - 2 stars"></label>
   
    <input type="radio" id="star1_4" name="POWER" value="1" /><label class = "full" for="star1_4" title="Sucks big time - 1 star"></label>
   
</fieldset>
  

</td>

</tr>

<tr>
<td>5.FIRE SAFETY MEASURES</td>



<td><fieldset class="rating">
    <input type="radio" id="star5_5" name="FIRE" value="5" /><label class = "full" for="star5_5" title="Awesome - 5 stars"></label>
   
    <input type="radio" id="star4_5" name="FIRE" value="4" /><label class = "full" for="star4_5" title="Pretty good - 4 stars"></label>
   
    <input type="radio" id="star3_5" name="FIRE" value="3" /><label class = "full" for="star3_5" title="Meh - 3 stars"></label>
   
    <input type="radio" id="star2_5" name="FIRE" value="2" /><label class = "full" for="star2_5" title="Kinda bad - 2 stars"></label>
   
    <input type="radio" id="star1_5" name="FIRE" value="1" /><label class = "full" for="star1_5" title="Sucks big time - 1 star"></label>
   
</fieldset>
  

</td>

</tr>

<tr>
<td>6.OTHER FEEDBACK</td>
<td><textarea rows="7" cols="63" name="feedback"></textarea></td>
</tr></tbody></table><br><center>

<input type="submit" name="sub1" class="button button1">
<input type="reset" class="button button3">

</td></tr></tbody></table></center>

	</form>
	</body>
	<?php

if(isset($_POST['sub1']))
{
$HARD=$_POST['HARD'];
$SOFT=$_POST['SOFT'];
$INTER=$_POST['INTER'];
$POWER=$_POST['POWER'];
$FIRE=$_POST['FIRE'];
$feedback=$_POST['feedback'];
$dept=$_SESSION['dept'];
  $sec=$_SESSION['sec'];
  $year=$_SESSION['year'];
$conn=mysqli_connect("localhost","root","","facilities");
$a="insert into computing(dept,sec,year,HARD,SOFT,INTER,POWER,FIRE,feedback) values('$dept','$sec','$year','$HARD','$SOFT','$INTER','$POWER','$FIRE','$feedback')";

if(mysqli_query($conn,$a));
	
mysqli_close($conn);
echo"<script>location.href='library.php'</script>";
}
?>
