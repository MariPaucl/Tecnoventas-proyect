<?php
class Productos extends Conectar {
    public function ProductoEstado($codProd) {
        try {
            $conectar = parent::Conexion();
            // Inicia la transacción
            $conectar->beginTransaction();
            // Actualiza el estado del producto solo si stockProd es igual a 0
            $sql_update_producto = "UPDATE productos
                SET estprod = CASE
                    WHEN stockProd = 0 THEN 'Agotado'
                    ELSE estprod
                END
                WHERE codProd = :codProd AND stockProd = 0";
            // Prepara la consulta
            $stmt = $conectar->prepare($sql_update_producto);
            // Vincula los parámetros
            $stmt->bindValue(':codProd', $codProd, PDO::PARAM_INT);
            // Ejecuta la consulta
            $stmt->execute();
            // Verifica si se actualizó alguna fila (si stockProd era igual a 0)
            $rowCount = $stmt->rowCount();
            if ($rowCount === 0) {
                echo "";
                $conectar->rollBack();
                return false;
            }
            // Confirma la transacción
            $conectar->commit();
            // Devuelve true si la actualización fue exitosa
            return true;
        } catch (PDOException $e) {
            // Manejar la excepción si algo sale mal
            $conectar->rollBack();
            echo "Error al actualizar el producto. Detalles: " . $e->getMessage();
            // Devuelve false en caso de error
            return false;
        }
    }
}
?>