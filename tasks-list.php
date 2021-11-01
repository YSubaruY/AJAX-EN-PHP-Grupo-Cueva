<?php

  include('database.php');

  $query = "SELECT * from pelicula";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'name' => $row['Titulo'],
      'description' => $row['FechaEstreno'],
      'id' => $row['idPelicula']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
