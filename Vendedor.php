<?php
require_once 'Humano.php';
class Vendedor extends Humano
{
    public string $cargo = "Vendedor";
    public float $salario = 2981.86;

    function __construct($nome, $idade, $endereco, $contato)
    {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    function calcsalario($salario)
    {
        $this->salario = $salario;
    }
}