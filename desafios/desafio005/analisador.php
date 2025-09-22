<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php 
    $numb = $_POST["num"];

    $integer = intval($numb);

    $fraction = $numb - $integer;
    
    $realfraction = round($fraction, 3);

    function Conversor($valor) {
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        return(numfmt_format_currency($padrao, $valor, "BRl"));
    };

?>

<body>
    <h1>Analisador de Número Real</h1>
    <p>Analisando o número <?= Conversor($numb) ?> informado pelo usuário:</p>
    <ul>
        <li>A parte inteira do número é <?= Conversor($integer) ?></li>

        <li>A parte fracionária do número é <?= Conversor($realfraction) ?></li>
    </ul>
    <p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </p>
</body>

</html>