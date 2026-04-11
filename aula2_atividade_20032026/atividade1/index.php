<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Atividade</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Atividade</h1>
        <form action="processa.php" method="post">
            <div class="mb-3">
                <label for="numero1" class="form-label">Digite um número</label>
                <input type="number" class="form-control" id="numero1" name="numero1" required>
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Digite outro número</label>
                <input type="number" class="form-control" id="numero2" name="numero2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>