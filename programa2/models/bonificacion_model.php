<?php
    class bonificacion_model{
        private $id;
        private $nombre;
        private $apellido;
        private $edad;
        private $vendido;

        public function __construct($id,$nombre,$apellido,$edad,$vendido){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
            $this->vendido = $vendido;
        }

        public function setImg($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        public function setVendido($vendido){
            $this->vendido = $vendido;
        }

        public function getId(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function getVendido(){
            return $this->vendido;
        }

    }

?>