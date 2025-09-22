<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>">
            <h1>Calculadora de Tempo</h1>

            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo">

            <button type="submit">Calcular</button>
        </form>
    </main>


    <?php 
    
    $tempoBase = $_REQUEST['tempo'] ?? null;

    if($tempoBase != null){

    $semana = intdiv($tempoBase, 604800);
    $resto = $tempoBase % 604800;

    $dias = intdiv($resto, 86400);
    $resto = $resto % 86400;

    $horas = intdiv($resto, 3600);
    $resto = $resto % 3600;

    $minutos = intdiv($resto, 60);
    $resto = $resto % 60;

    $segundos = intdiv($resto, 1);

    $tempoBaseFmt = number_format($tempoBase, 0, ". ", ".");


    echo <<< FRASE

    <h1>Calculadora de Tempo</h1>

     <p>Analisando o valor que você digitou, $tempoBaseFmt segundos equivalem a um total de:</p>

        <ul>
        <li>$semana semanas</li>
        <li>$dias dias</li>
        <li>$horas horas</li>
        <li>$minutos minutos</li>
        <li>$segundos segundos</li>
        </ul>

    FRASE;
    }

    ?>
</body>

</html>