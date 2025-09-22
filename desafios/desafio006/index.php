<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Anatomia de uma Divisão</h1>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

        <label for="dev">Dividendo:</label>
        <input type="number" name="dev" id="dev" step="0.001" value="0">

        <label for="divi">Divisor:</label>
        <input type="number" name="divi" id="divi" step="0.001" value="1">

        <button type="submit">Enviar</button>
    </form>

    <?php 
    
    if($_SERVER["REQUEST_METHOD"] === "POST"){
       $dividendo = $_POST["dev"];

       $divisor = $_POST['divi'];

       if ($divisor && $dividendo == 0) {
        echo "<p style='color:red'>Erro: divisão por zero!</p>";
       } else {
       $divisao = $dividendo / $divisor;   

       $resto = $dividendo % $divisor;
       
       echo "<p>Seu resultado é: $divisao</p>";
       echo "<p>Dividendo: $dividendo</p>";
       echo "<p>Divisor: $divisor</p>";
       echo "<p>Resto da divisão: $resto</p>";
       }
    }
    ?>
</body>

</html>