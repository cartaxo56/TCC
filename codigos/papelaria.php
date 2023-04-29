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
	
	<div id="produtos">
	
	<?php
			$link=mysqli_connect('localhost','root','12345','geekclub');
	?>
	
	<?php
		$sql="SELECT * FROM produtos WHERE categoria = 6"; 
		$resultado=mysqli_query($link,$sql);
	

		while($resul = mysqli_fetch_array($resultado)){
			echo "<div id='produto'><img id='imgpd' src='images/".$resul['nome_imagem']."' width='200' height='200'/>";
			echo "<div id='textopr'><div class='nome'>" . $resul["nome"]. "</div><br>";
			echo "<div class='preco'>R$" . $resul["preco"]. "</div><br>";
			echo "<div class='desc'> " . $resul["descricao"]. "</div><br>
			<a href='compra.php?id=".$resul['id']."' id='btncompra' >Comprar</a></div></div><br>";
			echo "";
		
		}
?>
		</div>
	</main>
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