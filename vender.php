<?php
class vender extends produto{
    public $preco;
    function __construct($preco, $produto, $vendedor)
    {
        $this->preco = $preco;
        $this->produto = $produto;
        $this->vendedor = $vendedor;

    }

}
