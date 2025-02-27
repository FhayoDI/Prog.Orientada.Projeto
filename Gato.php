<?php
require_once 'Animal.php';
class Gato extends Animal {
    
    public function __construct($especie,$nome, $raca, $qtaspatas, $cor, $peso, $tamanho, $dono)
    {
        parent::__construct($especie,$nome, $raca, $qtaspatas, $cor, $peso, $tamanho, dono: $dono);
    }

    function falar()
    {
        return "Ola sou o {$this->nome}, da raça {$this->raca}, meu dono é o {$this->dono->nome} e sou um gato";

    }
}
