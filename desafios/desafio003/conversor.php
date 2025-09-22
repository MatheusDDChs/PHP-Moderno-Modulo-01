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

    /* $numb = ceil($numb); 
    round(arredondação aritimética)
    floor(Arredonda pra baixo)
    intaliv() pega o resto da divisão
    hypot (3, 5) coloque os catetos e ele faz a hipotenusa
    min()
    max()
    */

    $cotacao = 5.43;

    $converted = $numb * $cotacao;
?>

<body>
    <h1>Conversor de Moedas v1.0</h1>
    <p>Seus R$ <?= $numb ?> equivalem a <?= $converted ?></p>
    <p>* Cotação fixa de 5,43 informada diretamente no código.</p>
</body>

</html>