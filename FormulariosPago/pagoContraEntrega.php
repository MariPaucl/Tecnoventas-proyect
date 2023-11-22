<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePago.css">
    <title>Pedido Contra Entrega</title>
</head>
<body>
    <div class="container">
        <div class="titulo">
            <div class="title">Pedido Contra Entrega</div>
            <img src="https://cdn-icons-png.flaticon.com/512/4784/4784343.png">
        </div>
        <form action="" method="post">
            <div class="info-cliente">
                <div class="input-box">
                    <span class="info">*Nombre completo</span>
                    <input type="text" name="nombre" id="nombre" placeholder="Ej: Carlos Mercedes" required>
                </div>
                <div class="input-box">
                    <span class="info">*Correo</span>
                    <input type="email" name="correo" id="correo" placeholder="Ej: carlosmerc.77@gmail.com" required>
                </div>
                <div class="total-pedido">
                <div class="total-info">
                    <span class="total-title">Total a pagar:</span>
                    <input type="text" name="total" id="total" value="" readonly>
                </div>
                </div>
                <div class="input-box">
                    <span class="info">*Tipo de dirección</span>
                    <select name="tipoDir" id="tipoDir">
                        <option value="1">Calle</option>
                        <option value="2">Carrera</option>
                        <option value="3">Avenida</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="info" id="spanText">*Calle</span>
                    <input type="text" name="tipoDirNum" id="tipoDirNum" placeholder="Ej: 87B" required>
                </div>
                <div class="input-box">
                    <span class="info">*Numero</span>
                    <input type="text" name="numeroDir" id="numeroDir" placeholder="Ej: 9C" required>
                </div>
                <p>-</p>
                <div class="input-box">
                    <input type="text" name="numeroDir2" id="numeroDir2" placeholder="Ej: 15" required>
                </div>
                <div class="input-box">
                    <span class="info">*Barrio</span>
                    <input type="text" name="barrio" id="barrio" placeholder="Ej: San Mateo" required>
                </div>
                <div class="input-box">
                    <span class="info">Piso/Apartamento/Torre/Edificio</span>
                    <input type="text" name="extra" id="extra" placeholder="Ej: Torre 12 Apto 252">
                </div>
                <div class="direccion">
                <div class="direccion-info">
                    <label for="direccion" class="dir-title">Dirección</label>
                    <input type="textarea" name="direccion" id="direccion" value="" readonly>
                </div>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="guardar" value="Continuar Pago">
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    <?php
    include("registrarPedido.php");
    ?>
</body>
</html>