<?php
session_start();
// if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
// {
    // unset($_SESSION['email']);
    // unset($_SESSION['senha']);
    // unset($_SESSION['nivel']);
    // header('location:login.php');
    // }
 if ($_SESSION){
$email = $_SESSION['email'];
$nivel = $_SESSION['nivel'];
 }
?>
<html>
<head>
	<title>Geek Club</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<link href="estilodosite.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="icon" href="icone.png">
	<script type="text/javascript">
function setaImagem(){
    var settings = {
        primeiraImg: function(){
            elemento = document.querySelector("#slider a:first-child");
            elemento.classList.add("ativo");
            this.legenda(elemento);
        },

        slide: function(){
            elemento = document.querySelector(".ativo");

            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }

        },

        proximo: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");

            if(elemento.nextElementSibling){
                elemento.nextElementSibling.classList.add("ativo");
                settings.legenda(elemento.nextElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");
                settings.primeiraImg();
            }
            intervalo = setInterval(settings.slide,4000);
        },

        anterior: function(){
            clearInterval(intervalo);
            elemento = document.querySelector(".ativo");

            if(elemento.previousElementSibling){
                elemento.previousElementSibling.classList.add("ativo");
                settings.legenda(elemento.previousElementSibling);
                elemento.classList.remove("ativo");
            }else{
                elemento.classList.remove("ativo");                     
                elemento = document.querySelector("a:last-child");
                elemento.classList.add("ativo");
                this.legenda(elemento);
            }
            intervalo = setInterval(settings.slide,4000);
        },

        legenda: function(obj){
            var legenda = obj.querySelector("img").getAttribute("alt");
            document.querySelector("figcaption").innerHTML = legenda;
        }

    }

    //chama o slide
    settings.primeiraImg();

    //chama a legenda
    settings.legenda(elemento);

    //chama o slide à um determinado tempo
    var intervalo = setInterval(settings.slide,4000);
    document.querySelector(".next").addEventListener("click",settings.proximo,false);
    document.querySelector(".prev").addEventListener("click",settings.anterior,false);
}

window.addEventListener("load",setaImagem,false);
</script>
</head>
<body>
	<header>
		<div id="banner">
		<div class="logo">
		<center><a href="home.php"><img src="geek-club.png" width="20%" height="20%" id="logobanner"></a></center>
		</div>
		<div id="pesquisa">
		<form action="buscado.php" method="post" id="pesquisa">
		<input type="text" id="texto" list="historico" placeholder="Buscar..."/>
		<button type="submit">
		<img  src="lupa.png" id="btn" alt="buscar"/>
		</button>
		</form></div>
		<datalist id="historico">
		</datalist>
		<?php 
                if(!$_SESSION){
                echo '<form class="cadastro"><br>
						<a href="cadastro.php"><img src="cadastro.png" id="cdt" width="85%" height="85%"></a>
					</form>';
                }else{
					echo'<a href="sair.php" title="Sair"><img src="login2.png" id="sair"></a>';
                }

         ?>
		</div>
	<div class="container">
		<nav class="menu">
			<ul>
				<li><a href="home.php">INICIO</a></li>
				<li><a href="vestuario.php" aria-haspopup="true">VESTUÁRIO</a>
					<ul class="vestuario">
						<li><a href="camisetas-masculinas.php">CAMISETAS MASCULINAS</a></li>
						<li><a href="camisetas-femininas.php">CAMISETAS FEMININAS</a></li>
						<li><a href="moletons.php">MOLETONS</a></li>
					</ul>
				</li>
				<li><a href="colecionaveis.php" aria-haspopup="true">COLECIONÁVEIS</a>
					<ul class="colecionaveis">
						<li><a href="replicas.php">RÉPLICAS</a></li>
						<li><a href="pop-funk.php">POP FUNKO</a></li>
						<li><a href="pelucias.php">PELÚCIAS</a></li>
					</ul>
				</li>	
				<li><a href="acessorios.php" aria-haspopup="true">ACESSÓRIOS</a>
					<ul class="acessorios">
						<li><a href="fone-ouvido.php">FONES DE OUVIDO</a></li>
						<li><a href="chaveiros.php">CHAVEIROS</a></li>
						<li><a href="malas-mochilas.php">MALAS E MOCHILAS</a></li>
					</ul>
				</li>
				<li><a href="jogos-brinquedos.php" aria-haspopup="true">JOGOS E BRINQUEDOS</a>
					<ul class="jogos-brinquedos">
						<li><a href="tabuleiros.php">TABULEIROS</a></li>
						<li><a href="video-games.php">VIDEO-GAMES</a></li>
						<li><a href="action-figure.php">ACTION FIGURES</a></li>
					</ul>
				</li>
				<li><a href="televisivos.php" aria-haspopup="true">TELEVISIVOS</a>
					<ul class="televisivos">
						<li><a href="filmes.php">FILMES</a></li>
						<li><a href="series.php">SÉRIES</a></li>
					</ul>
				</li>
				<li><a href="papelaria.php" aria-haspopup="true">PAPELARIA</a>
					<ul class="papelaria">
						<li><a href="cadernos.php">CADERNOS</a></li>
						<li><a href="estojos.php">ESTOJOS</a></li>
						<li><a href="agendas.php">AGENDAS</a></li>
						<li><a href="canetas.php">CANETAS</a></li>
					</ul>
				</li>
				<li><a href="sobre.php">SOBRE</a></li>
			</ul>
	</nav>
	</div>	
	<?php
		echo'<nav class="menu2">';
 			if(!$_SESSION){
            echo '<ul>
					<li><a href="login.php" title="Login"><img src="login.png" id="login"></a>
				</ul>';
            }else{
            echo '<ul>
					<li><a href="conta.php" title="Minha Conta"><img src="login.png" id="login"></a>
				</ul>';
            }
       	echo'</nav>'; 
	?>
