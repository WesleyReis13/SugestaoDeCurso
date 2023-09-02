<?php 
    // inserir os dados do usuario no banco de dados
    if(isset($_POST["nome"])){
        $nome =         $_POST["nome"];
        $sobrenome =    $_POST["sobrenome"];
        $email =        $_POST["email"];
        $telefone =     $_POST["telefone"];
        $pais =         $_POST["pais"];
        $cidade =       $_POST["cidade"];
        $sexo =         $_POST["sexo"];
        $senha =        $_POST["senha"];
        $endereco =     $_POST["endereco"];

        if(!empty($nome) && !empty($sobrenome) && !empty($usuario) && !empty($email) && !empty($telefone) && !empty($pais) && !empty($cidade) && !empty($sexo) && !empty($senha) && !empty($endereco) ){
            $senhacriptografada = password_hash($senha, PASSWORD_DEFAULT);
            $inserir = "INSERT INTO cadastro(nome,sobrenome,email,telefone,pais,cidade,sexo,senha,endereco) VALUES('{$nome}','{$sobrenome}','{$email}','{$telefone}','{$pais}','{$cidade}','{$sexo}', '{$senhacriptografada}','{$endereco}')";
            $inserir_registro = mysqli_query($conecta,$inserir);

            if(!$inserir_registro){
                die("erro ao cadastrar os dados");
            }
        }
    }



?>