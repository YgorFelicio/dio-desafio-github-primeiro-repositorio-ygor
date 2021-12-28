<html>
	<head>
		<title> Login do funcionário</title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
<body>

	<?php 
		
		header('Content-Type: text/html; charset=iso-8859-1');
		
		$usuario = $_POST["txtUsuario"];
		$senha = $_POST["txtSenha"];
		
		$conexao = mysql_connect("localhost:3306", "root", "root")
		or die ("Configuração de Banco de Dados Errada!");
						
		//Substitua os valores acima caso não esteja de acordo com sua máquina
		//Selecionando o banco de dados...
						
		$db = mysql_select_db("db_projetos2")
		or die ("Banco de Dados Inexistente!");
		
		$login = mysql_query("SELECT usuario, senha FROM funcionario WHERE usuario ='$usuario' AND senha = '$senha'");
		
		$res = mysql_fetch_row($login);
		
		if($res){
			echo "<script>window.location.href = 'entrou_fun.php';</script>";
		}else{
			echo "<script>alert('Usuario ou senha inválido!')
			window.location.href = 'index2.php';
			</script>";
		}
		
		mysql_close($conexao);
		
	?>
	
</body>