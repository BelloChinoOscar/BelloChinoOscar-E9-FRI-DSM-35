<?php
include("layout/menu.php");
include("layout/header.php");
include("database/conexion.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Begin Page Content -->
<script src="resource/js/alertarta.js"></script>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">NUEVO USUARIO</h1>

        <a href="views/users/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="bi bi-person-fill-add"></i>  Añadir  </a>
    </div>

    <!-- INICIANDO 1er FORMULARIO -->
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

    .btn-editar {
      background-color:blueviolet;
    }

    .btn-vista {
      background-color:darkcyan;
    }

    .btn-eliminar {
      background-color:gold;
    }
  </style>
        
    <table  id="myTable" class="display" >
    <thead align="center">
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Contraseña</th>
        <th>Correo</th>
        <th>Tipo de usuario</th>
        <th>Carrera</th>
        <th>Cuatrimestre</th>
        <th>Municipio</th>
        <th>Operaciones</th>
      </tr>
    </thead>
    <tbody align="center">

    <?php
    $sql="SELECT usuario.Id, usuario.Nombre, usuario.Contraseña, usuario.Correo, usuario.id_usuario, usuario.id_carrera, usuario.id_cuatrimestre, usuario.id_municipio, municipio.Nombre, tipo_usuario.tipo_usua, carrera.Nombre, cuatrimestre.Nombre FROM usuario,tipo_usuario,municipio,carrera,cuatrimestre WHERE usuario.id_municipio=municipio.Id AND usuario.id_usuario=tipo_usuario.Id AND usuario.id_carrera=carrera.Id AND usuario.id_cuatrimestre=cuatrimestre.Id";
    $r = mysqli_query($conexion,$sql);
    while($fila=mysqli_fetch_array($r)){

    ?>
      <tr>
        <td ><?=$fila['Id'] ?></td>
        <td ><?=$fila['Nombre'] ?></td>
        <td ><?=$fila['Contraseña'] ?></td>
        <td ><?=$fila['Correo'] ?></td>
        <td ><?=$fila['id_usuario'] ?></td>
        <td ><?=$fila['id_carrera'] ?></td>
        <td ><?=$fila['id_cuatrimestre'] ?></td>
        <td><?=$fila['id_municipio'] ?></td>
        <td>
          <a href="edit.php?id=<?=$fila['Id']?>"><button class="btn btn-editar"><i class="bi bi-pencil-square"></i></button></a>
          <a href="show.php?id1=<?=$fila['Id'] ?> " ><button class="btn btn-vista"><i class="bi bi-postcard-fill"></i></button></a>
          <a href="drop.php?id2=<?=$fila['Id'] ?>" onclick="return confirmar()"><button class="btn btn-eliminar"><i class="bi bi-file-earmark-x"></i></button></a>
        </td>
        
      </tr>
      <?php } ?>      
      <!-- Puedes agregar más filas aquí -->
    </tbody>
  </table>

  </div>
<!-- /.container-fluid -->
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>

  <?php
include("layout/footer.php");
?>
</html>
