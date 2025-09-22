<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <?php 
    
/*      $nome = "Empresa Matheuzística"; // string doble quoted
        const CNPJ = 12345678; // int
        $valorMensal = 122.5; // float
        $ativa = true; // boolean

        echo $nome."Empre de CNPJ:". CNPJ . "Com valor de sistema de ".$valorMensal. "<br>". "No atual momento está ativa"; */
    
        class Empresa {
            public string $nome; //Propriedades do Objeto
            public int $CNPJ;
            public float $valorMensal;
            public bool $ativa;

            // Métodos

            // Construturo é chamado quando criamos novo objeto
            function __construct($nome, $CNPJ, $valorMensal, $ativa) {
            $this->nome = $nome;
            $this->CNPJ = $CNPJ;
            $this->valorMensal = $valorMensal;
            $this->ativa = $ativa;
        }

            function get_name() {
                echo "O nome desta empresa é: $this->nome"."<br>";
            }

            function get_info(){
                echo "CNPJ: $this->CNPJ desta empresa, tem valor mensal de: $this->valorMensal <br>";
            }

            function get_status() {
                if($this->ativa === true) {
                    echo "Está empresa está ativa.";
                } else {
                    echo "Empresa desativada.";
                }
            }
        }

        $empresa1 = new Empresa("Empresa Matheuzística", 12345678, 150.2, true);
        $empresa2 =  new Empresa("Dev Solutions", 98765432, 999.9, false);

        $empresa1->get_name();
        $empresa1->get_info();
        $empresa1->get_status();
        
        echo "<br>";

        $empresa2->get_name();
        $empresa2->get_info();
        $empresa2->get_status();
    ?>

</body>

</html>