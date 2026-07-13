<?php
class Cliente{
    public string $nome;
    public string $email;
    public string $telefone;

    public function __construct(string $nome, string $email){
        $this->nome = $nome;
        $this->email = $email;
    }
}

?>