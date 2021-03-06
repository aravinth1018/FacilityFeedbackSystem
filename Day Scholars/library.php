<?php
  SESSION_START();

  if(!isset($_SESSION['user']))
  {
	  echo"<script>location.href='plogin.php'</script>";
  }

?>
<head>
<style>
a:link, a:visited 
{
  background-color: rgb(0, 153, 40);
  color: white;
  width:150px;
    height:15px;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active 
{
padding: 18px 30px;
text-align: center;
  background-color: rgb(0, 123, 40);
}
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

<body>
<form action="" method="post">
<center><table><caption class="cap">II-LIBRARY</caption><tbody><tr><td><br>
<table>
<tbody>

<th>OUR QUERIES</th>
<th>STAR RATING</th>

<tr>
<td>1.ADEQUACY OF BOOKS </td>

<td>
<link rel="stylesheet" href="style1.css" />

	<fieldset class="rating">
    <input type="radio" id="star5_1" name="books" value="5" /><label class = "full" for="star5_1" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_1" name="books" value="4" /><label class = "full" for="star4_1" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_1" name="books" value="3" /><label class = "full" for="star3_1" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2_1" name="books" value="2" /><label class = "full" for="star2_1" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1_1" name="books" value="1" /><label class = "full" for="star1_1" title="Sucks big time - 1 star"></label>
    
</fieldset>
  

</td>


</tr>
<tr>
<td>2.ADEQUACY OF JOURNAL</td>

<td>
<link rel="stylesheet" href="style1.css" />

	<fieldset class="rating">
    <input type="radio" id="star5_2" name="journal" value="5" /><label class = "full" for="star5_2" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_2" name="journal" value="4" /><label class = "full" for="star4_2" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_2" name="journal" value="3" /><label class = "full" for="star3_2" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2_2" name="journal" value="2" /><label class = "full" for="star2_2" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1_2" name="journal" value="1" /><label class = "full" for="star1_2" title="Sucks big time - 1 star"></label>
    
</fieldset>
</td>

</tr>

<tr>
<td>3.ADEQUACY OF E-LEARNING MATERIALS</td>

<td><link rel="stylesheet" href="style1.css" />

	<fieldset class="rating">
    <input type="radio" id="star5_3" name="material" value="5" /><label class = "full" for="star5_3" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_3" name="material" value="4" /><label class = "full" for="star4_3" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_3" name="material" value="3" /><label class = "full" for="star3_3" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2_3" name="material" value="2" /><label class = "full" for="star2_3" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1_3" name="material" value="1" /><label class = "full" for="star1_3" title="Sucks big time - 1 star"></label>
    
</fieldset>

</td>

</tr>

<tr>
<td>4.LIBRARY ISSUE &AMP; RETURN</td>

<td><link rel="stylesheet" href="style1.css" />

	<fieldset class="rating">
    <input type="radio" id="star5_4" name="Library" value="5" /><label class = "full" for="star5_4" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_4" name="Library" value="4" /><label class = "full" for="star4_4" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_4" name="Library" value="3" /><label class = "full" for="star3_4" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2_4" name="Library" value="2" /><label class = "full" for="star2_4" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1_4" name="Library" value="1" /><label class = "full" for="star1_4" title="Sucks big time - 1 star"></label>
    
</fieldset>

</td>

</tr>

<tr>
<td>5.DIGITAL LIBRARY FACILITY</td>

<td><link rel="stylesheet" href="style1.css" />

	<fieldset class="rating">
    <input type="radio" id="star5_5" name="dlf" value="5" /><label class = "full" for="star5_5" title="Awesome - 5 stars"></label>
    
    <input type="radio" id="star4_5" name="dlf" value="4" /><label class = "full" for="star4_5" title="Pretty good - 4 stars"></label>
    
    <input type="radio" id="star3_5" name="dlf" value="3" /><label class = "full" for="star3_5" title="Meh - 3 stars"></label>
    
    <input type="radio" id="star2_5" name="dlf" value="2" /><label class = "full" for="star2_5" title="Kinda bad - 2 stars"></label>
    
    <input type="radio" id="star1_5" name="dlf" value="1" /><label class = "full" for="star1_5" title="Sucks big time - 1 star"></label>
    
	</fieldset>
  

</td>
</tr>

<tr>
<td>6.OTHER FEEDBACK</td>
<td><textarea rows="7" cols="63" name="feedback"></textarea></td>
</tr></tbody></table><br><center>
<input type="submit" name="sub2" class="button button1">
<input type="reset" class="button button3">

</form>
</body>
<?php

if(isset($_POST['sub2']))
{
$books=$_POST['books'];
$journal=$_POST['journal'];
$material=$_POST['material'];
$Library=$_POST['Library'];
$dlf=$_POST['dlf'];
$feedback=$_POST['feedback'];
$dept=$_SESSION['dept'];
  $sec=$_SESSION['sec'];
  $year=$_SESSION['year'];
$conn=mysqli_connect("localhost","root","","facilities");
$a="insert into library(dept,sec,year,books,journal,material,Library,dlf,feedback) values('$dept','$sec','$year','$books','$journal','$material','$Library','$dlf','$feedback')";

if(mysqli_query($conn,$a));
	
mysqli_close($conn);
echo"<script>location.href='mess.php'</script>";
}
?>