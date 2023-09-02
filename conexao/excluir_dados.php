<?php 
   if(isset($_POST["id"])){
     $uid = $_POST["id"];

     $exclusao = "DELETE FROM cadastro WHERE id = {$uid}";
     $consulta_exclusao = mysqli_query($conecta,$exclusao);
     if(!$consulta_exclusao){
        die("Falha na exclusão");
     }else{
       header('Location:editar.php');
       exit;
     }


   }



?>