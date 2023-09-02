<?php 
    require_once('./conexao/conexao.php');
    require_once('./verificacoes/adm.php');
    require_once('./verificacoes/usuario.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form class="registration-form" action="index.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-primary submit-button" name="login">Login</button>
        </form>

        <!-- Adicione um link para a página de registro -->
        <p>Não tem uma conta? <a href="registro.php">Registrar</a></p>
    </main>
    <footer>
        <p>&copy; 2023 Teste de Vocação</p>
    </footer>

   
</body>
</html>
