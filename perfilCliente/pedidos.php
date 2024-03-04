<?php

session_start();

if(isset($_SESSION['sessCustomerID'])) {
    $idCliente = $_SESSION['sessCustomerID'];
    require '../config/config.php';
    require '../config/conexion.php';
        $db = new Database();
        $con = $db->conectar();

        $sql = $con->prepare("SELECT * FROM pedidos INNER JOIN clientes ON pedidos.idCliente = clientes.idCliente WHERE pedidos.idCliente = $idCliente");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "<script>alert('No has iniciado sesion')</script>";
    header('Location: ../index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pedidos</title>
    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">
    <script src="https://kit.fontawesome.com/d3ed00feee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <link rel="stylesheet" href="stylePerfil.css">
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <a href="../inicio.html" title="Volver"><i class="fa-solid fa-caret-left"></i></a><h2>TECNOVENTAS</h2>
        <ul>
            <li><a href="perfil.php"><i class="fa-solid fa-user"></i>Mis Datos</a></li>
            <li><a href=""><i class="fa-solid fa-bag-shopping"></i>Mis Pedidos</a></li>
            <li><a href="editarDatos.php"><i class="fa-solid fa-user-pen"></i>Editar mis datos</a></li>
            <li><a href="cambiarPass.php"><i class="fa-solid fa-key"></i>Cambiar contraseña</a></li>
            <li><a href="borrarCuenta.php"><i class="fa-solid fa-trash"></i>Borrar cuenta</a></li>
            <li><a href="../cerrarSesion.php"><i class="fa-solid fa-delete-left"></i>Cerrar Sesion</a></li>
        </ul>
    </div>
</div>
<div class="main_content">
    <div class="header">Mis Pedidos</div>
    <div id="profile-container">
    <table id="table" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Direccion</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($resultado as $row) { ?>
                <tr>
                    <td><?php echo $row['codPedido']?></td>
                    <td><?php echo $row['fechaPedido']?></td>
                    <td><?php echo $row['horaPedido']?></td>
                    <td><?php echo $row['dirPedido']?></td>
                    <td><?php echo $row['totalPedido'] ?></td>
                    <td class="<?php
                $estadoPedido = $row['estadoPedido'];
                if ($estadoPedido === "Pagado") {
                    echo 'pagado';
                } elseif ($estadoPedido === "Por enviar" || $estadoPedido === "En camino") {
                    echo 'porEnviar';
                } elseif ($estadoPedido === "Enviado") {
                    echo 'enviado';
                }
            ?>"><?php echo $estadoPedido; ?></td>
                    <td>
                        <a class="btn btn-primary" title="Ver Más" href="detallePed.php?codPedido=<?php echo $row['codPedido'];?>&token=<?php echo hash_hmac('sha1', $row['codPedido'], KEY_TOKEN);?>">
                        <i class="fa-solid fa-eye" style="color:white;"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
    <script>
$(document).ready( function () {
    $('#table').DataTable({
        language:{
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del ? al ? de un total de e registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            searchPlaceholder:"Buscar",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Ultimo",
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
            null
        ],
    });
});
</script>
<style>
    #profile-container {
        max-width: 800px;
        padding: 20px;
    }
    .btn-primary {
        background-color: rgb(46, 1, 82) !important;
        border: none;
    }

    /*estado colores*/
.pagado{
    color: purple !important;
}
.porEnviar{
    color: blue !important;
}
.enviado{
    color: green !important;
}
</style>
</body>
</html>