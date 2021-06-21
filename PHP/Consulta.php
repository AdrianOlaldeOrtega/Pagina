<?php
include_once('Conexion.php');
$consulta = "SELECT NumeroControl, NombrePila, PrimerApellido, SegundoApellido, Forneo FROM alumnos";
$result = mysqli_query($conexion, $consulta);
if(isset($result)){
  while ($row = $result->fetch_assoc()) {
    $numc = $row["NumeroControl"];
    $Nombre = $row["NombrePila"] . $row["PrimerApellido"] . $row["SegundoApellido"];
    $foraneo = $row["Foraneo"];
  }
}else{
  echo "Ups, algo salio mal."
}

 ?>
