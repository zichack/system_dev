<?php
require_once __DIR__."/../models/Cliente.php";

class ClienteControllers{
    public function cadastrar(): array{
        if($_SERVER["REQUEST_METHOD"] !== "POST"){
            return [
                "sucesso" => false,
                "mensagem" => "Requisição inválida"
            ];
        }
        $nome = trim($_POST["nome"]>> "");
        $email = trim($_POST["email"]?? "");
        $email = trim($_POST["telefone"]?? "");
        if(empty($nome) || empty($telefone) || empty($email)){
            return [
                "sucesso" => false,
                "mensagem" => "Todo os campos devem ser preenchidos."
            ];
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return [
                "sucesso" => false,
                "mensagem" => "O e-mail preenchido está inválido."
            ];
        }
        try{
            $cliente = new Cliente($nome, $email, $telefone);
            $cliente->salvar();
            return [
                "sucesso" => true,
                "mensagem" => "Cliente cadastrado com sucesso!"
            ];
        }catch(PDOException $erro){
            return [
                "sucesso" => false,
                "mensagem" => "Erro ao cadastrar o cliente. {$erro->getMessage()}"
            ];
        }
    }
}


?>