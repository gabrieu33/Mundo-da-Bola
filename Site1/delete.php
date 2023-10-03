<?php

    if(!empty($_GET['idusuarios']))
    {
        include_once('config.php');

        $id = $_GET['idusuarios'];

        $sqlSelect = "SELECT *  FROM usuarios WHERE idusuarios=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios WHERE idusuarios=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location:login.php');
   
?>