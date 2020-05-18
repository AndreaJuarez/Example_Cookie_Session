<?php
$name=$_POST['name'];
setcookie("$name", time()+5200);
?>

<!DOCTYPE html>
<html>
<head>
<title> COOKIES </title>
<link type="text/css" href="cooki.css" rel="stylesheet"></link>
</head>
<div id="container">
  <h1>COOKIES</h1>
  <br>
  <br>
   <center><h2>LA COOKIE SE HA CREADO CON EL SIGUIENTE NOMBRE: <?php echo "<h1>$name</h1>"?> </h2></center>
  </form>
</div>
</body>
</html>
