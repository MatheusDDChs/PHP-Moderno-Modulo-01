<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <fieldset>
                <h1>Informe seu salário</h1>
                <label for="salario">Salário (R$)</label>
                <input type="number" name="salario" id="salario" step="0.001">
                <p>Considerando o salário mínimo de R$ 1.518,00</p>
                <button type="submit">Calcular</button>
            </fieldset>
        </form>
    </main>

    <?php    
    $salario = $_POST["salario"] ?? null;

    if($salario != null){

    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        $salariobase = 1518;

            $diferencaDiv = floor($salario / $salariobase);

            $diferencaSub = $salario - ($diferencaDiv * $salariobase);
            $diferencaFmt = numfmt_format_currency($padrao, $diferencaSub, "BRL");

            $minimoStg = "salário mínimo";
            
    $salariofmt = numfmt_format_currency($padrao, $salario, "BRL");

            if($salario > $salariobase){        
    echo(" <main> <h2>Resultado final</h2> <br>
    Quem recebe um salário de ". $salariofmt . " ganha <strong>$diferencaDiv salários mínimos</strong>" . " + $diferencaFmt.");
    } if($salario <= $salariobase) {
        echo("
    Quem recebe um salário de ". $salariofmt . " ganha " . $diferencaDiv . " ou menos que um salário mínimo. </main>");
    }
}
?>
</body>

</html>