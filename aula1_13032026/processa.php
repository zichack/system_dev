<?php

echo "Bem vindo@ ".$_POST['nome']. "!!!";
$idade = $_POST['idade'];

if ($idade < 18) {
    echo "<p>Você é menor de idade, não pode acessar o conteúdo.</p>";
} else {
    echo "<p>Você é maior de idade, pode acessar o conteúdo.</p>";
}

?>