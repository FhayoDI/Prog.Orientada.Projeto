<?php
class Animal{
    public string $especie;
    public string $nome;
    public string $raca;
    public int $qtaspatas;
    public string $cor;
    public float $peso;
    public string $tamanho;
    public Humano $dono;
    
    function __construct($especie, $nome, $raca, $qtaspatas, $cor, $peso, $tamanho, $dono){
        $this->especie = $especie;
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