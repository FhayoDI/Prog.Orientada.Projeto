<?php
class animal{
    public string $nome;
    public string $raca;
    public int $qtaspatas;
    public string $cor;
    public float $peso;
    public float $tamanho;
    public Humano $dono;
    function __construct($nome, $raca, $qtaspatas, $cor, $peso, $tamanho, $dono){
        $this->nome = $nome;
        $this->raca = $raca;
        $this->qtaspatas = $qtaspatas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
        $this->dono = $dono;
    }
    function falar(){
    return "sou um animal, olá";
    }
}