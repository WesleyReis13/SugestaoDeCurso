<?php 
    require_once('./conexao/conexao.php');
    require_once('./verificacoes/usuario.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Teste de Vocação</title>
</head>
<body>
    <header>
        <h1 class="text-center">Teste de Vocação</h1>
    </header>
    <main class="container mt-4">
        <form action="resultado.php" method="post">
            <h2>Em que tipo de atividade você se sente mais engajado?</h2>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pergunta1" id="pergunta1A" value="A" required>
                <label class="form-check-label" for="pergunta1A">Trabalhar com números e análises detalhadas</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pergunta1" id="pergunta1B" value="B" required>
                <label class="form-check-label" for="pergunta1B">Criar e expressar ideias através da escrita ou das artes</label>
            </div>

            <h2>Qual ambiente você prefere para o seu trabalho diário?</h2>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pergunta2" id="pergunta2A" value="A" required>
                <label class="form-check-label" for="pergunta2A">Um escritório organizado e tranquilo</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pergunta2" id="pergunta2B" value="B" required>
                <label class="form-check-label" for="pergunta2B">Um espaço criativo e inspirador com cores e decoração vibrantes</label>
            </div>

            <h2>Quais tipos de desafios despertam seu interesse?</h2>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3A" value="A" required>
                <label class="form-check-label" for="pergunta3A">Resolver quebra-cabeças lógicos e problemas complexos</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pergunta3" id="pergunta3B" value="B" required>
                <label class="form-check-label" for="pergunta3B">Encontrar maneiras inovadoras de abordar questões criativas</label>
            </div>

            <h2>Quando se trata de aprendizado contínuo, qual abordagem você prefere?</h2>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4A" value="A" required>
                <label class="form-check-label" for="pergunta4A">Estudar teorias e conceitos profundos para ampliar seus conhecimentos</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pergunta4" id="pergunta4B" value="B" required>
                <label class="form-check-label" for="pergunta4B">Explorar diferentes formas de expressão artística e criativa</label>
            </div>

            <!-- Repita para as demais perguntas -->
            
            <button type="submit" class="btn btn-primary mt-3">Ver Resultado</button>
        </form>
    </main>
    <footer class="text-center mt-3">
        <p>&copy; 2023 Teste de Vocação</p>
    </footer>
</body>
</html>
