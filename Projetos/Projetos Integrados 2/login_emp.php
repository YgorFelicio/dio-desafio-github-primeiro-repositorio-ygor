<html lang="pt-br">
	<head>
		<title> Login empresa</title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
<body>

	<?php 
		include('menu.php');
		
		header('Content-Type: text/html; charset=iso-8859-1');
		
		$email = $_POST["txtEmail"];
		$senha = $_POST["txtSenha"];
		
		$conexao = mysql_connect("localhost:3306", "root", "root")
		or die ("Configuração de Banco de Dados Errada!");
						
		//Substitua os valores acima caso não esteja de acordo com sua máquina
		//Selecionando o banco de dados...
						
		$db = mysql_select_db("db_projetos2")
		or die ("Banco de Dados Inexistente!");
		
		$login = mysql_query("SELECT email, senha FROM empresa WHERE email ='$email' AND senha = '$senha'");

		$res = mysql_fetch_row($login);
		
		if($res){
			$sql = mysql_query("SELECT id FROM empresa WHERE email ='$email' AND senha = '$senha'");
		 	$linha=mysql_fetch_array($sql);
			$id = $linha["id"];
			echo "<script>window.location.href = 'entrou_emp.php?id=$id';</script>";
		}else{
			echo "<script>alert('E-mail ou senha inválido!')
			window.location.href = 'empresa.php';
			</script>";
		}
		
		mysql_close($conexao);
		
	?>
	
	
	
</body>