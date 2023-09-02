<?php
// Recebendo as respostas do formulário
$pergunta1 = $_POST['pergunta1'];
$pergunta2 = $_POST['pergunta2'];
$pergunta3 = $_POST['pergunta3'];
$pergunta4 = $_POST['pergunta4'];

// Calculando a pontuação total com base nas respostas
$pontuacao = 0;

if ($pergunta1 == 'A') {
    $pontuacao += 2;
} elseif ($pergunta1 == 'B') {
    $pontuacao += 1;
}

if ($pergunta2 == 'A') {
    $pontuacao += 2;
} elseif ($pergunta2 == 'B') {
    $pontuacao += 1;
}

if ($pergunta3 == 'A') {
    $pontuacao += 2;
} elseif ($pergunta3 == 'B') {
    $pontuacao += 1;
}

if ($pergunta4 == 'A') {
    $pontuacao += 2;
} elseif ($pergunta4 == 'B') {
    $pontuacao += 1;
}

// Sugerindo um curso com base na pontuação
if ($pontuacao >= 6) {
    $cursoSugerido = "Curso Avançado em Análise de Dados";
} elseif ($pontuacao >= 4) {
    $cursoSugerido = "Curso de Escrita Criativa e Expressão Artística";
} else {
    $cursoSugerido = "Curso de Desenvolvimento de Habilidades Multidisciplinares";
}