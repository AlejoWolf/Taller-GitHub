<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CRUD</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <?php include("BaseDatos.php"); ?>
   <!-- Barra de navegacion -->
  <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Dylan Jaramillo | CRUD con PHP</a>
        </div>
  </nav>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Carga</a></li>
        <li class="tab"><a href="#login">Menu</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Carga tu información</h1>
          
          <form action="cargar.php" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="nombre"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Apellido<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="apellido"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Crea una contraseña<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="contraseña"/>
          </div>
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Telefono<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="telefono"/>
            </div>
            <div class="field-wrap">
              <label>
                Cargo<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="cargo"/>
            </div>
          </div>
          <div class="field-wrap">
            <label>
              Institucion<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="institucion"/>
          </div>
       
          <button type="submit" name="cargar" value="cargar" class="button button-block">Cargar</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Historial de carga</h1>
          <button type="button" onclick="location='historial.php'" class="button button-block">observar</button>
          <br>
          <h1>Actualiza tu Información</h1>
          <button type="button" onclick="location='modifica.php'" class="button button-block">Modificar</button>
          <br>
          <h1>Elimina tu Información</h1>
          <button type="button" onclick="location='elimina.php'" class="button button-block">Eliminar</button>
          </form>

        </div>
        
      </div><!-- tab-content -->
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>
  </body>
</html>