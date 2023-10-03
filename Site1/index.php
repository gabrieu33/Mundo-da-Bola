<?php

//    session_start();
//   // print_r($_SESSION);
//   if((!isset($_SESSION['usuario'])== true)and(!isset($_SESSION['senha'])==true))
//   {
//         unset( $_SESSION['usuario']);
//         unset($_SESSION['senha']);
//         header('Location: login.php');
//   }
//   else{
//     $logado = $_SESSION['usuario'];
//   }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="modelo.css">
    <title>Mundo da Bola</title>
</head>
<body>
    <header>
        <nav>
         
            <a href="index.php">BRASILEIRO</a>
            <a href="faq.php">FAQ</a>
            <a href="perfil.php">PERFIL</a>
           
        </nav>
        <br>
        <figure>
            <img id="imagem-topo" src="logo.png" alt="logo" style="width: 20%;"> <img id="imagem-topo" src="img/Brasileiro Série A HD.png" alt="Brasileiro" >
        </figure>
    </header>
    <br>
    <section class="conteudo" id="grid-conteudo">
        <h5>Brasileirão Série A</h5>
        <br>
        <div class="grid">
            <div>
                <figure>
                    <img class="imagem-site" src="img/América Mineiro HD.png" alt="América">
                    <figcaption><a href="times/america_mg/america_mg.html">América Mineiro</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Athletico Paranaense HD.png" alt="Athletico">
                    <figcaption><a href="times/athetico/athletico.html">Athletico Paranaense</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Atlético Mineiro.png" alt="Atlético">
                    <figcaption><a href="times/mineiro/mineiro.html">Atlético Mineiro</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Bahia.png" alt="Bahia">
                    <figcaption><a href="times/bahia/bahia.html">Bahia</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Botafogo.png" alt="Botafogo">
                    <figcaption><a href="times/botafogo/botafogo.html">Botafogo</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Corinthians.png" alt="Corinthians">
                    <figcaption><a href="times/corinthias/corinthias.html">Corinthians</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Coritiba.png" alt="Coritiba">
                    <figcaption><a href="times/coritiba/coritiba.html">Coritiba</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Cruzeiro.png" alt="Cruzeiro">
                    <figcaption><a href="times/cruzeiro/cruzeiro.html">Cruzeiro</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Cuiabá.png" alt="Cuiabá">
                    <figcaption><a href="times/cuiaba/cuiaba.html">Cuiabá</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Flamengo.png" alt="Flamengo">
                    <figcaption><a href="times/flamengo/flamengo.html">Flamengo</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Fluminense.png" alt="Fluminense">
                    <figcaption><a href="times/fluminense/fluminense.html">Fluminense</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Fortaleza.png" alt="Fortaleza">
                    <figcaption><a href="times/fortal/fortal.html">Fortaleza</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Goiás.png" alt="Goiás">
                    <figcaption><a href="times/Goias/goias.html">Goiás</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Grêmio.png" alt="Grêmio">
                    <figcaption><a href="times/gremio/gremio.html">Grêmio</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Internacional.png" alt="Internacional">
                    <figcaption><a href="times/inter/inter.html">Internacional</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Palmeiras.png" alt="Palmeiras">
                    <figcaption><a href="times/palmeiras/palmeiras.html">Palmeiras</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Red Bull Bragantino.png" alt="Bragantino">
                    <figcaption><a href="times/rd/rd.html">Red Bull Bragantino</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Santos.png" alt="Santos">
                    <figcaption><a href="times/santos/santos.html">Santos</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/São Paulo.png" alt="São Paulo">
                    <figcaption><a href="times/saopaulo/saopaulo.html">São Paulo</a></figcaption>
                </figure>
            </div>
            <div>
                <figure>
                    <img class="imagem-site" src="img/Vasco da Gama.png" alt="Vasco">
                    <figcaption><a href="times/vasco/vasco.html">Vasco da Gama</a></figcaption>
                </figure>
            </div>
        </div>
        <br>
        <div class="autor">
            <br>
            <figure>
               
            </figure>
            <br>
            <br>
            <h5>Tecnologia em Análise e Desenvolvimento de Sistemas no Instituto de Ciência e Tecnologia do Amazonas.</h5>
            <br>
        </div>
        <br>
    <footer>
        <h3>
            Mundo da Bola
        </h3>
        <br>
        <h3>Contato: joaopedro@gmail.com</h3>
        <h3>Contato: gabrielsouzaneves@gmail.com</h3>
        <br>
        <h6>Desenvolvido por: J.Pedro, Gabriel Neves e Andre Guedes</h6>
    </footer>
</body>
</html>