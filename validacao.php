<?php
$mensagem = []; // vetor das mensagens

function formulario_nao_enviado() {
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
}

function campos_invalidos(){ 
    global $mensagem;

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $ocupacao = $_POST['ocupacao'];

    if(empty($nome) || is_numeric($nome)) {
        $mensagem[0] = "Nome inválido! Preencha novamente!";
        
    }

    else if($idade < 0 || $idade > 99) {
        $mensagem[1] = "Idade inválida! Preencha novamente!";
        
    }

    else if(empty($ocupacao) || is_numeric($ocupacao)) {
        $mensagem[2] = "Ocupação inválida! Preencha novamente!";

    }
    
    else
    {
       $mensagem[3] = "Enviado com sucesso!";
       
       header('location:nova-pag.php');
       exit;
    }

}

if(!formulario_nao_enviado()) {
    campos_invalidos();
}
?>
