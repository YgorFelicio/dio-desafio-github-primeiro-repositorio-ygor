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
	
		<table class="tab2" align="center">
			<tr><td>
				
				<center>
					<h1><u>Catálogo de Livros</u></h1>
					
					<?php
					
					header('Content-Type: text/html; charset=iso-8859-1');
					
					$conexao = mysql_connect("localhost:3306","root","root");
					$db = mysql_select_db("livraria");
					$sql = "SELECT id,nome,autor,editora,preco,ano,prefacio FROM livro ORDER BY id ASC";
					$resultado = mysql_query($sql)
					or die ("Não foi possível realizar a consulta ao banco de dados");
					
					echo "<table id='tabela'";
					echo "<tr>";
					echo "<th class = 'consultaTexto' >ID:</th>";
					echo "<th class = 'consultaTexto'>Nome:</th>";
					echo "<th class = 'consultaTexto'>Autor:</th>";
					echo "<th class = 'consultaTexto'>Editora:</th>";
					echo "<th class = 'consultaTexto'>Preco:</th>";
					echo "<th class = 'consultaTexto'>Ano:</th>";
					echo "<th class = 'consultaTexto'>Prefacio:</th>";
					echo "<th class = 'consultaTexto'>Alterar</th>";
					echo "<th class = 'consultaTexto'>Excluir</th>";
					echo "</tr>";
					
					while ($linha=mysql_fetch_array($resultado)) {
					$id = $linha["id"];
					$nome = $linha["nome"];
					$autor = $linha["autor"];
					$editora = $linha["editora"];
					$preco = $linha["preco"];
					$ano = $linha["ano"];
					$prefacio = $linha["prefacio"];
					
					echo "<tr>";
					echo "<td>$id<br></td>";
					echo "<td>$nome<br></td>";
					echo "<td>$autor<br></td>";
					echo "<td>$editora<br></td>";
					echo "<td>$preco<br></td>";
					echo "<td>$ano<br></td>";
					echo "<td>$prefacio<br></td>";
					echo "<td><a href='altera_livro.php?id=$id' class='botao1'>Alterar</a><br></td>";
					echo "<td><a href='deletar_livro.php?id=$id' class='botao2'>Excluir</a><br></td>";
					echo "</tr>";
					echo "<br>";
					
					}
					
					echo "</table>";
					echo "<br>";
					
					?>
					
				</center>
				
			</td></tr>
		</table>
	<div class = "rodape">
	</div>
	</body>

</html>