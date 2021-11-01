<?php

include('database.php');

if(isset($_POST['id'])) {
  $id = mysqli_real_escape_string($connection, $_POST['id']);

  $query = "SELECT * from task WHERE id = {$id}";

  $result = mysqli_query($connection, $query);
  if(!result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'Titulo' => $row['Titulo'],
      'description' => $row['FechaEstreno'],
      'idPelicula' => $row['idPelicula']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>
