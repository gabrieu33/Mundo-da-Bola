<?php
 session_start();


//  print_r($_REQUEST);
if(isset($_POST['login']) && !empty($_POST['user']) && !empty($_POST['senha']))
{
    include_once('config.php');
    $usuario = $_POST['user'];
    $senha = $_POST['senha'];

    // print('Usuario: ' . $usuario);
    // print_r('<br>');
    // print('Senha: ' . $senha);

    $mysqli = "SELECT * FROM  usuarios where usuario = '$usuario' and senha = '$senha'";
    $result = $conexao->query($mysqli);
    // print_r($mysqli);
    // print_r($result);
    if(mysqli_num_rows($result)<1)
    {
        unset( $_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else{
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
       header('Location: faq.php');
    }


}
else
{
    header('Location: login.php');
}
?>
