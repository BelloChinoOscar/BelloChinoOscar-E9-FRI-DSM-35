<!-- Incluimos un codigo php  -->
<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">VISTAS PUBLICACIONES</h1>
        <a href="http://localhost/BelloChinoOscar-E9-FRI-DSM-35/PP/resgistroE.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Agregar Publicacion</a>
    </div>



    <!-- Content Row -->
    <div class="row col">
    <div class="card shadow">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Publicaciones</h6>
                        </div>
    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Id_usuario</th>
                                            <th>Fecha</th>
                                            <th>Contenido</th>
                                            <th>Imagen</th>
                                            <th>Album</th>
                                            <th>Id_comentario</th>
                                            <th>Likes</th>
                                            <th>Id_materia</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                   
                                  
                                </table>
                            </div>
                        </div>

    
    </div>
</div>

</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->
<?php
include __DIR__ . '/../../layout/footer.php';
?>
