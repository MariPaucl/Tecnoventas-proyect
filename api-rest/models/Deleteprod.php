<?php
class Productos extends Conectar {
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