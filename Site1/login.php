<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="faqcss.css">
 <link rel="stylesheet" href="bodycss.css">
 
</head>
<title>Login/cadastro</title>
<body>
    <div class="header">
        <a href="index.php"><img class="imagem-topo" src="logo.png" alt=""></a> 
       </div>
    
    </footer>
<div class="topnav">
  <a href="index.php">PAGINA INICIAL</a>
  <a href="index.php">BRASILEIRÃO</a>
  <a href="login.php" style="float:right">Login/Cadastro</a>
  <a href="faq.php" style="float:right">FAQ</a>
</div>

<div class="row">
    <div class="leftcolumn">
      <div class="card">
        <h2>LOGIN</h2>
        <div>
          <form action="testlogin.php" method="POST">
            <label for="fname">Login</label>
            <input type="text" name="user" placeholder="Usuario" required>
            <label for="lname">Senha</label>
            <input type="text" name="senha" placeholder="Sua Senha" required>
            <label  for="lname"><a href="index.html" style="color: black;text-decoration: none;">Esqueceu Sua Senha ?</a></label><br>
            <label  for="fname"><a href="cadastro.php" style="color: black; text-decoration: none;">Cadastro</a></label>
            
            <input type="submit" name="login" value="LOGIN">
          </form>
        </div>
      </div>
    </div>
    <div class="card">
      <h3>REDES SOCIAIS</h3><br>
     <footer> <a href="http://Facebook.com" target="_blank"><img  src="logos/face.png" alt="Facebook" style="width: 5%;"></a></footer>
      <footer><a href="http://instagram.com" target="_blank"><img src="logos/instagram.png" alt="Instagram" style="width: 5%;"></a></footer>
     <footer><a href="https://github.com/" target="_blank"><img  src="logos/GitHub.png" alt="GitHub "  style="width: 5%;"></a></footer> 
    
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

