<!DOCTYPE html>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$conexão = @mysql_connect($host,$user,$pass,$banco) or die(mysql_error());
	mysql_select_db($banco) or die(mysql_error());
?>
<?php
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}else{
		echo "<center><h1>Você está logado!</h1></center>";
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PAINEL</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="cadastro.php"><center>Novo usuário</center></a>
	<a href="logout.php"><center>SAIR</center></a>
</body>
</html>