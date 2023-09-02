<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Alteração de Dados</title>
</head>
<body>
    <header>
        <h1 class="text-center">Alteração de Dados do Usuário</h1>
    </header>
    <main class="container mt-4">
        <form>
            <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text" class="form-control" id="id" name="id" readonly value="1">
            </div>
            <div class="mb-3">
                <label for="curso" class="form-label">Curso:</label>
                <input type="text" class="form-control" id="curso" name="curso" value="Ciência da Computação">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="João">
            </div>
            <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="Silva">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="joao@example.com">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" value="123-456-7890">
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">País:</label>
                <input type="text" class="form-control" id="pais" name="pais" value="Brasil">
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="São Paulo">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <input type="text" class="form-control" id="sexo" name="sexo" value="Masculino">
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="Rua Exemplo, 123">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                <a href="pagina-de-listagem.html" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </main>
    <footer class="text-center mt-3">
        <p>&copy; 2023 Seu Site. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
