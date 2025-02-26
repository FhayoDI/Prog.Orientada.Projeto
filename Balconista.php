<?php
require 'humano.php';
class Balconista extends Humano
{
    public float $salario;

    function __construct($nome, $idade, $endereco, $contato)
    {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    function calcsalario($salario)
    {
        $this->salario = $salario;
    }
}