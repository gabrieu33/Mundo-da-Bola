<?php

   session_start();
  // print_r($_SESSION);
  if((!isset($_SESSION['usuario'])== true)and(!isset($_SESSION['senha'])==true))
  {
        unset( $_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
  }
  else{
    $logado = $_SESSION['usuario'];
  }
    if(isset($_POST['submit']))
    {
    include_once('config.php');
    $nome = $_POST['primeironome'];
    $sugestao = $_POST['sugestao'];
    $result = mysqli_query($conexao, "INSERT INTO feedback(nome,sugestao)
    VALUES('$nome','$sugestao')");
}
// if(isset($_POST['submit']))
// {
//   include_once('config.php');
//     $nome = $_POST['nome1'];
//     $sobrenome = $_POST['nome2'];
//     $result = mysqli_query($conexao, "INSERT INTO avaliacao(nome,sobrenome)
//     VALUES('$nome','$sobrenome')");
// }
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="faqcss.css">
 <link rel="stylesheet" href="bodycss.css">
 <script src="noticias/noticias.js"></script>
<style>table {
  border-collapse: collapse;
  width: 40%;
}

th, td {
  text-align: center;
  padding: 15px;
}
td{
  font-weight: bold;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}</style>
 
</head>
<title>FAQ</title>
<body>

<div class="header">
 <a href="index.php"><img class="imagem-topo" src="logo.png" alt=""></a> 
</div>
<footer class="rodape_inicial">
        <article class="img_times">
            <a href="times/america_mg/america_mg.html"><img src="times/america_mg/america_mg.png" class="img_times"  ></a>
        </article>
        <article class="img_times">
           <a href="times/athetico/athletico.html"> <img src="times/athetico/athetico.png" class="img_times"></a>
        </article>
        <article class="img_times">
           <a href="times/mineiro/mineiro.html"><img src="times/mineiro/mineiro.png" class="img_times"></a> 
        </article>
        <article class="img_times">
           <a href="times/bahia/bahia.html"><img src="times/bahia/bahia.png" class="img_times"></a> 
        </article>
        <article class="img_times">
           <a href="times/botafogo/botafogo.html"> <img src="times/botafogo/botafogo.png" class="img_times" style="width: 45%;"></a>
        </article>
        <article class="img_times">
            <a href="times/corinthias/corinthias.html"><img src="times/corinthias/corinthias.png" class="img_times" style="width: 43%;"></a>
        </article>
        <article class="img_times">
           <a href="times/coritiba/coritiba.html"> <img src="times/coritiba/coritiba.png" class="img_times"></a>
        </article>
        <article class="img_times">
            <a href="times/cruzeiro/cruzeiro.html"><img src="times/cruzeiro/cruzeiro.png" class="img_times"></a>
        </article>
        <article class="img_times">
           <a href="times/cuiaba/cuiaba.html"> <img src="times/cuiaba/cuiaba.png" class="img_times"></a>
        </article>
        <article class="img_times">
           <a href="times/flamengo/flamengo.html"> <img src="times/flamengo/flamengo.png" class="img_times"></a>
        </article>
        <article class="img_times">
            <a href="times/fluminense/fluminense.html"><img src="times/fluminense/fluminense.png" class="img_times"></a>
        </article>
        <article class="img_times">
            <a href="times/fortal/fortal.html"><img src="times/fortal/fortal.png" class="img_times"></a>
        </article>
        <article class="img_times">
           <a href="times/Goias/goias.html"> <img src="times/Goias/goias.png" class="img_times"></a>
        </article>
        <article class="img_times">
           <a href="times/gremio/gremio.html"> <img src="times/gremio/gremio.png" class="img_times" style="width: 40%;"></a>
        </article>
        <article class="img_times">
           <a href="times/inter/inter.html"> <img src="times/inter/internacional.png" class="img_times"></a>
        </article>
        <article class="img_times">
            <a href="times/palmeiras/palmeiras.html"><img src="times/palmeiras/palmeiras.png" class="img_times"></a>
        </article>
        <article class="img_times">
           <a href="times/rd/rd.html"> <img src="times/rd/rd braga.png" class="img_times" style="width: 55%; position: inherit;" ></a>
        </article>
        <article class="img_times">
            <a href="times/santos/santos.html"><img src="times/santos/santos.png" class="img_times"></a>
        </article>
        <article class="img_times">
           <a href="times/saopaulo/saopaulo.html"> <img src="times/saopaulo/saopaulo.png" class="img_times"style="width: 35%;"></a>
        </article>
        <article class="img_times">
            <a href="times/vasco/vasco.html"><img src="times/vasco/vasco.png" class="img_times" style="width: 40%;"></a>
        </article>
    
    </footer>
<div class="topnav">
  <a href="index.html">PAGINA INICIAL</a>
  <a href="index.html">BRASILEIRÃO</a>
  <a href="sair.php" style="float:right">SAIR</a>
  <a href="perfil.php" style="float:right"><?php echo"$logado" ?></a>
  <a href="faq.php" style="float:right">FAQ</a>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>SUGESTÕES</h2>
      <div>
        <form method="POST" action="faq.php">
          <label for="fname">Usuario</label>
          <input type="text" id="nome" name="primeironome" placeholder="Seu Usuario">

          <label for="country">Sugestao</label>
          <input type="text" id="sugestao" name="sugestao" placeholder="Sua Sugestao" maxlength="80" oninput="updateCharacterCount(this)">
          <span id="characterCount">80</span> caracteres restantes
          
          <script>
          function updateCharacterCount(input) {
            var maxLength = input.getAttribute("maxlength");
            var currentLength = input.value.length;
            var remainingLength = maxLength - currentLength;
            
            document.getElementById("characterCount").textContent = remainingLength;
          }
          </script>
          
          <input type="submit" name="submit" id='submit'>
        </form>
      </div>
    </div>

    <div class="card">
      <h2>CRITICAS (EM TESTE)</h2>
      <div>
        <form method="POST" action="faq.php" >
          <label for="name">NOME</label>
          <input type="text" id="nome1" name="nome1" placeholder="Seu Nome">
          <label for="name">SOBRENOME</label>
          <input type="text" id="nome2" name="nome2" placeholder="Seu Sobrenome">
      
            <label for="exp">Sua Experiencia</label>
          <select id="exp" name="exp">
            <option value="ruim">Ruim</option>
            <option value="bom">Bom</option>
            <option value="otimo">Otimo</option>
          </select> 
          <input type="submit" name="submit" id='submit'>
        </form>
      </div>
    </div>
  </div>

  

  <div class="rightcolumn">
    <div class="card">
      <h2>ULTIMA NOTICIAS</h2>
      <div id="noticias">
        <div id="noticiasDiv">
            <h2></h2>
            <p></p>
        </div>
    </div>
    <div class="card">
      <h3>Tabela Brasileirão</h3>
      <table>
        <tr>
          <th>Posição</th>
          <th>Time</th>
          <th>P</th>
          <th>V</th>
          <th>SG</th>
        </tr>
        <tr>
          <td>1</td>
          <td>
            <img src="times/botafogo/botafogo.png" alt="Time 1" width="50" height="50">
          </td>
          <td>10</td>
          <td>8</td>
          <td>+15</td>
        </tr>
        <tr>
          <td>2</td>
          <td>
            <img src="times/palmeiras/palmeiras.png" alt="Time 2" width="50" height="50">
          </td>
          <td>10</td>
          <td>7</td>
          <td>+10</td>
        </tr>
        <tr>
          <td>3</td>
          <td>
            <img src="times/flamengo/flamengo.png" alt="Time 3" width="50" height="50">
           
          </td>
          <td>10</td>
          <td>6</td>
          <td>+8</td>
        </tr>
        <tr>
          <td>4</td>
          <td>
            <img src="times/mineiro/mineiro.png" alt="Time 4" width="50" height="50">
          
          </td>
          <td>10</td>
          <td>5</td>
          <td>+2</td>
        </tr>
        <tr>
          <td>5</td>
          <td>
            <img src="times/fluminense/fluminense.png" alt="Time 5" width="50" height="50">
          </td>
          <td>10</td>
          <td>3</td>
          <td>-10</td>
        </tr>
      </table>
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

