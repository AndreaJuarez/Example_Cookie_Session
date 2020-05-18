<?php
session_start();
$name=$_POST['name'];
$apellido=$_POST['apellido'];

?>
<!DOCTYPE html>
<html>
<head>
<title> INICIO DE SESION </title>
   <link type="text/css" href="log.css" rel="stylesheet"></link>
</head>
<body>
<div id="container">
  <h1>SESION INICIADA</h1>
  <form action="close.php" method="post">
  <?php
 echo "<center><h4>SE INICIO SESION CON LOS SIGUIENTES DATOS:</h4></center>";
 echo "<center><h3>NOMBRE:</h3></center>";
 echo "<center><h2>$name</h2></center>";
 echo "<center><h3>APELLIDO:</h3></center>";
 echo "<center><h2>$apellido</h2></center>";

  ?>
   <button type="submit">CERRAR SESION</button>
  </form>
</div>
</body>
</html>











