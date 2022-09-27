<?php
    require_once("controllers/bonificacion_controller.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Programa 2</title>
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
            <center><h1>Autos Vendidos</h1></center>
            <div class="container-xl">
                <br>
                <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Marca</th>
                            <th scope="col">Cantidad Vendida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(bonificacion_controller::Mostrar3() as $marca ){ ?>
                            <?php echo bonificacion_util::MyProgres($marca->getMarca(),$marca->getvendido()) ?>
                        <?php } ?>
                    </tbody>
                </table>
                <h6>Vendedores Destacados</h6>
                
                <center><div class="row">
                    <?php foreach(bonificacion_controller::Mostrar() As $vendedor){ ?>
                        <?php if($vendedor->getVendido()>=40) {?>
                        <div class="col">
                            <?php echo bonificacion_util::myCard($vendedor->getNombre(),
                                                                $vendedor->getApellido(),
                                                                $vendedor->getVendido())?>
                        </div>
                        <?php } ?>
                    <?php } ?>
                </div></center>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>