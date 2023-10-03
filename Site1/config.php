<?php

$dbHost = 'LocalHost';
$dbusername = 'root';
$dbPassword = 'root'; 
$dbName = 'mundo_da_bola';

$conexao = new mysqli($dbHost,$dbusername,$dbPassword,$dbName);

//  if($conexao->connect_errno)
//    {
//        echo'Erro';
//    }
//    else{
//    echo"Conexao efetuada";
//    }


?>
