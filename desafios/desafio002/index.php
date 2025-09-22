<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Randomizador</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>Digite algum número</h1>
    <p>Gerando um número aleatório entre 0 e 100...</p>
    <form action="" method="post"><button type="submit">Randomizar</button></form>

    <?php 
      if($_SERVER["REQUEST_METHOD"] === "POST") {
        $random_numb = rand(1, 100);
      }
    ?>
    <p>
        <?= "O valor gerado foi de <strong>$random_numb</strong>"; ?>
    </p>
</body>

</html>