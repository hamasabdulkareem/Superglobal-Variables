
<html>
<body>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
echo 'Hello ' .$_GET["name"] . '!';}
?>
</html>

</body>
