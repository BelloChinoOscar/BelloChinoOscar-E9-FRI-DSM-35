<!-- Incluimos un codigo php  -->
<?php
include __DIR__ . '/../../layout/menu.php';
include __DIR__ . '/../../layout/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">VISTAS USUARIOS</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Agregar Usuario</a>
    </div>



    <!-- Content Row -->
    <div class="row col">
    <div class="card shadow">
                        <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
                        </div>
    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Contraseña</th>
                                            <th>Correo</th>
                                            <th>Usuario</th>
                                            <th>Id_carrera</th>
                                            <th>Id_cuatrimestre</th>
                                            <th>Id_estado</th>
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
