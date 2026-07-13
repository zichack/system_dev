<?php
require_once '../config/Database.php';
require_once '../models/Jogo.php';

$database = new Database();
$db = $database->getConnection();

$jogo = new Jogo($db);

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if ($acao == 'cadastrar') {
        $jogo->titulo = $_POST['titulo'];
        $jogo->genero = $_POST['genero'];
        $jogo->plataforma = $_POST['plataforma'];
        $jogo->ano_lancamento = $_POST['ano_lancamento'];
        
        if ($jogo->create()) {
            header("Location: ../views/listar.php?msg=sucesso");
        } else {
            header("Location: ../views/listar.php?msg=erro");
        }
        exit();
    }
    
    if ($acao == 'editar') {
        $jogo->id = $_POST['id'];
        $jogo->titulo = $_POST['titulo'];
        $jogo->genero = $_POST['genero'];
        $jogo->plataforma = $_POST['plataforma'];
        $jogo->ano_lancamento = $_POST['ano_lancamento'];
        
        if ($jogo->update()) {
            header("Location: ../views/listar.php?msg=editado");
        } else {
            header("Location: ../views/listar.php?msg=erro");
        }
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($acao == 'excluir' && isset($_GET['id'])) {
        $jogo->id = $_GET['id'];
        
        if ($jogo->delete()) {
            header("Location: ../views/listar.php?msg=excluido");
        } else {
            header("Location: ../views/listar.php?msg=erro");
        }
        exit();
    }
}
?>