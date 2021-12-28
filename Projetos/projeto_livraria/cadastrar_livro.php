<html lang="pt-br">
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
		
				<center>
				
				<br>
				
				<form name="formulario" action='insere_livro.php' method='post'>
						
					<h1><u>Cadastro de Livros</u></h1>
							
					<table align="center">
							
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Nome: </b></td>
							<td><input type='text' class="caixa1" name='txtNome' id='txtNome'>&nbsp;&nbsp;&nbsp;</td>
						</tr>
							
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Autor: </b></td>
							<td><input type='text' class="caixa1" name='txtAutor' id='txtAutor'></td>
						</tr>
						
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Editora: </b></td>
							<td><input type='text' class="caixa1" name='txtEditora' id='txtEditora'></td>
						</tr>
						
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Preço: </b></td>
							<td><input type='text' class="caixa2" name='txtPreco' id='txtPreco' onKeyPress="return(moeda(this,'.',',',event));" maxlength="10"></td>
						</tr>
						
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Ano: </b></td>
							<td><input type='text' class="caixa3" name='txtAno' id='txtAno' onkeypress="return ValNumPreco(this);" maxlength="4"></td>
						</tr>
								
						<tr>
							<td>&nbsp;&nbsp;&nbsp;<b>Prefacio: </b></td>
							<td><textarea name='txtPref' class="caixa2" id='txtPref' rows='5' cols='50'></textarea></td>
						</tr>
							
					</table>
					
					<br><br>
							
						<?php
							header('Content-Type: text/html; charset=iso-8859-1');
							echo "<input type='Submit' value='Cadastrar' class='botao1' onclick='return validar1();'>";
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
							echo "<input type='Reset' value='Limpar' class='botao1'>";
						?>
						
						<br>

						
				</form>
				
				</center>
		
			</td></tr>
		</table>
	<div class = "rodape">
	</div>	
	</body>
</html>