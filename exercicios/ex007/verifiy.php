<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php 
$tentativa = $_REQUEST['senha'];

$senhaCorreta = "Matheus123";

if ($tentativa != $senhaCorreta) {
    echo <<< FRASE

    <main>
        <h2>Verificação de senha $tentativa...</h2>
        <p>[ERRO]Senha incorreta, tente novamente.[ERRO]</p>
    </main>

FRASE;
} else {

    echo <<< FRASE

    <main>
        <h2>Acesso liberado!</h2>
    </main>

FRASE;
}
?>

</body>

</html>