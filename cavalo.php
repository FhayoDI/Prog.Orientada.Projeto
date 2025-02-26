<?php
require 'animal.php';
class Cavalo extends Animal{
    function __construct($nome, $raca, $qtaspatas, $cor, $peso, $tamanho,$dono){
        parent::__construct($nome, $raca, $qtaspatas, $cor, $peso, $tamanho,$dono);
    }

    function falar()
    {
        return "Oi eu sou o {$this->nome}, da raça {$this->raca} e meu dono é o {$this->dono->nome}, e sou um cavalo";
    }
}