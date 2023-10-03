<?php

    if(!empty($_GET['idfeedback']))
    {
        include_once('config.php');

        $id = $_GET['idfeedback'];

        $sqlSelect = "SELECT *  FROM feedback WHERE idfeedback=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM feedback WHERE idfeedback=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location:perfil.php');
   
?>