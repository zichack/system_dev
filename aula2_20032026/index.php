<?php
$curso = "<p style='font-size: 100px;'>Desenvolvimento de Sistemas</p>"; // declara a variável global

//declaração da função
function mostrarCurso() {
    echo $GLOBALS['curso'];
}

mostrarCurso(); // executa a function

echo "Nome do servidor: " . $_SERVER['SERVER_NAME'] . "<br>"; // nome do server
echo "Arquivo atual: " . $_SERVER['PHP_SELF']; // nome do arquivo atual

define("SAUDACAO", "<br>Olá, turma!<br>"); // define é uma função para criar constantes, ou seja, variáveis que não podem ser alteradas
echo SAUDACAO;

const LIMITE_NOTA = 10; // const é outra forma de criar constantes, mas é mais rápida que a função define
echo LIMITE_NOTA;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulário PHP</title>
</head>
<body>

    <div class="titulo">
        <h1>Formulário PHP</h1>
    </div>

    <div class="formulario">
        <form action="welcome.php" method="get">
            <p>
                Nome:
                <input class="texto" type="text" name="name">
            </p>

            <p>
                E-mail:
                <input class="texto" type="text" name="email">
            </p>

            <input class="botao" type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>