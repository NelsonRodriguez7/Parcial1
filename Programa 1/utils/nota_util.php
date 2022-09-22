<?php
    class nota_util{
        public static function Calcular($calificacion){
            $enviar="";
            if($calificacion>=0 AND $calificacion<=60){
                $enviar = "F";
            }
            if($calificacion>=61 AND $calificacion<=70){
                $enviar = "D";
            }
            if($calificacion>=71 AND $calificacion<=80){
                $enviar = "C";
            }
            if($calificacion>=81 AND $calificacion<=90){
                $enviar = "B";
            }
            if($calificacion>=91){
                $enviar = "A";
            }
            return $enviar;
        }

        public static function Colores($calificacion){
            $colores = "";
            if($calificacion>=0 AND $calificacion<=60){
                $colores = "danger";
            }
            if($calificacion>=61 AND $calificacion<=70){
                $colores = "warning";
            }
            if($calificacion>=71 AND $calificacion<=80){
                $colores = "secondary";
            }
            if($calificacion>=81 AND $calificacion<=90){
                $colores = "info";
            }
            if($calificacion>=91){
                $colores = "success";
            }          
            return $colores;
        }

        public static function MyModal($M_id,$M_boton,$M_color,$M_titulo,$M_nombre,$M_apellido,$M_calificacion,$M_nota,$M_ok){
            return '
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-'.$M_color.'" data-bs-toggle="modal" data-bs-target="#exampleModal'.$M_id.'">
                '.$M_boton.'
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal'.$M_id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog        ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">'.$M_titulo.'</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <table class="table table-'.$M_color.' table-striped table-hover table-bordered table-sm table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Calificacion</th>
                                <th scope="col">Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">'.$M_id.'</th>
                                <td>'.$M_nombre.'</td>
                                <td>'.$M_apellido.'</td>
                                <td>'.$M_calificacion.'</td>
                                <td>'.$M_nota.'</td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">'.$M_ok.'</button>
                        </div>
                    </div>
                </div>
            </div> ';

        }
    }
?>