<?php
    require_once("models/bonificacion_model.php");
    require_once("models/sucursal_model.php");
    require_once("models/marcas_model.php");
    require_once("utils/bonificacion_util.php");
    class bonificacion_controller{
        public static function  Mostrar(){
            $vendedor [] = new bonificacion_model(1,"Mario","Morales",25,56);
            $vendedor [] = new bonificacion_model(2,"Juan","Perez",22,34);
            $vendedor [] = new bonificacion_model(3,"Ana","Lopez",28,20);
            $vendedor [] = new bonificacion_model(4,"David","Silva",19,12);
            $vendedor [] = new bonificacion_model(5,"Luis","Garcia",34,45);
            $vendedor [] = new bonificacion_model(6,"Maria","Martinez",20,47);
            return $vendedor;
        }

        public static function Mostrar2(){
            $sucursal [] = new sucursal_model(1,"La Chorrera");
            $sucursal [] = new sucursal_model(2,"Vista Alegre");
            $sucursal [] = new sucursal_model(3,"Penonome");
            $sucursal [] = new sucursal_model(4,"Via Transismica");
            return $sucursal;
        }

        public static function Mostrar3(){
            $marca [] = new marcas_model(1,"Toyota","Japon","imagenes/toyota.png",24,43);
            $marca [] = new marcas_model(2,"Suzuki","Japon","imagenes/suzuki.png",13,23);
            $marca [] = new marcas_model(3,"Honda","Japon","imagenes/honda.jpg",19,20);
            $marca [] = new marcas_model(4,"Nissan","Japon","imagenes/nissan.png",21,29);
            $marca [] = new marcas_model(5,"Isuzu","Japon","imagenes/isuzu.png",4,13);
            $marca [] = new marcas_model(6,"BMW","Alemania","imagenes/bmw.png",14,25);
            $marca [] = new marcas_model(8,"Audi","Alemania","imagenes/audi.jpg",9,30);
            return $marca;
        }
    }
?>  