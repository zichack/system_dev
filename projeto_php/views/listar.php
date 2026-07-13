<?php
require_once '../config/Database.php';
require_once '../models/Jogo.php';

$database = new Database();
$db = $database->getConnection();
$jogo = new Jogo($db);

$stmt = $jogo->read();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Jogos</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Catálogo de Jogos</h2>
        <hr>
        
        <?php include_once 'mensagem.php'; ?>
        
        <a href="cadastrar.php" class="btn btn-primary mb-3">Cadastrar Novo Jogo</a>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Gênero</th>
                    <th>Plataforma</th>
                    <th>Ano de Lançamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    echo "<tr>";
                        echo "<td>{$id}</td>";
                        echo "<td>{$titulo}</td>";
                        echo "<td>{$genero}</td>";
                        echo "<td>{$plataforma}</td>";
                        echo "<td>{$ano_lancamento}</td>";
                        echo "<td>
                                <a href='editar.php?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                                <a href='../controllers/JogoController.php?acao=excluir&id={$id}' class='btn btn-danger btn-sm' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</a>
                              </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>