<?php
    require_once("controllers/nota_controller.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Parcial 1</title>
</head>
<body>
    <div class="container-sm">
        <br>
        <h1>Listado de Estudiantes </h1>
        <h3>Pertenecientes a la Materia de Quimica</h3>
        <h6>Desarrollado por: Nelson Rodriguez - Parcial 1</h6>
        <div class="row">
            <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Calificación</th>
                        <th scope="col">Nota</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(nota_controller::Mostrar() as $estudiante){?>
                    <tr class = "text-<?php echo nota_util::Colores($estudiante->getCalificacion()) ?>">
                        <th scope="row"><?php echo $estudiante->getId() ?></th>
                        <td><?php echo $estudiante->getNombre() ?></td>
                        <td><?php echo $estudiante->getApellido() ?></td>
                        <td><?php echo $estudiante->getCalificacion() ?></td>
                        <td><?php echo $estudiante->getNota() ?></td>
                        <td><?php echo nota_util::MyModal($estudiante->getId(),
                                                          "Ver Estudiante",
                                                          nota_util::Colores($estudiante->getCalificacion()),
                                                          "Datos Del Estudiante",
                                                          $estudiante->getNombre(),
                                                          $estudiante->getApellido(),
                                                          $estudiante->getCalificacion(),
                                                          $estudiante->getNota(),
                                                          "Ok") ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>