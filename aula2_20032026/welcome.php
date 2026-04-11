<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bem-vindo com PHP</title>
</head>
<body>

    <div class="titulo">
        <h1>Bem-vindo com PHP</h1>
    </div>

    <div class="formulario">
        <?php if(isset($_GET['name']) && isset($_GET['email'])){
            echo('Bem vindo '.$_GET['name']."<br>");
            echo('Seu e-mail é: '.$_GET['email']);
        }else{
            echo 'Dados inválidos';
        }
        
        ?>
    </div>

</body>
</html>