<?php
include("../../database/conexion.php");

$dina="SELECT Id,Nombre FROM estado ORDER BY Nombre ASC";
$estado=mysqli_query($conexion,$dina);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="resource/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07bf2ec53c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--se agrega el jquery para el dinamismo en etsados y municipios-->
    <script languaje="javaescript" src="../../resource/js/jquery-3.7.0.min.js"> </script>

    <!--se agrega la funcionanlidad al estado y municipio-->
    <script languaje="javascript">
        $(document).ready(function(){
            $("#cbx_estado").change(function(){
                $("#cbx_estado option:selected").each(function(){
                    id_estado =$(this).val();
                    $.post("../../resource/Jquery/getMunicipio.php",{id_estado:id_estado},function(data){
                        $("#cbx_municipio").html(data);
                    });
                });      
            })
        });
    </script>
     <style>
        .btn {
      display: inline-block;
      padding: 6px 12px;
      text-align: center;
      text-decoration: none;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .btn-eliminar {
      background-color: #f44336;
    }
    a{
      text-decoration: none;
    }

    </style>



</head>

<body> 
<a href="../../users/registro2.php"><button button class="btn btn-eliminar"><i class="bi bi-arrow-return-left"></i>   Regresar</button></a>
    <section class="d-flex justify-content-center">
        <div class="card col-sm-6 p-3">
            <div class="mb-3">
                <h1>Nueva Publicacion</h1>
            </div>
            <div class="mb-2">
                
                <form method="post" >
                    <div class="mb-2">
                        <label for="fecha">Fecha:</label>
                        <input type="date" class="form-control" name="Fecha" id="Fecha" placeholder="Introdusca la fecha" required ">
                    </div>
                    
                    <div class="mb-2">
                        <label for="Contenido">Contenido:</label>
                        <input type="text" class="form-control" name="Contenido" id="Contenido" placeholder="Crea tu contenido" required ">


                        <!--aqui va la primera consulta dinamica con Sql-->
                    </div>
                    <div class="mb-2">
                        <label for="Imagen">Imagen:</label>
                        <input type="text" class="form-control" name="Imagen" id="Imagen" placeholder="Introduce la url" required ">
                    </div>
                    
                     <center><button type="submit" class="btn btn-primary" name="registrar" id="registrar">Registrarse</button></center>

                </form>

            </div>
        </div>
        
    </section>
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>


   <?php

     if (isset($_POST['registrar'])) 
     {
    
    $nombre = mysqli_real_escape_string($conexion, $_POST['Fecha']);
    $tipoU = mysqli_real_escape_string($conexion, $_POST['Contenido']);
    $correo = mysqli_real_escape_string($conexion, $_POST['Imagen']);
     ?>
                   
                   <?php 

                $registro = "INSERT INTO publicacion (Id, id_usua, Fecha, Contenido, Imagen) VALUES ('', '1', '$nombre', '$tipoU', '$correo')";
                $r = mysqli_query($conexion, $registro);

                if ($r) { ?>
                    <br>
                   <div class="alert alert-success alert-dismissible">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Felicidades, nueva publicacion
                    </div>

                 <?php
                 ?>
                 <meta http-equiv="refresh" content="2;../../registroP.php">

                 <?php
                 

                 

                } 
            }

?>
