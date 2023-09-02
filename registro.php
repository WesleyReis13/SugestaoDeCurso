<?php 
    require_once('./conexao/conexao.php');
    require_once('./conexao/inserir_registro.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <header>
        <h1 class="text-center">Formulário de Cadastro</h1>
    </header>
    <main class="container mt-4">
        <form class="registration-form" action="registro.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="number" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">País:</label>
                <input type="text" class="form-control" id="pais" name="pais" required>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-select" id="sexo" name="sexo">
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary submit-button" type="submit">Registrar</button>
            </div>
        </form>
    </main>
    <footer class="text-center mt-3">
        <p>&copy; 2023 Seu Site. Todos os direitos reservados.</p>
    </footer>

   
</body>
</html>

