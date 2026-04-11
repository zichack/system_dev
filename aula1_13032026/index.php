<?php
    echo "Olá mundo!";

    // variáveis

    $nome = "Mateus";
    $idade = 27;

    echo '<p>Olá ' .$nome. '. Sua idade é ' .$idade. '!</p>';
    echo "<p>Olá $nome. Sua idade é $idade!</p>";

    //ver o tipo da variável;
    echo(gettype($idade)) . '<br>';

    //operadores

    $a = 10;
    $b = 5;

    echo 'soma = '. ($a + $b);
?>

<a href = "formulario.html" target="_blank">
    Clique aqui para ver o formulário
</a>