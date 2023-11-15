<?php
class Productos extends Conectar{
        public function get_producto(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM productos";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    public function insert_producto($idAdmin,$nomProd,$marca,$precio,$estProd,$imagen){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="INSERT INTO productos(idAdmin,nomProd,marca,precio,estProd,imagen) VALUES (?, ?, ?, ?, ?, ?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $idAdmin);
        $sql->bindValue(2, $nomProd);
        $sql->bindValue(3, $marca);
        $sql->bindValue(4, $precio);
        $sql->bindValue(5, $estProd);
        $sql->bindValue(6, $imagen);
        $sql->execute();
    }
    public function Update_productos($codProd,$nomProd,$marca,$precio,$estProd,$imagen){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE productos set
        nomProd = ?,
        marca = ?,
        precio = ?,
        estProd = ?,
        imagen = ?
        WHERE
        codProd = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $nomProd);
        $sql->bindValue(2, $marca);
        $sql->bindValue(3, $precio);
        $sql->bindValue(4, $estProd);
        $sql->bindValue(5, $imagen);
        $sql->bindValue(6, $codProd);
        $sql->execute();
}
public function eliminar_producto($codProd) {
    $conectar = parent::Conexion();
    $sql = "DELETE FROM productos WHERE codProd = :id";
    $sql = $conectar->prepare($sql);
    $sql->bindParam(':id', $codProd, PDO::PARAM_INT);

    if ($sql->execute()) {
        return true; // Éxito al eliminar
    } else {
        return false; // Error al eliminar
    }
}
}
?>