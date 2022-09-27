<?php
    require_once("controllers/bonificacion_controller.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Planilla</title>
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
            <center><h1>Planilla</h1></center>
            <div class="container-xl">
            <h6>Planilla General</h6>
                <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col"><center>Nombre</center></th>
                            <th scope="col"><center>Apellido</center></th>
                            <th scope="col"><center>Salario Base</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(bonificacion_controller::Mostrar() as $vendedor) { ?>
                            <?php echo bonificacion_util::SalarioBase($vendedor->getnombre(),
                                                                      $vendedor->getApellido(),)
                                                                      ?>
                        <?php } ?>
                    </tbody>
                </table>
            <h6>Vendedores con más de 30 ventas aplican a bonificación de 20%</h6>
                <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col"><center>Nombre</center></th>
                            <th scope="col"><center>Apellido</center></th>
                            <th scope="col"><center>Salario con Bonificación</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(bonificacion_controller::Mostrar() as $vendedor) { ?>
                            <?php if($vendedor->getVendido() >= 30) { ?>
                            <?php echo bonificacion_util::SalarioBonificacion($vendedor->getnombre(),
                                                                      $vendedor->getApellido(),)
                                                                      ?>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            <h6>Programa 2 del parcial 1 - DS7</h6>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>