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

        $inicio = date("m-d-Y", strtotime("-7 days"));

        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';


    $dados = json_decode(file_get_contents($url), true);

    //var_dump($dados);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    $dataehora = $dados["value"][0]["dataHoraCotacao"];

    $converted = $numb / $cotacao;

   /*  <h1>Conversor de Moedas v1.0</h1>
    <p>Seus R$ <?= number_format($numb, 2, ",", ".") ?> equivalem a <?= number_format($converted, 2, ",", ".") ?></p>
*/

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
?>

<body>
    <h1>Conversor de Moedas v1.0</h1>
    <p>Seus R$ <?= numfmt_format_currency($padrao, $numb, "BRL") ?> equivalem a
        <?= numfmt_format_currency($padrao, $cotacao, "USD") ?></p>

    <p>* Cotação vindo diretamento do <a href="https://www.bcb.gov.br/">Banco Central do Brasil</a>.</p>

    <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
</body>

</html>