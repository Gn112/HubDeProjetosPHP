<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP - GABRIEL SIRIANI</title>
</head>

<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $calc = 'somar';

    if(isset($_POST['Somar'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['Somar'];

        $result = $n1 + $n2;
    }
    if(isset($_POST['Subtrair'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['Subtrair'];

        $result = $n1 - $n2;
    }
    if(isset($_POST['Multiplicar'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['Multiplicar'];

        $result = $n1 * $n2;
    }
    if(isset($_POST['Dividir'])){
        $n1 = (float)$_POST['n1'];
        $n2 = (float)$_POST['n2'];
        $calc = $_POST['Dividir'];

        $result = $n1 / $n2;
    }
?>

<body>
<h1 style="color: pink;">Calculadora PHP - GABRIEL SIRIANI</h1>
<form method="post">
        Primeiro numero <br>
        <input type="number" name="n1" value= <?= $n1 ?> required > <br>
        Segundo numero  <br>
        <input type="number" name="n2" value= <?= $n2 ?> required  > <br>
        <input type="submit" name="Somar" value="Somar">
        <input type="submit" name="Subtrair" value="Subtrair">
        <input type="submit" name="Multiplicar" value="Multiplicar">
        <input type="submit" name="Dividir" value="Dividir">
        <br><br>
        
        <p>Resultado: <?= $result ?> </p>
    </form>
</body>
</html>