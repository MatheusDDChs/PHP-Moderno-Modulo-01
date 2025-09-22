<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Tipos primitivos em PHP</h1>
    <?php 
    /*  0x = hexadecimal [0-F], 0b = binário [0-1], 0 = octal [0-8]
        $num = 0x1A;
        echo "O valor da variável é $num" */

        #$v = "Matheus";
        #var_dump($v); // Retorna que é string

        /* $num = (string) 3e2; Isso é Coerção 3 x 10 (2)
        echo "O valor é de $num";
        var_dump($num); */

        /* $num = (float) "950";
        var_dump($num) */

        /* $vet = [0, 3.5, 7, "Matheus", true];
        var_dump($vet) */ 

        #Este é o Famoso Array

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

        # Este é o grande Objeto

        echo ("Olá Mat");
    ?>


</body>

</html>