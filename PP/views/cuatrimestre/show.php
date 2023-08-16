<?php
include("../../layout/menu.php");
include("../../layout/header.php");
include("../../database/conexion.php");
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
    <a href="../../registroCUA.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="bi bi-arrow-return-left"></i> Regresar  </a>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Cuatrimestres </h1>
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

</head>

<body>

    
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

  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>



    <tbody>
      
      <?php
      $sql= "SELECT * from universidad";
      $mostar=mysqli_query($conexion,$sql);

      while($most=mysqli_fetch_array($mostar)){

      ?>      
    
     
      <?php } ?>
      <!-- Puedes agregar más filas aquí -->
    </tbody>
  </table>
</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->

<?php
include("../../layout/footer.php");
?>
</body>
