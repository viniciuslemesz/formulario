<?php
$mensagem = []; // vetor das mensagens

function formulario_nao_enviado() {
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
}

function campos_invalidos(){ 
    global $mensagem;

    $hobbie = $_POST['hobbie'];
    $cor = $_POST['cor'];
    $esporte = $_POST['esporte'];
    $pet = $_POST['pet'];

    if(empty($hobbie) || is_numeric($hobbie)) {
        $mensagem[0] = "Hobbie inválido! Preencha novamente!";
        
    }

    else if((empty($cor) || is_numeric($cor)) ){
        $mensagem[1] = "Cor inválida! Preencha novamente!";
        
    }

    else if(empty($esporte) || is_numeric($esporte)) {
        $mensagem[2] = "Esporte inválido! Preencha novamente!";

    }

    else if(empty($pet) || is_numeric($pet)) {
        $mensagem[3] = "Nome do Pet inválido! Preencha novamente!";

    }
    
    else
    {
       $mensagem[4] = "Enviado com sucesso!";
    }

}

if(!formulario_nao_enviado()) {
    campos_invalidos();
}
?>