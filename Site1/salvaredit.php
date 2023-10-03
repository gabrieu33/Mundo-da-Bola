<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['atualizar']))
    {
        $id = $_POST['idusuarios'];
        $nome = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
       
        
        $sqlInsert = "UPDATE usuarios 
        SET usuario='$nome',senha='$senha',email='$email'
        WHERE idusuarios=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: perfil.php');

?>