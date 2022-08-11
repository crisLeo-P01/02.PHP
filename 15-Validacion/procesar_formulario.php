<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validación de formulario con PHP</title>
  <style>
    input {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <?php include 'todook.php' ?>

  <?php if($error == 'ok') ?>
  <h1>Datos validados correctamente</h1>
  <p><?= $nombre ?></p>
  <p><?= $apellido ?></p>
  <p><?= $edad ?></p>
  <p><?= $email ?></p>

</body>
</html>