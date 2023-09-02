<?php 
    $servidor = "localhost";
    $usuario  = "root";
    $senha    =  "";
    $banco    = "teste_curso";
    $conecta  =  mysqli_connect($servidor,$usuario,$senha,$banco);

    if (mysqli_connect_error()){
        die("Conexão falhou" . mysqli_connect_errno());
    }


?>