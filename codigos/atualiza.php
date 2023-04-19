<?php
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['nivel']);
    header('location:login.php');
    }

$email = $_SESSION['email'];
$nivel = $_SESSION['nivel'];
?>
<html>
<head>
	<title>Cadastrar - Geek Club</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial scale='1'>
	<link href='estilodosite.css' rel='stylesheet' type='text/css' />
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'/>
	<link href='http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'/>
	<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'/>
	<link rel='icon' href='icone.png'>
	<script type="text/javascript">
			function updatepicture(e){
				var img = e.files[0];
				var rea = new FileReader();

				rea.readAsDataURL(img);
				rea.onload = function(e){
					var end = rea.result;
					var iframe = document.getElementById("image");
					iframe.src = end;
				}
				//document.getElementById("image").setAttribute("src",pic);
			}
			function verificar_foto(){
								
				if (document.forms[ 'form1' ].file.value == '' && document.getElementById("image").src==""){
					alert("Escolha a foto");
					return false;
				} 
				//verificar_dados();
				return true;
			}
			function verificar_dados(){
				var erro = false;
				if (document.form1.titulo.value == ""){
					alert("Preencha o campo titulo") ;
					erro = true ;
				}
				if (document.form1.descricao.value == ""){
					alert("Preencha o campo descricao") ;
					erro = true ;
				}
				if (document.form1.preco.value == ""){
					alert("Preencha o campo preço") ;
					erro = true ;
				}
				if (erro==false) {
				document.form1.submit();
				}
			}
		</script>
</head>
<body>
<header>
		<div id='banner'>
		<div class='logo'>
		<center><a href='home.php'><img src='geek-club.png' width='20%' height='20%' id="logobanner"></a></center>
		</div>
		<div id="pesquisa">
		<form action="buscado.php" method="post" id="pesquisa">
		<tr><td><input type="text" id="texto" name="palavra" list="historico" placeholder="Buscar..."/></td>
		<td><button type="submit">
			<img  src="lupa.png" id="btn" alt="buscar"/>
		</button></td></tr>
		</form></div>
		<datalist id='historico'>
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
	<div class='container'>
		<?php
			
			if($nivel==1){
				echo "<nav class='menu'>
					<ul>
							<li><a href='home.php'>INICIO</a></li>
							<li><a href='vestuario.php' aria-haspopup='true'>VESTUÁRIO</a>
								<ul class='vestuario'>
									<li><a href='camisetas-masculinas.php'>CAMISETAS MASCULINAS</a></li>
									<li><a href='camisetas-femininas.php'>CAMISETAS FEMININAS</a></li>
									<li><a href='moletons.php'>MOLETONS</a></li>
								</ul>
							</li>
							<li><a href='colecionaveis.php' aria-haspopup='true'>COLECIONÁVEIS</a>
								<ul class='colecionaveis'>
									<li><a href='replicas.php'>RÉPLICAS</a></li>
									<li><a href='pop-funk.php'>POP FUNK</a></li>
									<li><a href='pelucias.php'>PELÚCIAS</a></li>
								</ul>
							</li>	
							<li><a href='acessorios.php' aria-haspopup='true'>ACESSÓRIOS</a>
								<ul class='acessorios'>
									<li><a href='fone-ouvido.php'>FONE DE OUVIDO</a></li>
									<li><a href='chaveiros.php'>CHAVEIROS</a></li>
									<li><a href='malas-mochilas.php'>MALAS E MOCHILAS</a></li>
								</ul>
							</li>
							<li><a href='jogos-brinquedos.php' aria-haspopup='true'>JOGOS E BRINQUEDOS</a>
								<ul class='jogos-brinquedos'>
									<li><a href='tabuleiros.php'>TABULEIROS</a></li>
									<li><a href='video-games.php'>VIDEO-GAMES</a></li>
									<li><a href='action-figure.php'>ACTION FIGURES</a></li>
								</ul>
							</li>
							<li><a href='televisivos.php' aria-haspopup='true'>TELEVISIVOS</a>
								<ul class='televisivos'>
									<li><a href='filmes.php'>FILMES</a></li>
									<li><a href='series.php'>SÉRIES</a></li>
								</ul>
							</li>
							<li><a href='papelaria.php' aria-haspopup='true'>PAPELARIA</a>
								<ul class='papelaria'>
									<li><a href='cadernos.php'>CADERNOS</a></li>
									<li><a href='estojos.php'>ESTOJOS</a></li>
									<li><a href='agendas.php'>AGENDAS</a></li>
									<li><a href='canetas.php'>CANETAS</a></li>
								</ul>
							</li>
							<li><a href='sobre.php'>SOBRE</a></li>

						</ul>
				</nav>";
			}
		else{
			echo "<nav class='menu'>
					<ul>
						<li><a href='produtos.php'>PRODUTOS</a></li>
						<li><a href='cadastro-prod.php'>CADASTRAR PRODUTOS</a></li>
					</ul>
				</nav>";
			}
?>
</div><?php
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
			<div id="tablecompra">
				<fieldset>
					<table id="compra">
					<tr><td>Código</td><td>Produto</td><td>Nome</td><td>Preço</td><td>Descrição</td></tr>
						<?php
						$link=mysqli_connect('localhost','root','','geekclub');
						$id = $_GET['id'];
					
							$sql="SELECT * FROM produtos WHERE id = $id"; 
							$resultado=mysqli_query($link,$sql);
							while($resul = mysqli_fetch_array($resultado)){
								echo "<tr><td>". $resul["id"]. "</td><td><img id='imgpd' src='images/".$resul['nome_imagem']."' width='100' height='100'/></td>";
								echo "<td>" . $resul["nome"]. "</td>";
								echo "<td>R$" . $resul["preco"]. "</td>";
								echo "<td>" . $resul["descricao"]. "</td>";
							}
						?>
					</table>
				</fieldset>
			</div>
			
			<div id="formulario">
				<form action="atualizou.php" method="post" enctype="multipart/form-data">
					<fieldset>
					<div class="campo">
							<label for="cpf">Código do produto</label>
							<input type="text" id="cp" name="id" style="width: 10em" value="">
					</div>
					<div class="campo">
							<label for="nome">Nome</label>
							<input type="text" id="nome" name="nomeprod" style="width: 10em" value="">
					</div>
					<div class="campo">
							<label for="ndc">Preço</label>
							<input type="text" id="preco" name="preco" style="width: 10em" value="">
					</div>
					<div class="campo">
							<textarea name="descricao" placeholder="Digite a descrição aqui" rows="10" cols="40" maxlength="500"/></textarea>
					</div>
					
				<div class="campo"><label><br>Selecione sua imagem para Upload:</label></br>
						<input type="file" id="file" name="file" onchange="updatepicture(this);" />
							<!--<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
							<input type="submit" name="submit" id="submit" value="Upload Image" /> -->
						<br><br>
						<img style="min-height:120;min-width:200;max-height:120px;" id="image"/><br></br>
						<iframe style="display:none" name="iframe"/></iframe>
						<button type="submit" class="botao submit" name="submit" onclick="verificar_foto()">Atualizar</button>
					</fieldset>
				</div>
				</form>
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
<center><h2> © 2023 Geek Club - Todos os direitos reservados.</h2></center>
</footer>

	
</body>
</html>