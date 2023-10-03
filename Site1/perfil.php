<?php

   session_start();
  // print_r($_SESSION);
  include_once('config.php');
  if((!isset($_SESSION['usuario'])== true)and(!isset($_SESSION['senha'])==true))
  {
        unset( $_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: login.php');
  }
  else{
    $logado = $_SESSION['usuario'];
    $senha = $_SESSION['senha'];
  }

  $id = ['idusuarios'];
 $sql = "SELECT * from usuarios ";
 $result = $conexao->query($sql);

 $sql2 = "Select *from feedback ";
 $result2 = $conexao->query($sql2);

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
<title>Perfil</title>
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
      <h2>Perfil</h2>
      <div class="m-5">
        <table class="">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Usuario</th>
            <th scope="col">Email</th>
            <th scope="col">Senha</th>
            <th scope="col">...</th>
            <th scope="col">...</th>
          </tr>
        </thead>
        <tbody>
          <?php
         while($user_data = mysqli_fetch_assoc($result ))
          {
            echo"<tr>";
            echo"<td>".$user_data['idusuarios']."</td>";
            echo"<td>".$user_data['usuario']."</td>";
            echo"<td>".$user_data['email']."</td>";
            echo"<td>".$user_data['senha']."</td>";
            echo"<td>
              <a class = 'btn btn-sm bnt-primary' href='edit.php?idusuarios=$user_data[idusuarios]'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761
                  5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                </svg>
               </a>
               </td>";
               echo"<td> <a class = 'btn btn-sm bnt-danger' href='delete.php?idusuarios=$user_data[idusuarios]'>
               <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg></a>
               </td>";
            echo"</tr>";
          }
          
          ?>
        </tbody>
        </table>
      </div>
    </div>

    <div class="card">
      <h2>SUAS SUGESTÕES</h2>
      <div>
      <table class="perfil">
        <thead>
          <tr>
            <th scope="col">sugestões:</th>
          
          </tr>
        </thead>
        <tbody>
          <?php
          while($user_data2 = mysqli_fetch_assoc($result2))
          {
            echo"<tr>";
            echo"<td>".$user_data2['sugestao']."</td>";
            echo"<td> <a class = 'btn btn-sm bnt-danger' href='deletarFeedback.php?idfeedback=$user_data2[idfeedback]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
<path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg></a>
            </td>";
          }
          
          ?>
        </tbody>
        </table>
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

