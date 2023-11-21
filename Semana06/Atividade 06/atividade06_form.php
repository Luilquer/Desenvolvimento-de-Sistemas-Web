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
    <title>Atividade da semana 07</title>
</head>

<body>

    <div class="container">
        <form action="atividade06_get.php" method="get">
            <label for="name" class="form-label">Nome: </label>
            <br>
            <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="container">

        <input type="submit" value="Verificar sessão" class="form-control">
    </div>
    </form>
    </br>

    <!-- <button id="somar" type="button" class="btn-outline-success" onclick="soma(document.getElementById('valor1').value, document.getElementById('valor2').value)">
        Somar
    </button> -->

    </div>

    <!-- <script src="js/tarefa03.js"></script> -->
</body>

</html>