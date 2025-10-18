<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For / Foreach</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



</body>

<?php 

    $numero = [3, 7, 12, 9, 20];

    foreach ($numero as $numbs) {
        echo <<< FRASE

            <main>
                <p>"Número no Array: $numbs"</p>
            </main>

        FRASE;
    }

        foreach ($numero as $numbs) {
        echo <<< FRASE

            <main>
                <p>Total: $numbs + $numbs</p>
            </main>

        FRASE;
    }

?>

</html>