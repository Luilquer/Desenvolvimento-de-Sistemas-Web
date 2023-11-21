<!-- 
Usando o PHP, HTML, etc. crie um formulário parecido com a imagem abaixo e faça
a validação se os campos enviados são números válidos, caso não seja, exibir uma
mensagem avisando que o valor não é numérico. Dica: utilize a função
is_numeric(value).


 -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../external/css/bootstrap.min.css">
    <title>Atividade da semana 06</title>
</head>

<body>
    <div class="container">
        <?php
        if (is_numeric($_GET["valor1"]) && is_numeric($_GET["valor2"])) {

            echo 'Os valores submetidos foram: <br />';
            echo 'Valor 1: ' . (int)$_GET['valor1'];
            echo '<br />';
            echo 'Valor 2: ' . (int)$_GET['valor2'];
            echo '</br>';

            $soma = (int)$_GET['valor1'] + (int)$_GET['valor2'];

            echo 'Soma: ' . $soma;
        } else {
            echo 'O valor não é numérico';
        }
        ?>
        <br />
        <a href="atividade06_form.php">Voltar ao inicio</a>
    </div>

    <script src="external/js/jquery-3.6.0.min.js"></script>
    <script src="external/js/bootstrap.min.js"></script>
</body>

</html>