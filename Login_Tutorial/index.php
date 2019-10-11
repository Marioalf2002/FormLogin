<?php
  session_start();

  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']['tipo'] == "Admin") {
      header('Location: Main_app/Admin/admin.php');
    } else if($_SESSION['usuario']['tipo'] == "Usuario"){
      header('Location: Main_app/Usuario/usuario.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login con PHP + MySQL + JQuery</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="error">
      <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
    </div>
    <div class="main">
     <form action="" id="formLg" autocomplete="off">
        <input type="text" required name="usuariolg" placeholder="Usuario" pattern="[A-Za-z0-9]{1,15}">
        <input type="password" required name="passlg" placeholder="Contraseña" pattern="[A-Za-z0-9]{1,15}">
        <input type="submit" class="botonlg"  value="Iniciar Sesion" >
     </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
