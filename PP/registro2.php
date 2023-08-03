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

    <h1>Registrate</h1>

    <!-- INICIANDO 1er FORMULARIO -->
    <div class="container card" style="width: 128rem; height: 20rem;">
    <form method="POST">
    <div class="row">
        
        <div class="col col-xs col-md">
            <label for="Nombre">Nombre:</label>
            <input required class="form-control" type="text" name="Nombre" placeholder="Name" id="Nombre">
        </div>
    
        <div class="col col-xs col-md">
        <label for="Contraseña">Contraseña:</label>
        <input required class="form-control" type="text" name="Contraseña"  placeholder="*****" id="Contraseña">
        </div>

        <div class="col col-xs col-md">
            <label for="Correo">Correo:</label>
            <input required class="form-control" type="text" name="Correo"  placeholder="@gmail.com" id="Correo">
        </div>
        <div class="col col-xs col-md">
            <label for="Usuario">Usuario:</label>
            <select class="form-select" name="Usuario" id="Usuario">
            <option value="1">Alumno</option>
            <option value="2">Maestro</option>
        </select>        
    </div>

        <div class="col col-xs col-md">
        <label for="Estado">Estado:</label>
        <select class="form-select" name="Estado" id="Estado">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        </div>
    
        <div class="col col-xs col-md">
        <label for="Carrera">Carrera:</label>
        <select class="form-select" name="Carrera" id="Carrera">
            <option value="1">DSM</option>
            <option value="2">IRD</option>
        </select>
        </div>

        <div class="col col-xs col-md">
        <label for="Cuatrimestre">Cuatrimestre:</label>
        <select class="form-select" name="Cuatrimestre" id="Cuatrimestre">
            <option value="1">1er</option>
            <option value="2">2do</option>
            <option value="3">3er</option>
            <option value="4">4to</option>
            <option value="5">5to</option>
            <option value="6">6to</option>
        </select>
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
  $con=($_POST['Contraseña']);
  $cor=($_POST['Correo']);

  $que="INSERT INTO usuario (Nombre,Contraseña,Correo,id_usuario,id_carrera,id_cuatrimestre,id_municipio) values ('$nom','$con','$cor','1','1','1','1')";

  mysqli_query($conexion,$que);

  mysqli_close($conexion);

  ?>
</html>
<!-- End of Main Content -->
