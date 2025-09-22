<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="<?php $_SERVER['PHP_SELF']?>">

            <h1>Caixa Eletrônico</h1>

            <label for="numb">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="numb" id="numb">

            <legend>*Notas disponíveis: R$100, R$50, R$10 e R$5</legend>

            <button type="submit">Sacar</button>

        </form>
    </main>

    <?php 
    
        $valor = $_REQUEST['numb'] ?? null;

        if($valor != null) {

        $nota100 = intdiv($valor, 100);

        $resto = $valor % 100;

        $nota50 = intdiv($resto, 50);
        $resto = $resto % 50;

        $nota10 = intdiv($resto, 10);
        $resto = $resto % 10;

        $nota5 = intdiv($resto, 5);


        
        echo <<< FRASE
            <main>
            
                <h1>
                    Saque de realizado
                </h1>

                <p>
                    O caixa eltrônico vai te entregar as seguintes notas:
                </p>

                <ul>
                    <li>Notas de 100: $nota100 </li>
                    <li>Notas de 50:  $nota50 </li>
                    <li>Notas de 10:  $nota10 </li>
                    <li>Notas de 5:  $nota5 </li>
                </ul>
            
            </main>
        FRASE;
        }
    
    ?>

</body>

</html>