<?php
$sumando = $_POST['sumando'];
$sumador = $_POST['sumador'];
$resultado = $sumando + $sumador;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Uso de Formularios PHP GET/POST</title>
</head>
<body>
    <div class="container">
        <form class="horizontal-form" action="index.php" method="POST">
            <div class="form-group">
                <label for="sumando" class="form-control">Primer Numero</label>
                <input type="number" name="sumando" id="sumando" class="form-control">
            </div>
            <div class="form-group">
                <label for="sumador" class="form-control">Segundo Numero</label>
                <input type="number" name="sumador" id="sumador" class="form-control">
            </div>
            <button class="btn btn-success">
            <i class="fa fa-plus"></i>
            Sumamelo!
            </button>
        </form>
        <br>
        <div class="alert alert-info">
        El resultado de su operación es: <b><?php echo $resultado; ?></b>
        </div>
    </div>
</body>
</html>