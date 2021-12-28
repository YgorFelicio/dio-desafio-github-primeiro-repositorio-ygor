<html lan="pt-br">
	<head>
		<title> Intranet Coleta Consciente</title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
<body>

	<?php
		
		header('Content-Type: text/html; charset=iso-8859-1');
		
		$cnpj = $_GET['cnpj'];
		
		$conexao = mysql_connect("localhost:3306", "root", "root")
		or die ("Configuração de Banco de Dados Errada!");
						
		//Substitua os valores acima caso não esteja de acordo com sua máquina
		//Selecionando o banco de dados...
						
		$db = mysql_select_db("db_projetos2")
		or die ("Banco de Dados Inexistente!");
		
		$login = mysql_query("SELECT cnpj FROM empresa WHERE cnpj ='$cnpj'");
		
		$res = mysql_fetch_row($login);
		
		if($res){
			$sql = mysql_query("SELECT id FROM empresa WHERE cnpj ='$cnpj'");
		 	$linha=mysql_fetch_array($sql);
			$id = $linha["id"];
			echo "<script>window.location.href = 'altera_emp.php?id=$id';</script>";
		}else{
			echo "<script>alert('CNPJ Inválido!')
			window.location.href = 'entrou_fun.php';
			</script>";
		}
		
		mysql_close($conexao);
		
	?>
	
</body>