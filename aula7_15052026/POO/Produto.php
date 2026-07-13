<?php

class Produto{
    public string $nome;
    public float $preco;

    public function exibirResumo(){
        return "Produto: {$this->nome}, Preço: {$this->preco}";
    }

    //Métodos com parâmetros
    public function calcularDesconto(float $percentual): float{
        return ($this->preco * $percentual) / 100;
    }
}

?>
