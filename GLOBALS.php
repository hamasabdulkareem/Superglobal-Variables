<?php
 
function sum() {
    $x = 9;
    $q = 10;
 $y = $x +$q;
 $z = $GLOBALS['x'] + $q;
  echo '$x in global scope:  '.$GLOBALS['x'].'  The sum  '.$z."<br>".'$x in current scope: '.$x.'  The sum  '.$y."<br>";
}
$x = 6; 
sum();

?>
