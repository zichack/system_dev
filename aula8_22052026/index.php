<?php
// Sempre importar arquivos das classes utilizadas
require_once('Cliente.php'); 
$cliente = new Cliente("Maria da Silva", "maria@email.com");

$cliente->telefone = "43999999999"; // edita atributo
//$cliente = new Cliente();
//$cliente->nome = "Maria";
//$cliente->email = "maria@email.com";

echo "Exibindo nome do objeto cliente: {$cliente->nome}";

// Testando método da classe Produto
require_once('Produto.php'); // importando a classe
$prod = new Produto();
$prod->nome = "Seda - pacote";
$prod->preco = 3.5;

echo "<p> {$prod->exibirResumo()} </p>";
echo "<p>Desconto: {$prod->calcularDesconto(10)}</p>";

require_once('Usuario.php');

$usuario = new Usuario();

$usuario->definirSenha("12345678");

if($usuario->verificarSenha("12345678")){
    echo "<p>Senha correta!</p>";
}else{
    echo "<p> ------- Senha incorreta! -------</p>";
}

?>