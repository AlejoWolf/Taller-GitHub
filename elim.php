<?php
include("BaseDatos.php");
if(isset($_GET['idUsuario'])){
  $id = $_GET['idUsuario'];
  $query3= "DELETE FROM usuario WHERE idUsuario = $id";
  $result3=mysqli_query($conn,$query3);
  $query4= "DELETE FROM rol WHERE idRol = $id";
  $result4=mysqli_query($conn,$query4);
  echo $result3;
  if(!$result3 and !$result4){
    die("Error Critico | Valores no guardados"); 
}
  $_SESSION['message']='Informacion eliminada exitosamente!';
  $_SESSION['message_type']='danger';
  header('Location: historial.php');
}

?>


