<?php
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    $alertClass = '';
    $texto = '';

    switch ($msg) {
        case 'sucesso':
            $alertClass = 'alert-success';
            $texto = 'Jogo cadastrado com sucesso!';
            break;
        case 'editado':
            $alertClass = 'alert-info';
            $texto = 'Jogo atualizado com sucesso!';
            break;
        case 'excluido':
            $alertClass = 'alert-warning';
            $texto = 'Jogo excluído com sucesso!';
            break;
        case 'erro':
            $alertClass = 'alert-danger';
            $texto = 'Ocorreu um erro na operação.';
            break;
    }

    if ($texto != '') {
        echo "<div class='alert {$alertClass} alert-dismissible fade show mt-3' role='alert'>
                {$texto}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    }
}
?>