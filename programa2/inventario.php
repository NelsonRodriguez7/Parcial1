<?php
    require_once("controllers/bonificacion_controller.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Inventario</title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <?php echo bonificacion_util::myBarraLateral() ?>
            </div>
        </div>
        <div class="col py-3">
            <br>
            <center><h1>Inventario</h1></center>
            <br>
            <div class="container-xxl">
            <center><div class="row">
                <div class="col">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php $n=1;foreach(bonificacion_controller::Mostrar3() as $marca){?>
                            <?php if ($n==1){ ?> 
                            <div class="carousel-item <?php echo "active"?>">
                                <img src="<?php echo $marca->getImagen()?>" class="d-block w-100" alt="...">
                            </div>
                            <?php } ?>
                            <?php if ($n>1){ ?> 
                            <div class="carousel-item">
                                <img src="<?php echo $marca->getImagen()?>" class="d-block w-100" alt="...">
                            </div>
                            <?php } ?>
                            <?php $n++; } ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <br>
                    <br>
                    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col"><center>Marca</center></th>
                                <th scope="col"><center>Procedencia</center></th>
                                <th scope="col"><center>Cantidad Disponible</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach(bonificacion_controller::Mostrar3() as $marca) { ?>
                                <?php echo bonificacion_util::tabla2($marca->getMarca(),
                                                                $marca->getPais(),
                                                                $marca->getCantidad()) ?>
                            <?php } ?>    
                        </tbody>
                    </table>
                    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                        <tbody>
                            <?php $acu=0; foreach(bonificacion_controller::Mostrar3() as $marca) { ?>
                                <?php $acu+=$marca->getCantidad() ?>
                            <?php } ?>
                            <?php echo bonificacion_util::tabla("Total de vehiculos",$acu) ?> 
                        </tbody>
                    </table>
                </div>
            </div>
            </div></center>
            <br>
            <?php foreach(bonificacion_controller::Mostrar3() as $marca) { ?>
                            <?php $numero = $marca->getCantidad() ?>
                            <?php if($numero<=10){ ?>
                            <?php echo bonificacion_util::myAlert($marca->getMarca(),$marca->getCantidad()) ?>
                            <?php } ?>
            <?php } ?>
        </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>