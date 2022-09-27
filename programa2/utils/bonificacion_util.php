<?php
    class bonificacion_util{
        public static function tabla($nombre,$edad){
            return '
                    <tr>
                        <td><center>'.$nombre.'</center></td>
                        <td><center>'.$edad.'</center></td>
                    </tr>
             ';
        }

        public static function tabla2($marca,$pais,$cantidad){
            return '
                    <tr>
                        <td><center>'.$marca.'</center></td>
                        <td><center>'.$pais.'</center></td>
                        <td><center>'.$cantidad.'</center></td>
                    </tr>
             ';
        }

        public static function myAlert($marca,$cantidad){
            return '
            <div class="alert alert-danger" role="alert">
                ¡ Alerta de poco inventario de autos marca '.$marca.' cantidad '.$cantidad.' !
            </div> ';
        }

        public static function MyProgres($marca,$vendido){
            return '
                    <tr>
                        <td>'.$marca.'</td>
                        <td>
                        <div class="progress">
                        <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: '.$vendido.'%;" aria-valuenow="'.$vendido.'" aria-valuemin="0" aria-valuemax="100">'.$vendido.'</div>
                        </div>
                        </td>
                    </tr>
             ';
        }

        public static function myCard($nombre,$apellido,$cantidad){
            return '
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">'.$nombre.' '.$apellido.' </div>
                        <div class="card-body text-primary">
                            <img src="imagenes/premio.png" class="img-fluid" alt="...">
                            <h5 class="card-title">Cantidad de ventas</h5>
                            <h6>'.$cantidad.'</h6>
                        </div>
                    </div>  
                       
            ';
                
        }

        public static function myBarraLateral(){
            return '
                <img src="imagenes/logocar.png" class="img-fluid" alt="...">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">SellCar Panama</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="inventario.php" class="nav-link align-middle px-0 text-white ">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Inventario</span> 
                        </a>
                    </li>
                    <li>
                        <a href="vendido.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Vendidos</span></a>
                    </li>
                    <li>
                        <a href="planilla.php" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Planilla</span></a>
                        
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Nelson Rodriguez</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">Agregar Vendedor</a></li>
                        <li><a class="dropdown-item" href="#">Ajustes</a></li>
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Salir</a></li>
                    </ul>
                </div>
        
            ';
        }

        public static function SalarioBase($nombre,$apellido){
            return '
                    <tr>
                        <td><center>'.$nombre.'</center></td>
                        <td><center>'.$apellido.'</center></td>
                        <td><center>$1,120.00</center></td>
                    </tr>
             ';
        }

        public static function SalarioBonificacion($nombre,$apellido){
            $boni = (1200*0.20)+1200;
            return '
                    <tr>
                        <td><center>'.$nombre.'</center></td>
                        <td><center>'.$apellido.'</center></td>
                        <td><center>$'.$boni.'.00</center></td>
                    </tr>
             ';
        }
    }

?>