<?php
include("../../database/conexion.php");

$dina="SELECT Id,Nombre FROM estado ORDER BY Nombre ASC";
$estado=mysqli_query($cone,$dina);
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
    <script languaje="javascript" src="../../resource/js/jquery-3.7.0.min.js"> </script>

    <!--se agrega la funcionanlidad al estado y municipio-->
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
<?php
$xd=$_GET['id'];

$sq="SELECT Id,Nombre,id_estado FROM municipio WHERE Id='$xd'";
$a=mysqli_query($cone,$sq);
if($a){
    if($fila=mysqli_fetch_array($a)){
        $id=$fila['Id'];
        $nombred=$fila['Nombre'];

    }
}
?>

<body> 
<a href="../../municipios.php"><button button class="btn btn-eliminar"><i class="bi bi-arrow-return-left"></i></button></a>
    <section class="d-flex justify-content-center">
        <div class="card col-sm-6 p-3">
            <div class="mb-3">
                <h1>Alta de municipio</h1>
            </div>
            <div class="mb-2">
                
                <form method="post" >
                    <div class="mb-2">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introdusca el nombre del municipio" required value="<?php echo $nombred; ?>">
                    </div>

                        <!--aqui va la primera consulta dinamica con Sql-->
                    </div>
                    <div class="row">
                        <div class="col">
                         <div class="mb-3">
                             <label for="estado" class="form-label">Estado:</label>
                             <select class="form-select" name="cbx_estado" id="cbx_estado" required>
                                <option value="0" selected disabled>Selecciona un estado</option>
                                <?php while($row =$estado->fetch_assoc()){ ?>
                                    <option value="<?php echo $row['id_estado']?>"> <?php echo $row['nombre'];?></option>
                                <?php }  ?>
                             </select>
                         </div>
                        </div>
                     <center><button type="submit" class="btn btn-primary" name="registrar" id="registrar">actualizar</button></center>

                </form>

            </div>
        </div>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
<?php
if (isset($_POST['registrar'])) {

    $nombre = mysqli_real_escape_string($cone, $_POST['nombre']);
    $estado = mysqli_real_escape_string($cone, $_POST['cbx_estado']);

    $comprobarnombre = mysqli_num_rows(mysqli_query($cone, "SELECT nombreM FROM municipio WHERE nombreM = '$nombre'"));
    if($comprobarnombre>=1){ ?>
    <br>
        <div class="alert alert-danger alert-dismissible">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                El nombre esta repetido elija otro nombre
        </div>

   <?php 
   }else {
    $registro = "UPDATE Municipio SET(NombreM=$nombre',IdEstado='$estado') WHERE ID_municipio='$id'";
                $r = mysqli_query($cone, $registro);

                if ($r) { ?>
                    <br>
                   <div class="alert alert-success alert-dismissible">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Felicidades se edito correctamente
                    </div>

                 <?php
                 ?>
                 <meta http-equiv="refresh" content="2;../../Municipios.php">

                 <?php
                 

                 

                } 

   }
}


?>

</html>