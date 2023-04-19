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
		</div><div class="container">
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
		elseif($nivel==2) {
			echo "<nav class='menu'>
					<ul>
					
						<li><a href='produtos.php'>PRODUTOS</a></li>
						<li><a href='cadastro-prod.php'>CADASTRAR PRODUTOS</a></li>
					</ul>
				</nav>";
		}else{ header('location:login.php');}
?></div><?php
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

	<div id="ft-formulario">
	<img src="5ft.gif" width="200px">
	</div>
	<div id="formulario">
	<form action="conta1.php" method="post" name="form"  onsubmit="return validarSenha(this)">
			<fieldset>
		<fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" style="width: 10em" value="">
            </div>
            <div class="campo">
                <label for="snome">Sobrenome</label>
                <input type="text" id="snome" name="sobrenome" style="width: 10em" value="">
            </div>
        </fieldset>
		<div class="campo">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" style="width: 10em" value="">
            </div>
		<div class="campo">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
        </div>
        <div class="campo">
            <label>Sexo:</label>
            <label class="checkbox">
                <input type="radio" name="sexo" value="M"> Masculino
            </label>
            <label class="checkbox">
                <input type="radio" name="sexo" value="F"> Feminino
            </label>
        </div>
		<fieldset class="grupo">
        <div class="campo">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" style="width: 10em" value="">
        </div>
		<div class="campo">
                <label for="numero">Nº</label>
                <input type="number" id="numero" name="logradouro" style="width: 10em" value="">
            </div>
		</fieldset>
		<fieldset class="grupo">
        <div class="campo">
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" style="width: 10em" value="">
        </div>
		<div class="campo">
			<label> Estado:</label>
		<select name="estado">
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceara</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espírito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MT">Mato Grosso</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
		</select>
		</div>
		</fieldset>
		<fieldset class="grupo">
        <div class="campo">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" style="width: 10em" value="">
        </div>
		<div class="campo">
                <label for="cidade">Senha</label>
                <input type="password" id="senha" name="senha" style="width: 10em" value="">
				</div>
		<div class="campo">
				<label for="cidade">Confirmar senha</label>
                <input type="password" id="senha" name="senha1" style="width: 10em" value="">
            </div>
		</fieldset>
          <div class="campo">
			<fieldset><label>Caso seja administrador, insira seu código de acesso:</label><br><input id="caixa" type="text" name="codigo" placeholder="Digite aqui"></fieldset><br>  
        <button type="submit" class="botao submit" name="submit">Atualizar</button></fieldset>
		</div>
	</form></div></main> </div>
	<script type="text/javascript">
			function validarSenha(form){ 
    senha = document.form.senha.value
    senha1 = document.form.senha1.value
    if (senha == senha1){
        alert("Repita a senha corretamente");
		window.location = ("cadastro.php");
    }
}
	</script>
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

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(function(){ // declaro o início do jquery
  $("input[login='verificar']").on('click', function(){//botão para disparar a ação
    var login = $("input[login='login']").val();
    //console.log(nomeUsuario);
    $.get('gravar.php?login=' + login,function(data){
      $('#resultado').html(data);//onde vou escrever o resultado
    });
  });
});// fim do jquery
</script>
</body>
</html>