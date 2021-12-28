<html lan="pt-br">
	<head>
		<title> DB Empresa</title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
<body>

	<?php 
		include('menu.php');
	?>
	
	<br>
	
		<table class="tab3" align="center">
			<tr><td>
	
				<center>
				
					<form>
		
						<?php
						
						header('Content-Type: text/html; charset=iso-8859-1');
						
						$conexao = mysql_connect("localhost:3306","root","root");
						$db = mysql_select_db("db_projetos2");
						$pontos_novo = $_GET["pontos"];
						$id = $_GET['id'];
						
						$sql = "UPDATE empresa SET pontos = '$pontos_novo' WHERE id='$id'";
						
						echo $sql;
						
						$resultado = mysql_query($sql)
						or die ("Não foi possível realizar a consulta ao banco de dados");
						
						header("Location:altera_emp.php?id='$id'");
						
						mysql_close($conexao);
						
						?>

					</form>
					
				</center>
				
			</td></tr>
		</table>
	</body>
</html>