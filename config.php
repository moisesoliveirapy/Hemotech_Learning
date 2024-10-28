<?php

$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '123456';
$dbName = 'csb';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao -> connect_errno){
    echo("Erro");
}else {
    echo("Conexão bem sucedida");
}
?>