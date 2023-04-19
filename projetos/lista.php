<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .title {
            color: red;
        }

        body {
            font-family: 'Franklin Gothic Medium'
        }
    </style>

    <?php

    // Maior Número
    $n1 = 0;
    $n2 = 0;
    $maior = 0;

    if (isset($_POST['maior'])) {
        $n1 = (int) $_POST['n1'];
        $n2 = (int) $_POST['n2'];

        if ($n1 > $n2) {
            $maior = $n1;
        } else if ($n1 < $n2) {
            $maior = $n2;
        } else {
            $maior = "N1 == N2";
        }
    }



    // ---- //

    // Positivo ou Negativo
    $n3 = 0;
    $test = "";

    if (isset($_POST['posne'])) {
        $n3 = (int) $_POST['n3'];
        if ($n3 < 0) {
            $test = "Numero NEGATIVO";
        } else if ($n3 == 0) {
            $test = "Numero ZERO";
        } else {
            $test = "Numero POSITIVO";
        }
    }

    // ---- //

    // MASCULINO OU FEMININO
    $valueGen = "";
    $testGen = "";

    if (isset($_POST['genderTest'])) {
        $valueGen = (string) $_POST['testGen'];

        if ($valueGen == "M") {
            $testGen = "MASCULINO";
        } else if ($valueGen == "F") {
            $testGen = "FEMININO";
        } else {
            $testGen = "SEXO INVALIDO";
        }
    }

    // ---- //

    // NOTAS ALUNO
    $nota1 = 0.0;
    $nota2 = 0.0;
    $media = 0.0;
    $resultado = "";
    if (isset($_POST['mediaBtn'])) {
        $nota1 = (float) $_POST['nota1'];
        $nota2 = (float) $_POST['nota2'];

        $media = ($nota1 + $nota2) / 2;

        if ($media >= 10) {
            $resultado = "APROVADO COM DISTINÇÃO";
        } else if ($media < 7) {
            $resultado = "REPROVADO";
        } else if ($media >= 7) {
            $resultado = "APROVADO";
        }
    }

    // ---- //

    // MAIOR DE TRES
    $t1 = 0;
    $t2 = 0;
    $t3 = 0;
    $maiordetres = 0;

    if (isset($_POST['maiordetres'])) {
        $t1 = (int) $_POST['t1'];
        $t2 = (int) $_POST['t2'];
        $t3 = (int) $_POST['t3'];

        if ($t1 > $t2 && $t1 > $t3) {
            $maiordetres = $t1;
        } else if ($t2 > $t1 && $t2 > $t3) {
            $maiordetres = $t2;
        } else if ($t3 > $t1 && $t3 > $t2) {
            $maiordetres = $t3;
        }
    }

    // ---- //

    // MAIS BARATO
    $p1 = 0.0;
    $p2 = 0.0;
    $p3 = 0.0;
    $maisbarato = 0.0;

    if (isset($_POST['maisbarato'])) {
        $p1 = (float) $_POST['p1'];
        $p2 = (float) $_POST['p2'];
        $p3 = (float) $_POST['p3'];

        if ($p1 < $t2 && $p1 < $p3) {
            $maiordetres = $p1;
        } else if ($p2 < $p1 && $p2 < $p3) {
            $maiordetres = $p2;
        } else if ($p3 < $p1 && $p3 < $p2) {
            $maiordetres = $p3;
        }
    }

    ?>

</head>

<body>
    <form method="post">
        <h1 class="title">1) MAIOR NUMERO</h1>
        <input type="number" name="n1" value=<?= $n1 ?> required><br>
        <input type="number" name="n2" value=<?= $n2 ?> required><br><br>
        <input type="submit" name="maior" value="Maior Numero">
        <h3><?= $maior ?></h3> <br><br>
    </form>

    <form method="post">
        <h1 class="title">2) POSITIVO NEGATIVO</h1>
        <input type="number" name="n3" value=<?= $n3 ?> required><br><br>
        <input type="submit" name="posne" value="Pos/Ne">
        <h3><?= $test ?></h3> <br><br>
    </form>

    <form method="post">
        <h1 class="title">3) MASCULINO OU FEMININO</h1>
        <h3>Digite "M" ou "F" em MAIUSCULO</h3>
        <input type="text" name="testGen" value=<?= $valueGen ?> required><br><br>
        <input type="submit" name="genderTest" value="Testar Genero">
        <h3><?= $testGen ?></h3> <br><br>
    </form>

    <form method="post">
        <h1 class="title">4) NOTAS ALUNO</h1>
        Nota 1:<br>
        <input type="number" name="nota1" value=<?= $nota1 ?> required><br><br>
        Nota 2:<br>
        <input type="number" name="nota2" value=<?= $nota2 ?> required><br><br>
        <input type="submit" name="mediaBtn" value="Calcular">
        <h3><?= "A media e: " . $media ?></h3>
        <h3><?= $resultado ?></h3>
    </form>

    <form method="post">
        <h1 class="title">5) MAIOR NUMERO DE TRES</h1>
        <input type="number" name="t1" value=<?= $t1 ?> required><br>
        <input type="number" name="t2" value=<?= $t2 ?> required><br>
        <input type="number" name="t3" value=<?= $t3 ?> required><br><br>
        <input type="submit" name="maiordetres" value="Maior Numero de Tres">
        <h3><?= $maiordetres ?></h3> <br><br>
    </form>

    <form method="post">
        <h1 class="title">6) PRODUTO MAIS BARATO</h1>
        <input type="number" name="p1" value=<?= $p1 ?> required><br>
        <input type="number" name="p2" value=<?= $p2 ?> required><br>
        <input type="number" name="p3" value=<?= $p3 ?> required><br><br>
        <input type="submit" name="maisbarato" value="Mais Barato">
        <h3><?= $maisbarato ?></h3> <br><br>
    </form>
</body>

</html>