<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Calculadora BootStrap - Gabriel Siriani</title>
</head>

<?php
$n1 = 0;
$n2 = 0;
$result = 0;
$calc = 'somar';

if (isset($_POST['Somar'])) {
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];
    $calc = $_POST['Somar'];

    $result = $n1 + $n2;
}
if (isset($_POST['Subtrair'])) {
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];
    $calc = $_POST['Subtrair'];

    $result = $n1 - $n2;
}
if (isset($_POST['Multiplicar'])) {
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];
    $calc = $_POST['Multiplicar'];

    $result = $n1 * $n2;
}
if (isset($_POST['Dividir'])) {
    $n1 = (float) $_POST['n1'];
    $n2 = (float) $_POST['n2'];
    $calc = $_POST['Dividir'];

    $result = $n1 / $n2;
}
?>

<body class="bg-dark">

    <div class="container">
        <form action="" method="post">
            <div class="card position-absolute top-50 start-50 translate-middle bg-danger">
                <div class="card-body mb-2">
                    <div class="card-header text-white">Calculadora</div>
                    <h5 class="card-title text-white">Primeiro Numero</h5>
                    <input class="rounded-2 border" type="number" name="n1" value=<?= $n1 ?> required>
                    <h5 class="card-title text-white">Segundo Numero</h5>
                    <input class="rounded-2 border" type="number" name="n2" value=<?= $n2 ?> required>

                    <div class="container ">
                        <div class="row">
                            <input type="submit" class="col btn btn-outline-light m-2" name="Somar" value="+">
                            <input type="submit" class="col btn btn-outline-light m-2" name="Subtrair" value="-">
                        </div>
                        <div class="row">
                            <input type="submit" class="col btn btn-outline-light m-2" name="Multiplicar" value="*">
                            <input type="submit" class="col btn btn-outline-light m-2" name="Dividir" value="/">
                        </div>
                        <p class="text-white">Resultado: <?= $result ?> </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>

</html>