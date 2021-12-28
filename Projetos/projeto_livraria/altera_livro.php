<html>
	<head>
		
		<meta charset="utf-8"/>
		<title>Projeto Final - Ygor and Yuri</title>
		<link rel="icon" href="imagens/bookshelf.png">
		<link rel="stylesheet" href="style.css">
		<script src="funcoes.js"></script>
	
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
	
				<?php 
						
					header('Content-Type: text/html; charset=iso-8859-1');
					
					$conexao = mysql_connect("localhost:3306","root","root");
					$db = mysql_select_db("livraria");
					$id = $_GET['id'];
					$sql = "SELECT * FROM livro WHERE id=$id";
					$resultado = mysql_query($sql)
					or die ("Não foi possível realizar a consulta ao banco de dados");
					$num = mysql_num_rows($resultado);
							
					while ($linha = mysql_fetch_array($resultado)){
						$id = $linha["id"];
						$nome = $linha['nome'];
						$autor = $linha["autor"];
						$editora = $linha["editora"];
						$preco = $linha["preco"];
						$ano = $linha["ano"];
						$prefacio = $linha["prefacio"];
				?>
			
				<center>
				
				<br>
				
				<form name="formulario2" action='alterar_db_livro.php' method='post'>
					
					<input type = "hidden" name = "id" value = <?php echo ($id)?>>
						
					<h1>Alterar cadastro de livros</h1>
							
					<table align="center">
							
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Nome: </b></td>
							<td><input type='text' class="caixa1" name='novoNome' id='novoNome' value = "<?php echo ($nome)?>" size=40 />&nbsp;&nbsp;&nbsp;</td>
						</tr>
							
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Autor: </b></td>
							<td><input type='text' class="caixa1" name='novoAutor' id='novoAutor' value = "<?php echo ($autor)?>" size=16></td>
						</tr>
						
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Editora: </b></td>
							<td><input type='text' class="caixa1" name='novoEditora' id='novoEditora' value = "<?php echo ($editora)?>" size=16 ></td>
						</tr>
						
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Preço: </b></td>
							<td><input type='text' class="caixa2" name='novoPreco' id='novoPreco' value = <?php echo ($preco)?> size=16 onKeyPress="return(moeda(this,'.',',',event));" maxlength="10"></td>
						</tr>
						
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Ano: </b></td>
							<td><input type='text' class="caixa3" name='novoAno' id='novoAno' value = <?php echo ($ano)?> size=16 width="100px" onkeypress="return ValNumPreco(this);" maxlength="4"></td>
						</tr>
								
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Prefacio: </b></td>
							<td><textarea name='novoPref' class="caixa2" id='novoPref' rows='5' cols='50'><?php echo ($prefacio)?></textarea></td>
						</tr>
							
					</table>
					
					<br>
							
							<br>
						<?php
							header('Content-Type: text/html; charset=iso-8859-1');
							echo "<input type='Submit' class='botao1' value='Alterar cadastro' onclick='return validar2();'>";
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							echo "<input type='Reset' class='botao1' value='Restaurar'>";
							
						?>

					</center>
					
					<br>
						
				</form>
				
				<?php 
					
						}
						mysql_close($conexao);
					
				?>
					
			</td></tr>
		</table>
		<div class = "rodape">
		</div>	
	</body>
</html>