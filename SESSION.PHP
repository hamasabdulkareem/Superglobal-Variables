<?php
   session_start();
   $_SESSION["name"] = "Ahmad";
$_SESSION["phone"] = "777123466";
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "Welcome ";
   
?>

<html>
<body>

<?php

echo  $msg.$_SESSION["name"];

?>

</body>
</html>

