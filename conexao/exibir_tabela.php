<?php 
    $tabela = "SELECT * FROM cadastro";
    $consulta_tabela = mysqli_query($conecta,$tabela);

    if(!$consulta_tabela){
        die("Erro na consulta na Tabela");
    }


?>