<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>">
            <h1>Reajustador de Preços</h1>

            <label for="precoProduto">Preço do Produto (R$)</label>
            <input type="number" name="precoProd" id="precoProd">

            <label for="percent">
                Qual será o percentual de reajuste? <span id="valor">(50%)</span></label>
            <input type="range" name="percent" id="percent" min="0" max="100" value="50">

            <button type="submit">Reajustar</button>
        </form>
    </main>

    <?php 
    
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

    $precoProd = $_REQUEST['precoProd'] ?? null;

    $percent = $_REQUEST['percent']  ?? null;

    if($precoProd && $percent != null){

    $precoAtual = $precoProd + (($precoProd * $percent) / 100) ;

        $precoProdFmt = numfmt_format_currency($padrao, $precoProd, "BRL");
        
        $precoAtualFmt = numfmt_format_currency($padrao, $precoAtual, "BRL");

        echo <<< FRASE
            
            <main>
                <h2>Resultado do Reajuste</h2>
                <p>
                    O produto que custava <strong>$precoProdFmt</strong>, com o $percent% de aumento vai passar a custar <strong>$precoAtualFmt</strong> a partir de agora.
                </p>
            </main>

        FRASE;
    }
    ?>

    <script>
    var percent = document.querySelector("#percent");

    var valor = document.querySelector("#valor");

    percent.value = 50 + "%";

    percent.addEventListener("input", () => {
        valor.textContent = "(" + percent.value + "%" + ")";
    });
    </script>
</body>

</html>