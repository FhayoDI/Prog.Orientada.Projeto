<?php
require 'humano.php';
class Vendedor extends Humano
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