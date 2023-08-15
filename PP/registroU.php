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
        <h1 class="h3 mb-0 text-gray-800">Universidad</h1>

        <a href="views/universidad/add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
      background-color:blueviolet;
    }

    .btn-vista {
      background-color:darkcyan;
    }

    .btn-eliminar {
      background-color:gold;
    }
  </style>
    
    <div class="container card" style="width: 110rem; height: 25rem;">
  <table id="myTable" class="display">
    <thead>
      <tr>
        <th>Id</th> 
        <th>Nombre</th>
        <th>Acciones</th>
        
      </tr>
    </thead>
  </div>
    <tbody>
      
      <?php
      $sql= "SELECT * from universidad";
      $mostar=mysqli_query($conexion,$sql);

      while($most=mysqli_fetch_array($mostar)){

      ?>      
    
      <tr>
        <td><?=$most['Id']?></td>
        <td><?=$most['Nombre']?></td>
        
        <td>
          <a href="views/universidad/edit.php?id=<?=$most['Id']?>"><button class="btn btn-editar"><i class="bi bi-pencil-square"></i></button></a>
          <a href="views/universidad/show.php?id=<?=$most['Id']?>"><button class="btn btn-vista"><i class="bi bi-postcard-fill"></i></button></a>
          <a href="views/universidad/delete.php?id=<?=$most['Id']?>" onclick="return confirmar()"><button class="btn btn-eliminar"><i class="bi bi-trash3-fill"></i></button></a>
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
