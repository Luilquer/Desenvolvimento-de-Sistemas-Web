<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <title>Primeiro Exemplo</title>
</head>
<body>

    <?php
        $resposta = 200;        
        switch ($resposta) {
            case 200:
            case 300: $mensagem = 'Resposta recebida';
                      break;
            case 400: $mensagem = 'Servidor não localizado';
                    break;
            case 500: $mensagem = 'Erro no servidor';
                    break;
            default: $mensagem = 'Erro desconhecido';                                    
        }  

        echo $mensagem . '<br>';
        
        $resposta = 550;

        $mensagem = match($resposta) {
            200, 300 => $mensagem = 'Resposta recebida',
            400 => $mensagem = 'Servidor não localizado',
            500 => $mensagem = 'Erro no servidor',
            default => 'Erro desconhecido',
        };

        echo $mensagem;
    ?>

</body>
</html>