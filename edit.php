<?php
include("BaseDatos.php");
    $nombre = '';
    $apellido = '';
    $nombre='';
    $apellido='';
    $email='';
    $contraseña='';
    $telefono='';
    $cargo='';
    $institucion='';

if  (isset($_GET['idUsuario'])) {
  $id = $_GET['idUsuario'];
  $query = "SELECT * FROM usuario WHERE idUsuario =$id";
  $result = mysqli_query($conn, $query);
  $query2 = "SELECT * FROM rol WHERE idRol =$id";
  $result2 = mysqli_query($conn, $query2);
  if (mysqli_num_rows($result) == 1 && mysqli_num_rows($result2) == 1) {
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $nombre=$row['nombre'];
    $apellido=$row['apellido'];
    $email=$row['email'];
    $contraseña=$row['contraseña'];
    $telefono=$row['telefono'];
    $cargo=$row2['cargo'];
    $institucion=$row2['institucion'];
  }
}

if (isset($_POST['actualizar'])) {
  $id = $_GET['idUsuario'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $email=$_POST['email'];
  $contraseña=$_POST['contraseña'];
  $telefono=$_POST['telefono'];
  $cargo=$_POST['cargo'];
  $institucion=$_POST['institucion'];

  $query = "UPDATE usuario set nombre = '$nombre', apellido = '$apellido', email = '$email', contraseña = '$contraseña', telefono = '$telefono' WHERE idUsuario = $id";
 // $query2 = "UPDATE rol set cargo = '$cargo', institucion = '$institucion' WHERE idRol=$id";
  $re=mysqli_query($conn, $query);
 // $rea=mysqli_query($conn, $query2);
  $_SESSION['message'] = 'Informacion actualizada correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>





<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>EDITAR</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <?php include("BaseDatos.php"); ?>
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- fonts awesome -->
  <script src="https://kit.fontawesome.com/673952924b.js" crossorigin="anonymous"></script>
  <!-- Barra de navegacion -->
  <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Dylan Jaramillo | CRUD con PHP</a>
        </div>
  </nav>
</head>
<body>
<button type="button" onclick="location='index.php'" class="button button-block">Regresar</button>
<div class="form">
  <div class="row">
    <div class="col-md-8 mx-auto">
      
      <form action="edit.php?id=<?php echo $_GET['idUsuario']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Actualiza el nombre">
        </div>
        <div class="form-group">
        <input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>" placeholder="Actualiza el apellido">
        </div>
        <div class="form-group">
        <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Actualiza el email">
        </div>
        <div class="form-group">
        <input name="contraseña" type="text" class="form-control" value="<?php echo $contraseña; ?>" placeholder="Actualiza el contraseña">
        </div>
        <div class="form-group">
        <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualiza el telefono">
        </div>
        <div class="form-group">
        <input name="cargo" type="text" class="form-control" value="<?php echo $cargo; ?>" placeholder="Actualiza el cargo">
        </div>
        <div class="form-group">
        <input name="institucion" type="text" class="form-control" value="<?php echo $institucion; ?>" placeholder="Actualiza la institucion">
        </div>

        <button class="button button-block" name="actualizar">
          ACTUALIZAR
</button>
      </form>
      </div>
    
  </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>



























