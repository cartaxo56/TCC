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
?><html>
<head>
<title>Geek Club</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<link href="estilodosite.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="icon" href="icone.png">
</head>
<body>
	<header>
		<div id="banner">
		<div class="logo">
		<center><a href="home.php"><img src="geek-club.png" width="20%" height="20%" id="logobanner"></a></center>
		</div>
		<div id="pesquisa">
		<form action="buscado.php" method="post" id="pesquisa">
		<tr><td><input type="text" id="texto" name="palavra" list="historico" placeholder="Buscar..."/></td>
		<td><button type="submit">
			<img  src="lupa.png" id="btn" alt="buscar"/>
		</button></td></tr>
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
	<div class="conteudo_pequeno">
		<div class="conteudo_texto">
		<H5>História</h5>
		<p id="historia">
		Nossa história começa em 2018. Fundada por um grupo de estudantes fanáticos por cultura-pop,
		que desejavam expandir este "universo" por meio de um site de compras online, fornecendo produtos de qualidades para aqueles que gostariam de ter algo especial do qual é fã. Temos boas avaliações de usuários que acessam nosso site, e tentamos melhorá-lo constatemente.
		</P>
		</div>
		<div class="conteudo_imagem">
			<img src="planta2.jpg" width="30%" height="30%" id="planta3">
		</div>
	</div>
	<div class="fundo_madeira">
		<div class="principais_pizzas">
			<div class="pizza1">
				<H6>Missão</H6>
			<p>Temos o  objetivo, de  que os nossos clientes possuam  fácil acesso e comprar com segurança os produtos desejados,procurando satisfazer-los  de acordo com  a sua  necessidade.</p>
			</div>	
			<div class="pizza2">
				<h6>Visão</h6>
			<p>O Geek Club foi desenvolvido para levar produtos diferenciados aos clientes, temos em mente que a satisfação do cliente seja de extrema importancia, e que possa ser diponibilizado para todos que gostam e que se interessam por esse "Universo".</p>
			</div>
			<div class="pizza3">
				<h6>Valores</h6>
			<p>Nossa empresa carrega a qualidade e respeito pelos os nossos clientes, levando produtos com segurança e que cheguem de otimo estado, além de preços acesséveis, e disponibiliza  formas de pagamentos seguros e  livre de problemas.<p>
			</div>
		</div>
	</div>
	<div class="conteudo_funcionamento">
		<div class="texto_funcionamento">
			<div class="horario">
			<h2 id="horariot">HORÁRIO DE<br>FUNCIONAMENTO</h2>
			</div>
			<div class="horario2">
			<p id="horariop">DE SEGUNDA A SÁBADO 10:00 - 22:00<br>DOMINGOS E FERIADOS 12:00 - 22:00</p>
			</div>
  		</div>
	</div>
	<div class="conteudo_contato">
		<div class="endereço">
	<H5 id="endec">Nosso endereço</H5>
		</div>
	<div class="contato_texto">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7314.198702815357!2d-46.654329!3d-23.564875!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c91beccacd%3A0xdec333e181d06b9a!2sR.+Itapeva%2C+700+-+Cerqueira+C%C3%A9sar%2C+S%C3%A3o+Paulo+-+SP%2C+01332-000!5e0!3m2!1spt-BR!2sbr!4v1525105748441" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="texto_contato">
	<p style="text-align: center;" id="ppp1">
				<img src="localizacao.png"><br>
	R. Itapeva, 700 - Cerqueira César - São Paulo - SP - 01332-000<br>
	</p>
	<p style="text-align: center;" id="ppp">
				<img src="telefone.png"><br>
	Telefone: (11) 3677-4000<br>
	</p>
	<p style="text-align: center;" id="ppp">
				<img src="email.png" id="ppp"><br>
	Email: GeekClub05@gmail.com
	</p>
		</div>
	</div>
</main>
</div>
</div>

	<section id="social-icons">
			<nav class="social3">
			<ul class="social-links clearfix">
			SIGA O GEEK CLUB:
			<li class="youtube"><a href="#" title="YouTube" target="_blank"><i class="icon-youtube"></i></a></li>
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