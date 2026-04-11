<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Resultado</title>
</head>

<body>

<div class="container">
    <h1 class="card-title">Resultado</h1>
    <?php

    if (isset($_POST['numero1']) && isset($_POST['numero2']) && $_POST['numero1'] + $_POST['numero2'] > 10) {
        $soma = $_POST['numero1'] + $_POST['numero2'] + 8;
        echo '<h2>A soma é: ' . $soma . '</h2>';
    } else {
        $subtracao = $_POST['numero1'] + $_POST['numero2'] - 5;
        echo '<h2>A subtração é: ' . $subtracao . '</h2>';
    }

    ?>
</div>
</body>

</html>