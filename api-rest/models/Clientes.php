<?php
class Clientes extends Conectar{
        public function get_cliente(){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM clientes";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
}
?>