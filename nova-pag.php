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
require_once 'validacao-extra.php';
?>

<div class="ajustar-form">

    
    <form class="form" method="post">
        
        <div class="container" style="text-align: center; width:95%">
          <p><a href="index.php" style="color:red">PAGINA INICIAL</a></p>   FORMULÁRIO SIMPLES
        </div>
        
        <div class="container">
            <label for="nome">
                NOME:
            </label>
            <input type="text" name="nome" id="nome" class="formulario" disabled>
        </div>
        
        <div class="container">
            <label for="idade">
                IDADE:
            </label>
            <input type="number" name="idade" id="idade" class="formulario" disabled>
        </div>
        
    <div class="container">
        <label for="ocupacao">
            OCUPAÇÃO:
        </label>
        <input type="text" name="ocupacao" id="ocupacao" class="formulario" disabled>
    </div>
    
    <button type="submit" class="button">AVANÇAR</button>

        
        <div class="extras" >
            <div class="segundo-container">
                <label for="hobbie">Hobbie:</label>
                <input type="text" id="hobbie" required>
            </div>
            
            <div class="segundo-container">
                <label for="cor">Cor favorita:</label required>
                <input type="text" id="cor">
            </div>
            
            <div class="segundo-container">
                <label for="esporte">Esporte que pratica:</label required>
                <input type="text" id="esporte">
            </div>
            
            <div class="segundo-container">
                <label for="pet">Animal de estimação:</label required>
                <input type="text" id="pet">
            </div>
            
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
    

</div>
    
</div>


</body>
</html>
