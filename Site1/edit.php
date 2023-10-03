<?php
    include_once('config.php');

    if(!empty($_GET['idusuarios']))
    {
        $id = $_GET['idusuarios'];
        $sqlSelect = "SELECT * FROM usuarios WHERE idusuarios=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $usuario = $user_data['usuario'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
            }
        }
        else
        {
            header('Location: perfil.php');
        }
    }
    else
    {
        header('Location: perfil.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="faqcss.css">
 <link rel="stylesheet" href="bodycss.css">
 
</head>
<title>Editar Perfil</title>
<body>
    <div class="header">
        <a href="index.php"><img class="imagem-topo" src="logo.png" alt=""></a> 
       </div>
    
    </footer>
<div class="topnav">
  <a href="index.html">PAGINA INICIAL</a>
  <a href="index.html">BRASILEIRÃO</a>
  <a href="perfil.php" style="float:right"><?php echo $usuario ?></a>
  <a href="faq.php" style="float:right">FAQ</a>
</div>

<div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>EDITAR PERFIL</h2>
        <div>
          <form action="salvaredit.php" method="POST" >
            <label for="fname">Usuario</label>
            <input type="text" name="usuario" id = "usuario" value="<?php echo $usuario ?>" required>
            <label for="fname">Email</label>
            <input type="text" name="email" id = "email" value=" <?php echo $email ?>" required>
            <label for="lname">Senha</label>
            <input type="text" name="senha" id="senha" value="<?php echo $senha ?>" required>
            <input type="hidden" name="idusuarios" id="idusuarios" value="<?php echo $id ?>">   
            <input type="submit" name="atualizar" id = "atualizar" value="atualizar">
                 
          </form>
        </div>
      </div>
    </div>
    <div class="card">
      <h3>REDES SOCIAIS</h3><br>
     <footer> <a href="http://Facebook.com" target="_blank"><img  src="logos/face.png" alt="Facebook" style="width: 10%;"></a></footer>
      <footer><a href="http://instagram.com" target="_blank"><img src="logos/instagram.png" alt="Instagram" style="width: 10%;"></a></footer>
     <footer><a href="https://github.com/" target="_blank"><img  src="logos/GitHub.png" alt="GitHub "  style="width: 10%;"></a></footer> 
    
    </div>
  </div>
</div>

<div class="footer">
  <h3>
    Mundo da Bola
</h3>
<br>
<h3>Contato: joaopedro@gmail.com</h3>
<h3>Contato: gabrielsouzaneves3@gmail.com</h3>
<br>
<h6>Desenvolvido por: J.Pedro, Gabriel Neves e Andre Guedes</h6>
</div>

</body>
</html>

