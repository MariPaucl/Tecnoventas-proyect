<?php
class Administrator extends Conectar {
    public function get_administrador_x_id($idAdmin) {
        try {
            $conectar = parent::Conexion();
            $sql = "SELECT * FROM administradores WHERE idAdmin = ?";
            $stmt = $conectar->prepare($sql);
            $stmt->execute([$idAdmin]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return array();
        }
    }
}
?>