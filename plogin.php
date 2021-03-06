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
<body>
<img src="logo.png" length="390px" height="80px">
<div>
<center>
<form action="" method="post">
<center><b><h1>Facilities Login Portal:</h1></b></center>
<label name = "a"> User Name</label><br><input type="text" placeholder=" User Name" name="a" /><br><br>
<label name = "b">Password</label><br><input type="password" placeholder="Password" name="b" /><br><br>
<input type="submit" name="sub9" ><br><br>
</form>
</center>
</div>
</body>
<?php
if(isset($_POST['sub9'])){
	SESSION_START();
$g=$_POST['a'];
$h=$_POST['b'];


if($g=="student" and $h=="student")
{

echo"login sucessfully";
echo"<script>location.href='detail.php'</script>";

}
else if($g == "admin" and $h == "admin")
{
	echo"<script>location.href='College Officials/detail.php'</script>";
}
$_SESSION['user']=$g;

}
?>


