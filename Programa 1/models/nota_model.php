<?php
    class nota_model{
        private $id;
        private $nombre;
        private $apellido;
        private $calificacion;
        private $nota;

        public function __construct($id,$nombre,$apellido,$calificacion,$nota){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->calificacion = $calificacion;
            $this->nota = $nota;
        }

        public function setId($id){
            $this->id= $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setCalificacion($calificacion){
            $this->calificacion = $calificacion;
        }

        public function setNota($nota){
            $this->nota = $nota;
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

        public function getCalificacion(){
            return $this->calificacion;
        }

        public function getNota(){
            return $this->nota;
        }

    }
?>