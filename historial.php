<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CRUD</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <?php include("BaseDatos.php"); ?>
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Barra de navegacion -->
  <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Dylan Jaramillo | CRUD con PHP</a>
        </div>
  </nav>
</head>
<body>
<button type="button" onclick="location='index.php'" class="button button-block">Regresar</button>
          
<!-- partial:index.partial.html -->
<div class="form">
          <h1>Historial de Registro</h1>
          <div class="col-md-8">
            <table class="table table-bordered">
              <thead>
                <tr class="mx-auto">
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Email</th>
                  <th>Telefono</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query="SELECT * FROM usuario";
                $resultUsuarios=mysqli_query($conn,$query);
                 while ($row=mysqli_fetch_array($resultUsuarios)) {?>
                      <tr>
                          <td><?php echo $row['nombre'] ?> </td>
                          <td><?php echo $row['apellido'] ?> </td>
                          <td><?php echo $row['email'] ?> </td>
                          <td><?php echo $row['telefono'] ?> </td>
                      </tr>
                 <?php }?>
              </tbody>
          </div>  
          </div>
          
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</body>
</html>
