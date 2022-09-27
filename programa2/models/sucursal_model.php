<?php
    class sucursal_model{
        
            private $id2;
            private $direccion;
    
            public function __construct($id2,$direccion){
                $this->id2 = $id2;
                $this->direccion = $direccion;
            }
    
            public function setId2($id2){
                $this->id2 = $id2;
            }
    
            public function setDireccion($direccion){
                $this->direccion = $direccion;
            }
    
            public function getId2(){
                return $this->id2;
            }
    
            public function getDireccion(){
                return $this->direccion;
            }
    
        }
    
?>