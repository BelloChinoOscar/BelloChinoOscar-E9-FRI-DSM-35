<?php
include("layout/menu.php");
include("layout/header.php");
include("database/conexion.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Comentarios</h1>

        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="bi bi-plus-lg"></i>  Añadir  </a>
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
      background-color: #008CBA;
    }

    .btn-vista {
      background-color: #555555;
    }

    .btn-eliminar {
      background-color: #f44336;
    }
  </style>

<body>
  
  <table id="myTable" class="display">
    <thead>
      <tr>
        <th>Id</th>
        <th>Usuario</th>
        <th>Contenido</th>
        <th>Publicacion</th>
        <th>Acciones</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $xd="SELECT comentario.Id, usuario.id_usuario, comentario.ContenidoFecha, comentario.Publicacion FROM comentario, usuario WHERE comentario.Id=usuario.Id";
      $que=mysqli_query($cone, $xd);
      while($ila=mysqli_fetch_array($que)){
      ?>
      <tr>
        <td><?php echo $ila['Id']; ?></td>
        <td><?php echo $ila['id_usuario']; ?></td>
        <td><?php echo $ila['ContenidoFecha']; ?></td>
        <td><?php echo $ila['Publicacion']; ?></td>
        <td>
          <center>
          <button class="btn btn-editar"><i class="bi bi-pencil-fill"></i></button>
          <button class="btn btn-vista"><i class="bi bi-binoculars-fill"></i></button>
          <button class="btn btn-eliminar"><i class="bi bi-trash3-fill"></i></button>
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

