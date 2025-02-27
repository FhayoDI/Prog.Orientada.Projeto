<?php
require_once 'Humano.php';
class Veterinario extends Humano
{
    public string $cargo = "Veterinario";

    public float $salario = 1900.99;

    function __construct($nome, $idade, $endereco, $contato)
    {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    function calcsalario($salario)
    {
        $this->salario = $salario;
    }

}
