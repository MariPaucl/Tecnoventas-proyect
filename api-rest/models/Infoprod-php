<?php
class Infoprod extends Conectar {
    public function update_infoproducto($codProd, $idCaract, $valor){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE infoproductos set valor = ? WHERE codProd = ? AND idCaract = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $valor);
        $sql->bindValue(2, $codProd);
        $sql->bindValue(3, $idCaract);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}
}
?>