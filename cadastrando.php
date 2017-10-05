<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastrado</title>
	<link rel="stylesheet" href="">
	<script type="text/javascript">
		function gettingOut(){
			setTimeout("window.location='painel.php'",3500);
		}
	</script>
</head>
<body>
	<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$conexao = @mysql_connect($host,$user,$pass,$banco) or die (mysql_error());
	mysql_select_db($banco) or die (mysql_error());
?>

<?php

	$nome=$_POST['nome'];
	$sobrenome=$_POST['sobrenome'];
	$pais=$_POST['pais'];
	$estado=$_POST['estado'];
	$cidade=$_POST['cidade'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$sql = mysql_query("INSERT INTO usuarios(nome,sobrenome,pais,estado,cidade,email,senha) values('$nome', '$sobrenome','$pais','$estado','$cidade','$email','$senha')	");

	echo "<center><h1>Usuário cadastrado com sucesso!</h1></center>";
	echo "<script>gettingOut()</script>";

?>
</body>
</html>