<?php
require_once 'Animal.php';
require_once 'Balconista.php';
require_once 'Cachorro.php';
require_once 'Cavalo.php';
require_once 'Coelho.php';
require_once 'Gato.php';
require_once 'Humano.php';
require_once 'Produto.php';
require_once 'Vendedor.php';
require_once 'Vender.php';
require_once 'Veterinario.php';


$humano1 = new Humano('Marcelo', '17', 'Av. Serafim Ribas, 336', '4299999899');   
$humano2 = new Humano('João', '28', 'Av. AAAAAAAA', '5485726544');  
$humano3 = new Humano ('Fernando','26','AV.BBBBBBBB','42658976543');


$funcionario1 = new Balconista('Juliano','64','Rua Guaira 23','46597519875');
$funcionario2 = new Vendedor('Roberto','84','Av Bababoi 23', '9741574155');
$funcionario3 = new Veterinario('Boaldo','32','NHAAAAAAA','74644476862');


$animal1 = new Gato('Gato','Felix','Siames','3','Branco','22.4', 'pequeno',$humano1);
$animal2 = new Cavalo('Cavalo','Juan','Manga-larga','4','Marrom','96.85','grande',$humano2);
$animal3 = new Coelho('Coelho','PomPom','Mini-Lop','4','Branco','6','pequeno',$humano3);
$animal4 = new Cachorro('Cachorro','Marcelinho','Bull Terrier','2','marrom','26',tamanho: 'medio',dono: $humano1);


$Produto1 = new Produto ('Ração','20');
$Produto2 = new Produto ('Coleira','35');


$Vender1 = new Vender ($Produto1,$funcionario2,2,$humano1 );

// Imprimir o Humano
function EchoHumano($humano){
    echo '|nome: '. $humano->nome . ' |Idade: ' . $humano->idade . " |Endereço: " . $humano->endereco . " |Contato: " . $humano->contato . "|" . "\n";

}
// Imprimir o  Funcionario
function EchoFuncionario($funcionario){
    echo '|nome: '. $funcionario->nome . ' |Idade: ' . $funcionario->idade . " |Endereço: " . $funcionario->endereco . " |Contato: " . $funcionario->contato  . " |cargo: " . $funcionario->cargo . " |salário: " . $funcionario->salario . "|". "\n";
}
// Imprimir o animal
function EchoAnimal ($animal) {
    echo "|Ele é um: ". $animal->especie . " |Seu nome é: ". $animal->nome . " |É da raça: " . $animal->raca . " |Tem: ". $animal->qtaspatas . " patas " . "  |É da cor: " . $animal->cor . " |Pesa: " . $animal->peso . "|É de porte" . $animal->tamanho . "|E seu dono é: " . $animal->dono->nome . "| \n";

}
// Imprimir o produto
function EchoProduto ($Produto) {
    echo "a/o " . $Produto->produto . "custa" . $Produto->preco .PHP_EOL;
}
// Imprimir a venda
function EchoVenda ($Vender) {
    echo  " produto " . $Vender->produto->produto. " vendedor " . $Vender->vendedor->nome . " quantidade " . 2 . " comprador " . $Vender->comprador->nome .PHP_EOL; 
}
EchoVenda ($Vender1);
EchoProduto ($Produto1);
EchoAnimal ($animal3);
EchoFuncionario($funcionario2);
EchoHumano($humano3);  