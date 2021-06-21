<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JL FORM</title>
    <!-- Librerias CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!-- Libreria Ajax-Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="container" style="margin-top:20px;">
        <div class="card text-center">
            <div class="card-header">
                JL FORM
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
                <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-outline-primary" id="hide">HIDE</button>
                    <button type="button" class="btn btn-outline-danger" id="show">SHOW</button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>

<script>
    $("#hide").click(function() {
        $("#campo2").hide();
    });

    $("#show").click(function() {
        $("#campo2").show();
    });
</script>