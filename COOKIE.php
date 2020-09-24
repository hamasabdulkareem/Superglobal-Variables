                   
   <?php

$cookie_name = "Ahmad";
$cookie_value = "age: 23, Country: Yemen";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>
<html>
<body>

<?php

if(!isset($_COOKIE[$cookie_name])) {
    echo "Sorry '" . $cookie_name . "' is not set!";
  } else {
    echo "welcom '" . $cookie_name . "' is set!<br>";
    echo "Yuor data is: " . $_COOKIE[$cookie_name];
  }
?>

</body>
</html>