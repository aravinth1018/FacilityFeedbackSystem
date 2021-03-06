<?php
  SESSION_START();

  if(!isset($_SESSION['user']))
  {
	  echo"<script>location.href='overlogin.php'</script>";
  }

?>


<frameset rows="10%,*">
<frame src="overallnavi.php" frameborder="0">
<frame src="" name ="f1" frameborder="0">
</frameset>