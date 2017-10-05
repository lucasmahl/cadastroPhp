<!DOCTYPE html>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$conexão = @mysql_connect($host,$user,$pass,$banco) or die(mysql_error());
	mysql_select_db($banco) or die(mysql_error());
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Autenticação</title>
	<link rel="stylesheet" href="">
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='painel.php'",3500);
		}
		function loginfailed(){
			setTimeout("window.location='login.php'",2000);
		}
	</script>
</head>
<body>

<?php  
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$sql = mysql_query("SELECT * FROM usuarios WHERE email = '$email' AND senha ='$senha'") or die(mysql_error());
	$row = mysql_num_rows($sql);
	if ($row>0) {
		session_start();
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];

		echo "<h1><center>Você foi autenticado com sucesso!Aguarde um instante.</center></h1>";
		echo "<script>loginsuccessfully()</script>";
	}else{
		echo "<h1><center>Nome de usuário e/ou senha inválidos.</h1></center>";
		echo "<script>loginfailed()</script>";
	}
?>
</body>
</html>
