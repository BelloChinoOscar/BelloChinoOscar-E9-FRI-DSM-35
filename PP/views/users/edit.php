<?php
include("../../database/conexion.php");
include("../../layout/menu.php");
include("../../layout/header.php");

$dina="SELECT Id,Nombre FROM estado ORDER BY Nombre ASC";
$estado=mysqli_query($conexion,$dina);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Estado</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../resource/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07bf2ec53c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--se agrega el jquery para el dinamismo en etsados y municipios-->
    <script languaje="javaescript" src="../../resource/js/jquery-3.7.0.min.js"> </script>


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

$sq="SELECT Id,Nombre,Contraseña,Correo,id_usuario,id_carrera,id_cuatrimestre,id_municipio FROM usuario WHERE Id=$xd";
$a=mysqli_query($conexion,$sq);
if($a){
    if($fila=mysqli_fetch_array($a)){
        $id=$fila['Id'];
        $nom=$fila["Nombre"];
        $usu=$fila["Contraseña"];
        $con=$fila["Correo"];
        $correo=$fila["id_usuario"];
        $muni=$fila["id_carrera"];
        $tipous=$fila["id_cuatrimestre"];
        $ava=$fila["id_municipio"];

    }
}



?>

<body> 
    <section class="d-flex justify-content-center">
        <div class="card col-sm-6 p-3">
            <div class="mb-3">
                <h1>Modificacion de usuarios</h1>
            </div>
            <div class="mb-2">
                
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Introdusca su nombre" required value="<?php echo $nom?>" >
                    </div>
                    <div class="mb-2">
                        <label for="Usuario">Contraseña:</label>
                        <input type="text" class="form-control" name="Usuario" id="Usuario" placeholder="Introdusca su Usuario"required value="<?php echo $usu?>">
                    </div>
                    <div class="mb-2">
                        <label for="">Tipo de usuario</label>
                        <select class="form-select" name="Tusuario" id="Tusuario" required >
                                 <option value="" selected disabled>Selecciona una opción</option>
                                 <option value="1">Maestro</option>
                                 <option value="2">Alumno</option>
                        </select>

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
                         <div class="col">
                        <div class="mb-3">
                             <label for="municipio" class="form-label">Municipio:</label>
                             <select type="text" class="form-control" id="cbx_municipio" name="cbx_municipio" ></select>
                        </div>
                        </div>
                    </div>
                    <div class="mb-3">
                          <label for="correo" class="form-label">Avatar:</label>
                          <input type="file" class="form-control" id="avatar" name="avatar" placeholder="Introduzca su correo"  required value="<?php echo $correo?>">
                    </div>
                    <div class="mb-3">
                          <label for="correo" class="form-label">Correo electrónico:</label>
                          <input type="email" class="form-control" id="correo" name="correo" placeholder="Introduzca su correo"  required value="<?php echo $correo?>">
                    </div>
                    <div class="mb-3">
                          <label for="contraseña" class="form-label">Contraseña:</label>
                          <input type="password" class="form-control" id="contraseña" name="contraseña"placeholder="Introduzca la contraseña" required value="<?php echo $con?>" >
                     </div>
                     
                     <div class="mb-3">
                          <label for="Rcontraseña" class="form-label">Repita contraseña:</label>
                          <input type="password" class="form-control" id="Rcontraseña" name="Rcontraseña" placeholder="Introduzca la contraseña" required >
                     </div>
                     <center><button type="submit" class="btn btn-primary" name="registrar" id="registrar">actualizar</button></center>

                </form>

            </div>
        </div>
        
    </section>
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  
  <?php
include("../../layout/footer.php");
?>
</body>


   <?php

     if (isset($_POST['registrar'])) {

    $nombre = mysqli_real_escape_string($cone, $_POST['Nombre']);
    $usuario = mysqli_real_escape_string($cone, $_POST['Usuario']);
    $tipoU = mysqli_real_escape_string($cone, $_POST['Tusuario']);
    $correo = mysqli_real_escape_string($cone, $_POST['Correo']);
    $contra = mysqli_real_escape_string($cone, md5($_POST['Contraseña']));
    $Rcontra = mysqli_real_escape_string($cone, md5($_POST['Rcontraseña']));
    $municipio = mysqli_real_escape_string($cone, $_POST['cbx_municipio']);
    $avatar='';
    if(isset($_FILES["avatar"])){
        $file=$_FILES["avatar"];
        $nomA=$file["name"];
        $tipo=$file["type"];
        $rutaP=$file["tmp_name"];
        $peso=$file["size"];
        $dimencion=getimagesize($rutaP);
        $ancho=$dimencion[0];
        $alto=$dimencion[1];
        $carpeta="../../resource/images/";
    }
    if($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){ ?>
     <br>
        <div class="alert alert-danger alert-dismissible">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                El archivo no es una imagen
        </div>

    <?php }else if($peso > 3*1024*1024){ ?>
        <br>
        <div class="alert alert-danger alert-dismissible">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Exedio el limite de peso de la imagen, el limite es de 3MB
        </div>
     <?php } else{
        $src=$carpeta.$nomA;
        move_uploaded_file($rutaP,$src);
        $avatar=$nomA;
     }

    $comprobarusuario = mysqli_num_rows(mysqli_query($cone, "SELECT usuario FROM usuario WHERE usuario = '$usuario'"));
    $comprobaremail = mysqli_num_rows(mysqli_query($cone, "SELECT correo FROM usuario WHERE correo = '$correo'"));

    if ($comprobarusuario >= 1) { ?>
         <br>
        <div class="alert alert-danger alert-dismissible">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                El nombre de usuario está en uso, por favor escoja otro
        </div>
    <?php }else {
        if ($comprobaremail >= 1) { ?>
            <br>
               <div class="alert alert-danger alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        El email ya está en uso por favor escoja otro o verifique si tiene una cuenta
               </div>
        <?php }else {
            if ($contra != $Rcontra) { ?>

                <br>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                             Las contraseñas no coinciden
                    </div>

            <?php }else {

                $registro = "UPDATE usuario SET nombre='$nombre' , usuario='$usuario' , contraseña='$contra' , correo='$correo' , id_estado='$municipio', id_tipo_usu='$tipoU', Avatar='$avatar' WHERE id_usuario='$id'";
                $r = mysqli_query($cone, $registro);

                if ($r) { ?>
                    <br>
                   <div class="alert alert-success alert-dismissible">
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Felicidades se ha registrado correctamente
                    </div>

                 <?php
                 ?>
                 <meta http-equiv="refresh" content="2;indexusuarios.php">

                 <?php
                 

                 

                } 
            }
        }
    }
}

?>