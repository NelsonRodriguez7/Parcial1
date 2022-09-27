<?php
    class marcas_model{
        private $id3;
        private $marca;
        private $pais;
        private $imagen;
        private $cantidad;
        private $vendido;

        public function __construct($id3,$marca,$pais,$imagen,$cantidad,$vendido){
            $this->id3 = $id3;
            $this->marca = $marca;
            $this->pais = $pais;
            $this->imagen = $imagen;
            $this->cantidad = $cantidad;
            $this->vendido = $vendido;
        }

        public function setId3($id3){
            $this->id3 = $id3;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setPais($pais){
            $this->pais = $pais;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }

        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }

        public function setVendido($vendido){
            $this->vendido = $vendido;
        }

        public function getId3(){
            return $this->id3;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getPais(){
            return $this->pais;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function getCantidad(){
            return $this->cantidad;
        }

        public function getVendido(){
            return $this->vendido;
        }
    }
?>