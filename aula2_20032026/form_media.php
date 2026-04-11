<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo completo</title>
</head>
<body>

    <h1>Cálculo de média</h1>

    <form action="" method="get">
        <p>
            Nota 1:
            <input type="number" name="n1" step="0.1">
        </p>

        <p>
            Nota 2:
            <input type="number" name="n2" step="0.1">
        </p>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_GET["n1"]) && isset($_GET["n2"])) {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $media = ($n1 + $n2) / 2;

        echo "<p>Média: $media</p>";

        if ($media >= 6) {
            echo "<p>APROVADO</p>";
        } else if ($media >= 2) {
            echo "<p>RECUPERAÇÃO</p>";
        } else {
            echo "<p>REPROVADO</p>";
        }
    }
    ?>

</body>
</html>