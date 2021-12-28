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
						$nome_novo = $_POST['novoNome'];
						$autor_novo = $_POST['novoAutor'];
						$editora_novo = $_POST['novoEditora'];
						$preco_novo = str_replace(",", ".",$_POST['novoPreco']);
						$ano_novo = $_POST['novoAno'];
						$prefacio_novo = $_POST['novoPref'];
						$id = $_POST['id'];
						
						$sql = "UPDATE livro SET nome = '$nome_novo'
						,autor = '$autor_novo',editora = '$editora_novo', 
						preco = '$preco_novo',ano = '$ano_novo',
						prefacio = '$prefacio_novo' WHERE id='$id'";
						
						$resultado = mysql_query($sql)
						or die ("Não foi possível realizar a consulta ao banco de dados");
						
						mysql_close($conexao);
						
						echo "<h1>Livro alterado com sucesso!</h1>";
						
						?>

					</form>
					
				</center>
				
			</td></tr>
		</table>
		
	</body>
	<div class = "rodape">
	</div>
</html>