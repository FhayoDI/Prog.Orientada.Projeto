<?php
class Produto{
public string $produto;
public string $preco;


public function __construct($produto,$preco){
    $this->produto = $produto;
    $this->preco = $preco;}   
    public function produto(){
        return 'Digite o nome do produto que voce deseja' . $this->produto;
    }
    public function preco () {
        return 'O preço do ' . $this->produto . 'é' . $this->preco;
    }
}