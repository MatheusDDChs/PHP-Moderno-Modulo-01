<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
    <style>
    main,
    p {
        text-align: center;
    }
    </style>
</head>

<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <h1>Informe um número</h1>
            <label for="raiz">Número para calcular:</label>
            <input type="number" name="raiz" id="raiz">
            <button type="submit">Cálcular Raízes</button>
        </form>
    </main>

    <?php 
    
        $raiz = $_POST["raiz"] ?? null;

        $raizQuadrada = sqrt($raiz);

        $raizCubica = pow($raiz, 1/3);

        $raiz2Fmt = number_format($raizQuadrada, 3, ",", ".");
        $raiz3Fmt = number_format($raizCubica, 3, ",", ".");

        echo <<< Frase
        <main>
            <h2>Resultado Final</h2>
            <p>Analisando o número $raiz, temos:</p>
            <p>A raíz quadrada é: <strong>$raiz2Fmt</strong>. <br>
            A raíz Cúbica é: <strong>$raiz3Fmt</strong>. </p>
        </main>
        Frase;
    
    ?>
</body>

</html>