</header>
	<div id="fundo">
	<main>
	<figure>
	<BR><BR><BR>
	<span class="trs next"></span>
	<span class="trs prev"></span>
	<div id="slider">
      <a href="#" class="trs"><img src="2.jpg" alt="" /></a>
      <a href="#" class="trs"><img src="3.jpg" alt="" /></a>
	  <a href="#" class="trs"><img src="4.jpg" alt="" /></a>
	  <a href="#" class="trs"><img src="5.jpg" alt="" /></a>
	</div>
	<figcaption></figcaption>
	</figure>
	<center><H1>TEMAS EM DESTAQUE</H1></center>
	<div id="imagens">
	<a href="star_wars.php"><img src="foto1.jpg" id="imagem1" class="img-responsive"></a>
	<a href="marvel.php"><img src="foto2.jpg" id="imagem2" class="img-responsive"></a>
	<a href="dc.php"><img src="ft3.jpg" id="imagem3" class="img-responsive"></a>
	<a href="musica.php"><img src="foto4.jpg" id="imagem4" class="img-responsive"></a>
	<br><br><br><br><br>
	<div id="teiaest">
	<img src="teia.png">
	</div>
	
	</div>
	</main>
	</div>
	<section id="social-icons">
			<nav class="social3">
			<ul class="social-links clearfix">
			SIGA O GEEK CLUB:
			<li class="youtube"><a href="https://www.youtube.com/channel/UCUNTXBw6Hn3-HsD43_qPtag" title="YouTube" target="_blank"><i class="icon-youtube"></i></a></li>
			<li class="instagram"><a href="#" title="Instagram" target="_blank"><i class="icon-instagram"></i></a></li>
			<li class="twitter"><a href="#" title="Twitter" target="_blank"><i class="icon-twitter"></i></a></li>
			<li class="facebook"><a href="#" title="Facebook" target="_blank"><i class="icon-facebook"></i></a></li>
			</ul>
			</nav>
		</section>
	<footer>
	<div class="logo2">
	<img src="geek-club.png" width="300%" height="300%">
	</div>
	<div id="rodape">
		<h3>CONTATO:</h3>
	<br>
		<i class="material-icons">call</i><h2 id="inform">(11) 3677-4000</h2>
	<br>
		<i class="material-icons">mail</i><h2 id="inform">GeekClub05@gmail.com</h2>
		<br>
		<img src="zendesk.png" id="zendesk"></i><h2 id="inform2">Geek Club</h2>
	</div>
		<center><h2>2023 © Geek Club - Todos os direitos reservados.</h2></center>
	</footer>
</body>
</html>