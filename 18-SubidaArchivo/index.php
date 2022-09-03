<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subida de archivo al servidor</title>
</head>
<body>

  <h3>Subiendo archivo al servidor</h3>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="images">Seleccionar archivo</label>
    <input type="file" name="images" accept=".jpg, .png"> <br> <!-- accept -> son los archivos que admite el input -->

    <input type="submit" value="Enviar">
  </form>

  <h4>Listado de imagenes subidas desde PHP</h4>

  <?php include './vistaImagenes.php' ?>
  
</body>
</html>