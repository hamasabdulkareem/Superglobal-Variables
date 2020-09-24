<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <input type="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo 'Hello ' .$_POST["name"] . '!';}
?>
</html>

</body>
