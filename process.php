<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento do Formulário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Dados Recebidos</h2>
        <?php
            // Exibir os dados enviados pelo formulário
            echo "<p><strong>Nome:</strong> " . $_POST['nome'] . "</p>";
            echo "<p><strong>Telefone:</strong> " . $_POST['telefone'] . "</p>";
            echo "<p><strong>E-mail:</strong> " . $_POST['email'] . "</p>";
            echo "<p><strong>Mensagem:</strong> " . $_POST['mensagem'] . "</p>";
            
            // Exibir cabeçalhos HTTP e método utilizado
            echo "<h2>Cabeçalhos HTTP e Método Utilizado</h2>";
            echo "<pre>";
            print_r(apache_request_headers());
            echo "</pre>";
            echo "<p><strong>Método Utilizado:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";
        ?>
    </div>
</body>
</html>
