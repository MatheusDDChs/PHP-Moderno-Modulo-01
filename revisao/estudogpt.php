<?php 

    class Marca{

    protected $nome;
    protected $pais;

    function __construct($nome, $pais) {
        $this->$nome = $nome;
        $this->$pais = $pais;
    }

    public function apresentar(){
        echo "Esta é a marca {$this->nome} e seu pais {$this->pais}.";
    }
};


?>