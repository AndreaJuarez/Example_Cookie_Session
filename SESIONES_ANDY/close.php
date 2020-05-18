<!DOCTYPE html>
<html>
<head>
<title> CERRAR SESION </title>
   <link type="text/css" href="log.css" rel="stylesheet"></link>
</head>
<body>
<div id="container">
  <form action="cerrar.php" method="post">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
session_start();

session_unset();

session_destroy();
 echo "<center><b><h1> LA SESION HA FINALIZADO</h1></b>"
?>
</div>
</body>
</html>











