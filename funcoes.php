<?php
//validações do formulario

$erro = 0;
function formulario_nao_enviado() {
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
    $erro = 1;
}

function formulario_em_branco() {
    return $_SERVER['REQUEST_METHOD'] == 'empty';
}

function idade_invalido(){
    $idade = $_POST['idade'];

    if($idade < 0 || $idade > 99)
       {
           echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        }
}


?>