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
    public function update_rest_produc($codProd, $cantidadProd){
        $conectar=parent::conexion();
        parent::set_names();
        $sql= "UPDATE productos p
        SET p.stockProd = p.stockProd - $cantidadProd where codProd=?
        ";
        $sql=$conectar ->prepare($sql);
        $sql->bindValue(1,  $codProd);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
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