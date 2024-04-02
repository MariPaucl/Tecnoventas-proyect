<?php

require_once("../../../config/conexion.php");
class Producto extends Database{
    public function get_productos($codigoCat){
        $conectar = parent::Conectar();
        $sql="SELECT imagen, nomProd, precio, estProd FROM productos WHERE codigoCat = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$codigoCat);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update_prod($codProd, $nomProd, $marca, $precio, $estProd, $stockProd, $imagen, $codigoCat){
        $conectar = parent::Conectar();
        $sql="UPDATE productos set nomProd = ?, marca = ?, precio = ?, estProd = ?, stockProd = ?, imagen = ?, codigoCat = ? WHERE codProd = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$nomProd);
        $sql->bindValue(2,$marca);
        $sql->bindValue(3,$precio);
        $sql->bindValue(4,$estProd);
        $sql->bindValue(5,$stockProd);
        $sql->bindValue(6,$imagen);
        $sql->bindValue(7,$codigoCat);
        $sql->bindValue(8,$codProd);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function reg_prod($idAdmin, $nomProd, $marca, $precio, $estProd, $stockProd, $imagen, $codigoCat){
        $conectar = parent::Conectar();
        $sql="INSERT INTO productos(idAdmin, nomProd, marca, precio, estProd, stockProd, imagen, codigoCat)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$idAdmin);
        $sql->bindValue(2,$nomProd);
        $sql->bindValue(3,$marca);
        $sql->bindValue(4,$precio);
        $sql->bindValue(5,$estProd);
        $sql->bindValue(6,$stockProd);
        $sql->bindValue(7,$imagen);
        $sql->bindValue(8,$codigoCat);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}