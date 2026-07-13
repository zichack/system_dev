<?php
//sempre importar arquivos das classes utilizadas
require_once('cliente.php');

$cliente = new Cliente("Maria da Silva", "maria@email.com");
//$cliente->nome = "Maria";
//$cliente->email = "maria@email.com";
//$cliente->telefone = "(43) 99999-9999";

echo $cliente->nome . "<br>";
echo $cliente->email . "<br>";
//echo $cliente->telefone . "<br>";

//testamdp método da classe Produto
require_once('Produto.php');
$prod = new Produto();
$prod->nome = "Seda - pacote";
$prod->preco = 3.5;

echo "<p> {$prod->exibirResumo()} </p><p>Desconto: {$prod->calcularDesconto(10)}</p>";

?>