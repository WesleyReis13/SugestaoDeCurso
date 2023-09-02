<?php 
    // Verifica se o formulário foi submetido
    if(isset($_POST["nome"])){
        $nome   = $_POST["nome"];
        $senha  = $_POST["senha"];

        if($nome === "adm" && $senha === "123"){
            header('Location:tabela.php');
            exit();
        }
            
        }
    if(isset($_POST["nome"])){
            $nome   = $_POST["nome"];
            $senha  = $_POST["senha"];
    
            if($nome === "adm2" && $senha === "123"){
                header('Location:editar.php');
                exit();
            }
                
            }    


    



?>