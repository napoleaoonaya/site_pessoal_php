<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_status();
include ("./conexao.php");

$conexao = conectaBanco();

$servico = filter_input(INPUT_GET, 'prod');

$consulta = $conexao->prepare("SELECT *FROM servicos WHERE idServico= :prod");

$consulta -> bindValue(':prod',$servico);

$consulta -> execute();

$linhas = $consulta -> rowCount();

echo $linhas;

foreach ($consulta as $mostra):
endforeach;

?>