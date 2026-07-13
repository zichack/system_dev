<?php
require_once('Usuario.php');

class Cliente extends Usuario{
    public string $nome;
    public string $email;
    public string $telefone;
    
    // Construtor da classe
    public function __construct(string $nome, string $email, string $senha = "123"){
        parent::__construct($senha); // Chama o construtor da classe pai (Usuario)
        $this->nome = $nome;
        $this->email = $email;
    }

    public function apresentar():string{
        return "<p>Olá {$this->nome}!</p>";
    }
        
    public function __destruct(){
        echo "<p>Destruindo o cliente {$this->nome}</p>";
    }
}
?>