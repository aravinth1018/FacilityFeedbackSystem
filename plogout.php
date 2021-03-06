<?php
  SESSION_START();
  SESSION_DESTROY();
  if(!isset($_SESSION['user']))
?>
echo"<script>location.href='plogin.php'</script>";