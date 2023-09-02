<?php 
    require_once('./conexao/conexao.php');
    require_once('./conexao/exibir_tabela.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/style.css">
    <!-- Link para o arquivo CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dados do Banco de Dados</title>
</head>
<body>
    <header>
        <h1 class="text-center">Dados do Banco de Dados</h1>
    </header>
    <main class="container mt-4">
        <div class="d-flex justify-content-between mb-3">
            <div class="items-per-page">
                <label for="items" class="form-label">Itens por página:</label>
                <select class="form-select" id="items" name="items">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                </select>
            </div>
            <div class="search-bar">
                <input type="text" class="form-control" id="search" placeholder="Pesquisar...">
            </div>
        </div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>telefone</th>
                <th>País</th>
                <th>Cidade</th>
                <th>Endereço</th>
            </tr>
            <?php while($linha = mysqli_fetch_assoc($consulta_tabela)){ ?>
            <tr>
                
                <td><?php echo $linha["id"]; ?></td>
                <td>Ciência da Computação</td>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["sobrenome"]; ?></td>
                <td><?php echo $linha["email"]; ?></td>
                <td><?php echo $linha["telefone"]; ?></td>
                <td><?php echo $linha["pais"]; ?></td>
                <td><?php echo $linha["cidade"]; ?></td>
                <td><?php echo $linha["endereco"]; ?></td>
                <?php } ?>
            </tr>
        </table>
    </main>
    <footer class="text-center mt-3">
        <p>&copy; 2023 Seu Site. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
