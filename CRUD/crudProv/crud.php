<?php
include("../crudProd/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Proveedores</title>
    <link rel="website icon" type="png" href="../../imagenes/Tecnoventas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
        <ul class="navbar-nav">
        <a class="navbar-brand">PROVEEDORES</a>
        <li class="nav-item">
        <a class="nav-link active" href="../crudProd/crud.php">Productos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../crudAdmin/crud.php">Administradores</a>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled">Proveedores</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../crudClien/crud.php">Clientes</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../crudPed/crud.php">Pedidos</a>
        </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="../../Administrador.php">Inicio</a>
            </li>
        </ul>
        </div>
        </nav>
    <div class="container">
    <div class="container p-4">
    <div class="col-sm-12">
    <div class="row">
    <div class="table-responsive">
    <div class="d-flex justify-content-between mb-3">
            <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-dark" role="button" href="regProv.php">Registrar Proveedor</a>
            </div>
            </div>
        <table id="table" class="table table-bordered">
            <thead>
                <tr>
                    <th>Prov ID</th>
                    <th>NIT</th>
                    <th>Nombre Proveedor</th>
                    <th>Correo</th>
                    <th>Nombre Contacto</th>
                    <th>Apellido Contacto</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Pagina Web</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM proveedores";
                $result_prod = mysqli_query($conex, $query);

                while($row = mysqli_fetch_array($result_prod)){ ?>
                <tr>
                    <td><?php echo $row['idProv']?></td>
                    <td><?php echo $row['NIT']?></td>
                    <td><?php echo $row['nomProv']?></td>
                    <td><?php echo $row['correoProv']?></td>
                    <td><?php echo $row['nomCont']?></td>
                    <td><?php echo $row['apeCont']?></td>
                    <td><?php echo $row['direccion']?></td>
                    <td><?php echo $row['telProv']?></td>
                    <td><?php echo $row['paginaWeb']?></td>
                    <td>
                        <a href="edit.php?idProv=<?php echo $row['idProv']?>" class="btn btn-success">
                        <i class="fa-solid fa-pen-to-square" style="color:black;"></i>
                        </a>
                        <a href="delete.php?idProv=<?php echo $row['idProv']?>" class="btn btn-danger">
                        <i class="fa-solid fa-trash" style="color:black;"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
<script>
    $(document).ready( function () {
    $('#table').DataTable({
        language:{
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del e al e de un total de e registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            searchPlaceholder:"Buscar",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Oltimo",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
            },
        "sProcessing":"Procesando...",
        },
        "columns": [
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
        ],
        responsive: "true",
        dom: 'Bfrtilp',
        buttons:[
            {
            extend: 'excelHtml5',
            text: '<i class="fas fa-file-excel"></i>',
            titleAttr: 'Exportar a Excel',
            className: 'btn btn-success'
            },
            {
            extend: 'pdfHtml5',
            text: '<i class="fas fa-file-pdf"></i>',
            titleAttr: 'Exportar a PDF',
            className: 'btn btn-danger'
            },
            {
            extend: 'print',
            text: '<i class="fas fa-print"></i>',
            titleAttr: 'Imprimir',
            className: 'btn btn-info'
            },
        ]
    });
});
</script>
<style>
.btn-group {
        margin-bottom: 7px;
    }
    a{
        margin: 5px;
    }
</style>
</body>
</html>