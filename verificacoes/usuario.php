<?php 
    require_once('./conexao/conexao.php');
    // Verifica se o formulário foi submetido 
    if(isset($_POST["login"])){
        $nome   =    $_POST["nome"];
        $senha  =    $_POST["senha"];

        // Consulta SQL para verificar o usuário no banco de dados
        $busca = "SELECT nome,senha FROM cadastro WHERE nome = '$nome' AND senha = '$senha'";
        $busca_user = mysqli_query($conecta,$busca);

        // Verifica se houve um erro na conexão
        if(!$busca_user){
            die("Erro na conexão ");
        }

        if($busca_user->num_rows == 1){
            header("Location:testeDeVocacao.php");
            exit();
        }else{
            echo "Usuario ou senha incorretos.";
        }




        }

    mysqli_close($conecta);    

    




?>