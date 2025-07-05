<?php
//validações do formulario
function formulario_nao_enviado() {
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
}

function formulario_em_branco() {
    return $_SERVER['REQUEST_METHOD'] == 'empty';
}

function idade_invalido(){
    $idade = $_POST['idade'];

    if($idade < 0 || $idade > 99)
    {
        echo '<h3>Preencha idade com um número válido!</h3>';

    }
}


?>