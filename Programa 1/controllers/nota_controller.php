<?php
    require_once("models/nota_model.php");
    require_once("utils/nota_util.php");
    class nota_controller{
        public static function Mostrar(){
            $atrapar = rand(0,100);
            $estudiante[] = new nota_model(1,"Jorge","Perez",$atrapar,nota_util::Calcular($atrapar));

            $atrapar2 = rand(0,100);
            $estudiante[] = new nota_model(2,"Victoria","Aguilar",$atrapar2,nota_util::Calcular($atrapar2));

            $atrapar3 = rand(0,100);
            $estudiante[] = new nota_model(3,"Mario","Morales",$atrapar3,nota_util::Calcular($atrapar3));

            $atrapar4 = rand(0,100);
            $estudiante[] = new nota_model(4,"Luis","Martinez",$atrapar4,nota_util::Calcular($atrapar4));

            $atrapar5 = rand(0,100);
            $estudiante[] = new nota_model(5,"Maria","Castillo",$atrapar5,nota_util::Calcular($atrapar5));

            $atrapar6 = rand(0,100);
            $estudiante[] = new nota_model(6,"Jose","Marquez",$atrapar6,nota_util::Calcular($atrapar6));

            $atrapar7 = rand(0,100);
            $estudiante[] = new nota_model(7,"Daniel","Carbajo",$atrapar7,nota_util::Calcular($atrapar7));

            $atrapar8 = rand(0,100);
            $estudiante[] = new nota_model(8,"Karol","Castillero",$atrapar8,nota_util::Calcular($atrapar8));

            $atrapar9 = rand(0,100);
            $estudiante[] = new nota_model(9,"Ronaldo","Guevara",$atrapar9,nota_util::Calcular($atrapar9));

            $atrapar10 = rand(0,100);
            $estudiante[] = new nota_model(10,"Maria","Castillo",$atrapar10,nota_util::Calcular($atrapar10));

            return $estudiante;
        }
    }
?>