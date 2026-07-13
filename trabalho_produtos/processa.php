<?php
$arquivo = "produtos.txt";
$conArquivo = fopen($arquivo, "r");

if ($conArquivo) {
    $primeiraLinha = fgets($conArquivo); // lê a primeira linha e cria o título das colunas
    
    if (!empty($primeiraLinha)) {
        $titulos = explode(",", $primeiraLinha);
        echo "<thead>";
        echo "<tr>";
        foreach ($titulos as $titulo) {
            echo "<th>" . htmlspecialchars($titulo) . "</th>";
        }
        echo "</tr>";
        echo "</thead>";
    }

    echo "<tbody>";

    while (!feof($conArquivo)) { // imprime a tabela a partir da segunda linha
        $linha = fgets($conArquivo);
        if (!empty(trim($linha))) {
            $dados = explode(",", $linha);
            echo "<tr>";
            echo "<td>" . htmlspecialchars($dados[0]) . "</td>";
            echo "<td>" . htmlspecialchars($dados[1]) . "</td>";
            echo "<td>" . htmlspecialchars($dados[2]) . "</td>";
            echo "<td>" . htmlspecialchars($dados[3]) . "</td>";
            echo "</tr>";
        }
    }
    
    echo "</tbody>";
    fclose($conArquivo);
} else {
    echo "<tr><td colspan='4'>Erro ao abrir o arquivo</td></tr>";
}
?>