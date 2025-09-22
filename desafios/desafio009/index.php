<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritiméticas</title>
    <link rel="stylesheet" href="style.css">
    <style>
    hr {
        border: 1px 1px 1px purple;
    }
    </style>
</head>

<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>">

            <h1>Médias Aritméticas</h1>

            <label for="1valor">1º Valor</label>
            <input type="number" name="1valor" id="1valor">

            <label for="1peso">1º Peso</label>
            <input type="number" name="1peso" id="1peso">

            <hr>

            <!-- --------------------------- -->

            <label for="2valor">2º Valor</label>
            <input type="number" name="2valor" id="2valor">

            <label for="2peso">2º Peso</label>
            <input type="number" name="2peso" id="2peso">




            <button type="submit">Cálcular Médias</button>
        </form>
    </main>

    <?php 

    $valor1 = $_REQUEST['1valor'] ?? null;
    $peso1 = $_REQUEST['1peso'] ?? null;
    $valor2 = $_REQUEST['2valor'] ?? null;
    $peso2 = $_REQUEST['2peso'] ?? null;

    if($valor1 && $valor2 != null) {

    $res1 = ($valor1 + $valor2) / 2;

    $res2 = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

    $res1Fmt = number_format(round($res1), 2, ",", ".");

    $res2Fmt = number_format($res2, 2, ",", ".");



echo <<< Frase

    <main>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores $valor1 e $valor2:</p>
        <ul>
            <li>
                A Média Aritmética Simples entre os valores é igual a $res1Fmt.
            </li>
            <li>
                A Média Aritmética Pondera com pesos $peso1 e $peso2 é igual a $res2Fmt.
            </li>
        </ul>
    </main>

Frase;
    }
?>
</body>

</html>