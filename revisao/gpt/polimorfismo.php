<?php 

    class Marca{

    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

        public function anunciar() {
        echo "{$this->nome}: Qualidade internacional!<br>";
    }
}

    class MarcaNacional extends Marca {

        public function anunciar(){
            echo"{$this->nome}: Orgulo Brasileiro! <br>";
        }
}

    class MarcaImportada extends Marca {
        public function anunciar(){
            echo"{$this->nome}: Tecnologia de ponta mundial!<br>";
        }
}

// Polimorfismo em ação

$marcas = [
    new Marca("Genérica"),
    new MarcaNacional("Havaianas"),
    new MarcaImportada("Toyota")
];

foreach($marcas as $m){
    $m->anunciar(); //Mesmo método, resultados diferentes
}
?>