<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Jogo</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastrar Novo Jogo</h2>
        <hr>
        
        <form action="../controllers/JogoController.php?acao=cadastrar" method="POST">
            
            <div class="mb-3">
                <label for="titulo" class="form-label">Título do Jogo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            
            <div class="mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <select class="form-select" id="genero" name="genero" required>
                    <option value="">Selecione...</option>
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="RPG">RPG</option>
                    <option value="Simulação">Simulação</option>
                    <option value="Sandbox">Sandbox</option>
                    <option value="Esportes">Esportes</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="plataforma" class="form-label">Plataforma</label>
                <input type="text" class="form-control" id="plataforma" name="plataforma" placeholder="Ex: PC, PS5, Xbox, Multiplataforma" required>
            </div>
            
            <div class="mb-3">
                <label for="ano_lancamento" class="form-label">Ano de Lançamento</label>
                <input type="number" class="form-control" id="ano_lancamento" name="ano_lancamento" min="1950" max="2030" required>
            </div>
            
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="listar.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>