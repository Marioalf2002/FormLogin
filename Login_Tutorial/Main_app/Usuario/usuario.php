<?php
  session_start();

  if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']['tipo'] != "Usuario") {
      header('Location: ../Admin/admin.php');
    }
  } else {
    header('Location: ../../index.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuario</title>
  </head>
  <body>
    <h1>Welcome usuario <?php echo $_SESSION['usuario']['nombres']; ?></h1>
    <a href="../salir.php">Cerrar Sesion</a>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
    </label>
  </body>
</html>
