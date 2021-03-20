<?php 
include("BaseDatos.php");
if (isset($_POST['cargar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];
    $telefono=$_POST['telefono'];
    $cargo=$_POST['cargo'];
    $institucion=$_POST['institucion'];

    $query="INSERT INTO usuario(nombre,apellido,email,contraseña,telefono)VALUES('$nombre','$apellido','$email','$contraseña','$telefono')";
    $result=mysqli_query($conn,$query);
    $query2="INSERT INTO rol(cargo, institucion)VALUES('$cargo','$institucion')";
    $result2=mysqli_query($conn,$query2);
    if(!$result and !$result2){
        die("Error Critico | Valores no guardados");
    }
    $_SESSION['message']='Informacion cargada exitosamente!';
    $_SESSION['message_type']='success';
    header("Location: index.php");


}

?>