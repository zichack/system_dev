<?php

$arquivo = "exemplo.txt";

$conArquivo = fopen($arquivo, "r");

//verificando se arquivo foi aberto corretamente

if ($conArquivo) {
    echo "Arquivo encontrado";
    while (!feof($conArquivo)) {
        $linha = fgets($conArquivo); //recebe uma linha do arquivo
        echo "<p>$linha</p>";
    }
    fclose($conArquivo);
} else {
    echo "<p>Erro ao abrir o arquivo</p>";
}

?>