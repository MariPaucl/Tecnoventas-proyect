<?php
class Detalleped extends Conectar {
    public function insert_detalleped($codPedido,$codProd,$cantidadProd){

        $conectar= parent::conexion();
        parent::set_names();
        $sql="INSERT INTO detallepedidos(codPedido,codProd,cantidadProd) VALUES (?, ?, ?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $codPedido);
        $sql->bindValue(2, $codProd);
        $sql->bindValue(3, $cantidadProd);
        $sql->execute();
    }
    /*public function restar_cantidad($codProd,$cantidadProd){
        $cantidad = $cantidadProd;
        $conectar = parent::conexion();
        $sql = "UPDATE productos SET stockProd = stockProd - $cantidad WHERE codProd = ?";
        $stmtCantidad = $conectar->prepare($stmtCantidad);
        $stmtCantidad->bindValue(1, $codProd);
        $stmtCantidad->execute();*/
public function validarStock($codProd, $cantidadProd) {
    $conectar = parent::conexion();
    $sql = "SELECT stockProd FROM productos WHERE codProd = ?";
    $stmt = $conectar->prepare($sql);
    $stmt->execute([$codProd]);
    $stock = $stmt->fetchColumn();

    if ($stock >= $cantidadProd) {
        return ["valido" => true];
    } else {
        return [
            "valido" => false,
            "mensaje" => "Error: La cantidad a comprar es mayor al stock del producto"
        ];
    }
}
}
?>