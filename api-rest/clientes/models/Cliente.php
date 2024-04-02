<?php

require_once("../../../config/conexion.php");
class Cliente extends Database{
    public function get_cliente($idCliente){
        $conectar = parent::Conectar();
        $sql="SELECT numId, tipoId, nomCliente, apeCliente, fechaNac, telefono, correo FROM clientes WHERE idCliente = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$idCliente);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update_cliente($idCliente, $nomCliente, $apeCliente, $fechaNac, $telefono, $correo){
        $conectar = parent::Conectar();
        $sql="UPDATE clientes set nomCliente = ?, apeCliente = ?, fechaNac = ?, telefono = ?, correo = ? WHERE idCliente = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$nomCliente);
        $sql->bindValue(2,$apeCliente);
        $sql->bindValue(3,$fechaNac);
        $sql->bindValue(4,$telefono);
        $sql->bindValue(5,$correo);
        $sql->bindValue(6,$idCliente);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function delete_cliente($correo){
        $conectar = parent::Conectar();
        $sql="DELETE FROM clientes WHERE correo = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$correo);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}