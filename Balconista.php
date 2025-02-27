<?php
require_once 'Humano.php';
class Balconista extends Humano
{
    public string $cargo = "Balconista";

    public float $salario = 1978.8;

    function __construct($nome, $idade, $endereco, $contato)
    {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    function calcsalario($salario)
    {
        $this->salario = $salario;
    }
}