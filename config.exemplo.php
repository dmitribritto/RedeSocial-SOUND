<?php 
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'sound-login';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else 
    {
        echo "Conexão efetuada com sucesso";
    }
    */
?>