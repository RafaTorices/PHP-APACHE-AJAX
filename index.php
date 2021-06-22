<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMS</title>
    <!-- Librerias CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <!-- Libreria CDN Ajax-Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Libreria CDN Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>
    <!-- Div con el contenedor principal     -->
    <div class="container" style="margin-top:20px;">
        <!-- Barra de menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" style="cursor: pointer" id="forms"><i class="bi bi-window-sidebar"></i>
                                FORMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="cursor: pointer" id="resultados"><i class="bi bi-ui-checks"></i>
                                RESULTADOS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Div para mostrar los mensajes ajax -->
        <div id="mensaje"></div>

        <!-- Form -->
        <div class="card text-center" id="card_forms">
            <div class="card-header">
                FORMS
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="campo1" class="form-label">Campo1</label>
                    <input type="text" class="form-control" id="campo1" placeholder="Campo1">
                </div>
                <div class="mb-3">
                    <label for="campo2" class="form-label">Campo2</label>
                    <input type="text" class="form-control" id="campo2" placeholder="Campo2">
                </div>
                <div class="mb-3">
                    <label for="campo3" class="form-label">Campo3</label>
                    <input type="text" class="form-control" id="campo3" placeholder="Campo3">
                </div>
            </div>
            <div class="card-footer text-muted">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#confirGuardar">GUARDAR</button>
            </div>
        </div>

        <!-- Resultados -->
        <div class="card" id="card_resultados">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">#</th>
                            <th scope="col">Campo1</th>
                            <th scope="col">Campo2</th>
                            <th scope="col">Campo3</th>
                            <th scope="col">Campo4</th>
                            <th scope="col">Campo5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("php/resultados.php");
                            foreach($mysql_select as $resultado){
                                echo '
                                <tr>
                                <td><i class="bi bi-trash" style="color:red; cursor:pointer;" data-bs-toggle="modal"
                                        data-bs-target="#confirBorrar"></td>
                                <th scope="row">'.$resultado["id"].'</th>
                                <td>'.$resultado["campo1"].'</td>
                                <td>'.$resultado["campo2"].'</td>
                                <td>'.$resultado["campo3"].'</td>
                                <td>'.$resultado["campo4"].'</td>
                                <td>'.$resultado["campo5"].'</td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal para la confirmacion de guardar -->
    <div class="modal fade" id="confirGuardar" tabindex="-1" aria-labelledby="confirGuardarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirGuardarLabel">Guardar registro?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="guardarForm()"
                        data-bs-dismiss="modal">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para la confirmacion de borrar -->
    <div class="modal fade" id="confirBorrar" tabindex="-1" aria-labelledby="confirBorrarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirBorrarLabel">Borrar registro?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="borrarRegistro(<?php $resultado['id'];?>)"
                        data-bs-dismiss="modal">Borrar</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<!-- Fichero JavaScript con el codigo javascript/ajax -->
<script src="js/scripts.js" type="text/javascript"></script>