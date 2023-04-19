<?php
session_start();
$email=$_POST['email'];
$senha=$_POST['senha'];

$conexao=mysqli_connect("localhost","root","","geekclub");
$consulta="SELECT * FROM cliente WHERE email='$email' and senha='$senha'";
$SESSION['email']=$_POST['email'];
$SESSION['senha']=$_POST['senha'];
$SESSION['nivel'] = 0;

$resultado=mysqli_query($conexao,$consulta);
$verificar=mysqli_num_rows($resultado);
if($verificar>0){
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	$dados = mysqli_fetch_assoc($resultado);
	$_SESSION['nivel']=$dados['nivel'];
	header("location:conta.php");
    //echo "Login = " . $_SESSION['login'];
    //echo "Codigo =" . $SESSION['codusuario'];
}else{
	//header("location:login.html");
	//echo "<script>alert('dadoverificardo->codigo>";
	echo "<h1><center>Dados Inválidos!</br>clique <a href='login.php'> aqui<a> para voltar</h1></center>";
}
mysqli_free_result($resultado);
mysqli_close($conexao);
?>