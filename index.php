<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
require_once 'validacao.php';
?>

<form method="post">

    <div class="container" style="text-align: center; width:95%">
        FORMULÁRIO SIMPLES
    </div>
    
    <div class="container">
        <label for="nome">
            NOME:
        </label>
        <input type="text" name="nome" id="nome" class="formulario" required>
    </div>
    
    <div class="container">
        <label for="idade">
            IDADE:
        </label>
        <input type="number" name="idade" id="idade" class="formulario" required>
    </div>

    <div class="container">
        <label for="ocupacao">
            OCUPAÇÃO:
        </label>
        <input type="text" name="ocupacao" id="ocupacao" class="formulario" required>
    </div>

    <button type="submit" class="button">AVANÇAR</button>

    <div class="erros">
        <?php
        if (isset($mensagem) && count($mensagem) > 0) {
            //pega cada item do vetor $mensagem
            foreach ($mensagem as $msg) {
                echo "<p style='color: black; font-size:30px; font-weight:bold'>$msg</p>";
            }
        }
        ?>
    </div>

</form>

</body>
</html>
