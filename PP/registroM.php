<?php
include("database/conexion.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nuevo Registro</title>
  </head>
  <body>

    <h1>Registra Nuevo Municipio</h1>

    <!-- INICIANDO 1er FORMULARIO -->
    <div class="container card" style="width: 128rem; height: 20rem;">
    <form method="POST">
    <div class="row">
        
        <div class="col col-xs col-md">
            <label for="Nombre">Nombre:</label>
            <input required class="form-control" type="text" name="Nombre" placeholder="Name" id="Nombre">
        </div>

    </div>
    
    <div class="row">
        <div class="col">
            <input class="btn btn-primary" type="submit">
        </div>
    </div>
    </form>
    </div>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
  <?php

  $nom=($_POST['Nombre']);
  $es=($_POST['Estado']);

  $quer="INSERT INTO municipio (Nombre,id_estado) values ('$nom','1')";

  mysqli_query($conexion,$quer);

  mysqli_close($conexion);

  ?>
</html>
<!-- End of Main Content -->