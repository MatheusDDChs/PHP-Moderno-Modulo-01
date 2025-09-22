<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php 
        $num = $_POST["num"] ?? "Nenhum número detectado";

        $suc = $num + 1;
        $ant = $num - 1;

        echo"O seu número é $num <br>";
        echo"O sucessor dele é $suc <br>"; 
        echo"O antecessor dele é $ant"
    ?>
</body>

</html>