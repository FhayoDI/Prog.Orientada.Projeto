<?php
require 'humano.php';
class Veterinario extends Humano
{
    public $salario;

    function __construct($nome, $idade, $endereco, $contato)
    {
        parent::__construct($nome, $idade, $endereco, $contato);
    }

    function calcsalario($salario)
    {
        $this->salario = $salario;
    }

}
