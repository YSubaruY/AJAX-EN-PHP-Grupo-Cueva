<?php

include('database.php');

if(isset($_POST['idPelicula'])) {
  $id = $_POST['idPelicula'];
  $query = "DELETE FROM task WHERE idPelicula = $idPelicula"; 
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "Task Deleted Successfully";  

}

?>
