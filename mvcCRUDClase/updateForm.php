<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <form class="" action="updateView.php" method="post">
      Id:<br>
      <input type="text" name="id" value="<?=$_GET["id"]?>" readonly><br>
      Nombre:<br>
      <input type="text" name="nombre" value="<?=$_GET["nombre"]?>"><br>
      Apellidos:<br>
      <input type="text" name="apellidos" value="<?=$_GET["apellidos"]?>"><br>
      Edad:<br>
      <input type="text" name="edad" value="<?=$_GET["edad"]?>"><br>
      <input type="submit" name="" value="ENVIAR"><br>
    </form>

  </body>
</html>
