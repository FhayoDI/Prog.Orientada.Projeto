<?php

require_once('Humano.php');


class Vender {
    public Humano $vendedor;
    public int $quantidade;
    public Humano $comprador;
    public $produto;
    function __construct($produto, $vendedor, $quantidade,$comprador){
        $this->quantidade = $quantidade;
        $this->produto = $produto;
        $this->vendedor = $vendedor;
        $this->comprador = $comprador;
    }
}