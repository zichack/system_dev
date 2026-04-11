<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Resultado</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Resultado</h1>
    <?php
        $a = $_POST["numero1"];
        $b = $_POST["numero2"];
        $c = $_POST["numero3"];

        echo "<hr><h2 class='h6'>Resultado:</h2>";
        echo "<div class='alert alert-info'>";

        if ($a >= $b && $a >= $c) {
                    if ($b >= $c) {
                        echo "$a - $b - $c";
                    } else {
                        echo "$a - $c - $b";
                    }
        } elseif ($b >= $a && $b >= $c) {
                    if ($a >= $c) {
                        echo "$b - $a - $c";
                    } else {
                        echo "$b - $c - $a";
                    }
        } else {
                    if ($a >= $b) {
                        echo "$c - $a - $b";
                    } else {
                        echo "$c - $b - $a";
                    }
        }

        echo "</div>";

?>
</div>
</body>
</html>