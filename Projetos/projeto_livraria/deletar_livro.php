<html>

	<head>
	
		<meta charset="utf-8"/>
		<title>Projeto Final - Ygor and Yuri</title>
		<link rel="icon" href="imagens/bookshelf.png">
		<link rel="stylesheet" href="style.css">
	
	</head>
	
	<body>
		<div>
			<ul class = "dp-menuUl1">
				<li class = "dp-menuUlLi"><a class = "dp-menuUlLiA" href = "index.php">Inicio</a></li>
				<li class = "dp-menuUlLi"><a class = "dp-menuUlLiA" href = "cadastrar_livro.php">Cadastro</a></li>
				<li class = "dp-menuUlLi"><a class = "dp-menuUlLiA" href = "consulta_livro.php">Consulta</a></li>
				<li class = "dp-menuUlLi"><a class = "dp-menuUlLiA" href = "sobre.php">Sobre</a></li>
			</ul>
		</div>
	
		<table class="tab3" align="center">
			<tr><td>
	
				<center>
				
					<form>
						<?php
						
						header('Content-Type: text/html; charset=iso-8859-1');
						
						$conexao = mysql_connect("localhost:3306","root","root");
						$db = mysql_select_db("livraria");
						$id = $_GET['id'];
						$sql = "DELETE FROM livro WHERE id='$id'";
						$resultado = mysql_query($sql)
						or die ("Não foi possível realizar a exclusão dos dados.");
						echo "<h1>Livro excluido com sucesso!</h1>";
						mysql_close($conexao);
						
						?>
					
					</form>
					
				</center>
				
			</td></tr>
		</table>
		
	</body>
	<div class = "rodape">
	</div>
</html>