<?php

function conectaBanco(){

    $host = 'mysql.hostinger.com.br';
    $user = 'u951541693_supor';
    $password = '960qq2MT@';
    $database = 'u951541693_onaya';
    
    $conexao = new mysqli($host, $user, $password, $database );
    
    return $conexao;
}

function selecionaTodosServicos(){
    
    $banco = conectaBanco();
    $sql = "SELECT * FROM servicos ORDER BY nomeServico";
    $resultado = $banco->query($sql);  
    
    while ($row = mysqli_fetch_array($resultado)) {
        $servicos[] = $row;
    }
          
    $banco->close();
    
    return $servicos;
    
}
    
?>