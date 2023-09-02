<?php 
    require_once('./conexao/resulTest.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Resultado do Teste</title>
</head>
<body>
    <header>
        <h1 class="text-center">Resultado do Teste</h1>
    </header>
    <main class="container mt-4">
        <h1 class="text-center">Resultado do Teste de Vocação</h1>
        <p class="text-center">Com base nas suas respostas, sugerimos o seguinte curso para você:</p>
        <p class="text-center"><?php echo $cursoSugerido; ?></p>
    </main>
    <footer class="text-center mt-3">
        <p>&copy; 2023 Teste de Vocação</p>
    </footer>

</body>
</html>
