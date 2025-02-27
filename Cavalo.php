<?php
require_once 'Animal.php';
class Cavalo extends Animal{
    public function __construct($especie,$nome, $raca, $qtaspatas, $cor, $peso, $tamanho,$dono){
        parent::__construct($especie,$nome, $raca, $qtaspatas, $cor, $peso, $tamanho,dono: $dono);
    }

    function falar()
    {
        return "Oi eu sou o {$this->nome}, da raça {$this->raca} e meu dono é o {$this->dono->nome}, e sou um cavalo";
    }
}