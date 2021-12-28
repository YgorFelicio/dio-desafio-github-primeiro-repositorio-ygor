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
						
						$nome = $_POST["txtNome"];
						$autor = $_POST["txtAutor"];
						$editora = $_POST["txtEditora"];
						$preco = str_replace(",", ".",$_POST["txtPreco"]);
						$ano = $_POST["txtAno"];
						$prefacio = $_POST["txtPref"];
						
						$sql = "INSERT INTO livro (nome,autor,editora,preco,ano,prefacio) 
						VALUES ('$nome','$autor','$editora','$preco','$ano','$prefacio')";
						//echo $sql;
						//Agora é hora de contatar o mysql
						
						$conexao = mysql_connect("localhost:3306", "root", "root")
						or die ("Configuração de Banco de Dados Errada!");
						
						//Substitua os valores acima caso não esteja de acordo com sua máquina
						//Selecionando o banco de dados...
						
						$db = mysql_select_db("livraria")
						or die ("Banco de Dados Inexistente!");
						
						//Inserindo os dados
						//echo "SQL: $sql";
						$sql = mysql_query($sql)
						or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");
						
						mysql_close($conexao);
						
						echo "<h1>Livro cadastrado com sucesso!</h1>";
						
						?>
						
							
					</form>
					
				</center>
				
			</td></tr>
		</table>
		<div class = "rodape">
	</div>
	</body>	
	
</html>