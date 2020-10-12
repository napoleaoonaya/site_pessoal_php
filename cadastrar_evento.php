<?php 
        include "conexao.php";
                            
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $situacao = $_POST["situacao"];
        
        $query = "INSERT INTO `eventos` (`title`, `start`, `situacao`) VALUES ('$nome', '$data', '$situacao')";
        
        $exec = $conexao->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
       
        
?>