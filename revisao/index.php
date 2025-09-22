<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisao</title>
    <link rel="stylesheet" href="style.css">
    <?php 

//PERSONAL HOME PAGE > PHP: HYPERTEXT PREPROCESSOR

$guri1 = "Sandero";
$guri2 = "Ígor";
$guri3 = "Matheus";

$array_cupincha = array($guri1, $guri2, $guri3);

$indice = array_rand($array_cupincha);

echo( "Este é um dos guris o filme: ". $array_cupincha[$indice] . "<br>");
//Aleatoriazador de STRINGS

echo("Sequência de escape para linguagem dentro de PHP:".
    
     '\n Linha nova '. "<br>".'
        \t tabulação horizontal (ident) '. "<br>".'
        \\ Barras invertidas '. "<br>".'
        \$ Sinal de Cifrão '. "<br>".' 
        \u{} Codepoint para unicode (emojis)'. "<br>"
);

//

date_default_timezone_set("America/Sao_Paulo");

echo("Hoje é dia: " . date("d/M/Y"));
echo("E a hora é: " . date("G:i:s"));

?>


</head>

<body>

</body>

</html>