<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo da Idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <h1>Calculando a sua idade</h1>

            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc">

            <label for="anoAtual">Quer saber sua idade em que ano? (Atualmente estamos em 2025)</label>
            <input type="number" name="anoAtual" id="anoAtual">

            <button type="submit">Qual será minha idade?</button>
        </form>
    </main>

    <?php 

        $anoBase = date("Y");

        $anoNasc = $_POST['anoNasc'] ?? null;

        $anoAtual = $_POST['anoAtual'] ?? null;


        if($anoNasc != null) {
            
        $idadeAtual = $anoAtual - $anoNasc;

        print <<< Frase

            <main>
                <h1>Resultado</h1>
                <p>Quem nasceu em $anoNasc vai ter $idadeAtual anos em $anoAtual!</p>
            </main>

        Frase;

        }
        ?>


</body>

</html>