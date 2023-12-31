<?php
include("layout/menu.php");
include("layout/header.php");
include("database/conexion.php");
?>

<script src="resource/js/alertarta.js"></script>

<!-- Begin Page Content -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Publicacion</h1>

        <a href="views/publicaciones/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="bi bi-plus-lg"></i>  Crear  </a>
    </div>

    <style>

    /* Estilos para los botones */
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

<body>
  
  <table id="myTable" class="display">
    <thead>
      <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Fecha</th>
        <th>Contenido</th>
        <th>Imagen</th>
        <th>Acciones</th>        
      </tr>
    </thead>
    <tbody>
      <?php 
      $xd="SELECT publicacion.Id, publicacion.id_usua, publicacion.Fecha, publicacion.Contenido, publicacion.Imagen, usuario.Nombre FROM publicacion,usuario WHERE publicacion.id_usua=usuario.Id";
      $query=mysqli_query($conexion, $xd);
      while($ila=mysqli_fetch_array($query)){
      ?>
      <tr>
        <td><?=$ila['Id']; ?></td>
        <td><?=$ila['id_usua']; ?></td>
        <td><?=$ila['Fecha']; ?></td>
        <td><?=$ila['Contenido']; ?></td>
        <td><?=$ila['Imagen']; ?></td>
        <td>
          <center>
          <a href="views/publicaciones/edit.php?id=<?=$ila['Id']?>"><button class="btn btn-editar"> <i class="bi bi-pencil-square"></i></button></a>
          <a href="views/publicaciones/show.php?id=<?=$ila['Id']?>"><button class="btn btn-vista"><i class="bi bi-postcard-fill"></i></button></a>
          <a href="views/publicaciones/drop.php?id3=<?=$ila['Id']?>" onclick="return confirmar()"><button class="btn btn-eliminar"><i class="bi bi-trash3-fill"></i></button></a>
      </center>
        </td>
      </tr>
      <?php } ?>
      <!-- Puedes agregar más filas aquí -->
    </tbody>
  </table>

    
    
  

</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->
<?php
include("layout/footer.php");
?>

