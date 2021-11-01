<?php

$conexion = mysqli_connect(
  'localhost', 'root', '', 'cinestar'
);

// for testing connection
#if($connection) {
#  echo 'database is connected';
#}
mysqli_set_charset($conexion,"utf8");

?>