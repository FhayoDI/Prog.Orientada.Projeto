<?php
require 'animal.php';
class Coelho extends Animal{
    function __construct($nome, $raca, $qtaspatas, $cor, $peso, $tamanho)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->qtaspatas = $qtaspatas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
    }

    function falar($nome,$raca)
    {
        $this->nome=$nome;
        $this->raca=$raca;
        return "sou o $nome, da $raca e sou um cavalo";

    }
}