<?php
require_once '../config/Database.php';
require_once '../models/Jogo.php';

$id = isset($_GET['id']) ? $_GET['id'] : die('ERRO: ID do jogo não encontrado.');

$database = new Database();
$db = $database->getConnection();

$jogo = new Jogo($db);
$jogo->id = $id;

$jogo->readOne();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Jogo</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Jogo</h2>
        <hr>
        
        <form action="../controllers/JogoController.php?acao=editar" method="POST">
            
            <input type="hidden" name="id" value="<?php echo $jogo->id; ?>">
            
            <div class="mb-3">
                <label for="titulo" class="form-label">Título do Jogo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo htmlspecialchars($jogo->titulo, ENT_QUOTES); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="genero" class="form-label">Gênero</label>
                <select class="form-select" id="genero" name="genero" required>
                    <option value="Ação" <?php echo ($jogo->genero == 'Ação') ? 'selected' : ''; ?>>Ação</option>
                    <option value="Aventura" <?php echo ($jogo->genero == 'Aventura') ? 'selected' : ''; ?>>Aventura</option>
                    <option value="RPG" <?php echo ($jogo->genero == 'RPG') ? 'selected' : ''; ?>>RPG</option>
                    <option value="Simulação" <?php echo ($jogo->genero == 'Simulação') ? 'selected' : ''; ?>>Simulação</option>
                    <option value="Sandbox" <?php echo ($jogo->genero == 'Sandbox') ? 'selected' : ''; ?>>Sandbox</option>
                    <option value="Esportes" <?php echo ($jogo->genero == 'Esportes') ? 'selected' : ''; ?>>Esportes</option>
                    <option value="Outros" <?php echo ($jogo->genero == 'Outros') ? 'selected' : ''; ?>>Outros</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="plataforma" class="form-label">Plataforma</label>
                <input type="text" class="form-control" id="plataforma" name="plataforma" value="<?php echo htmlspecialchars($jogo->plataforma, ENT_QUOTES); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="ano_lancamento" class="form-label">Ano de Lançamento</label>
                <input type="number" class="form-control" id="ano_lancamento" name="ano_lancamento" value="<?php echo $jogo->ano_lancamento; ?>" min="1950" max="2030" required>
            </div>
            
            <button type="submit" class="btn btn-warning">Atualizar</button>
            <a href="listar.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>