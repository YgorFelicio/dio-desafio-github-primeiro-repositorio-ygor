<html lang="pt-br">

	<head>
		<title> Cadastro de itens </title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
	<body class="body2">
	
		<?php 
			include('menu2.php');
		?>
	
		<?php 
						
					header('Content-Type: text/html; charset=iso-8859-1');
					
					$conexao = mysql_connect("localhost:3306","root","root");
					$db = mysql_select_db("db_projetos2");
					$id = $_GET['id'];
					$sql = "SELECT * FROM usuario WHERE id=$id";
					$resultado = mysql_query($sql)
					or die ("Não foi possível realizar a consulta ao banco de dados");
					$num = mysql_num_rows($resultado);
					
					while ($linha = mysql_fetch_array($resultado)){
						$id = $linha["id"];
						$nome = $linha['nome'];
						$email = $linha["email"];
						$cpf = $linha["cpf"];
						$endereco = $linha["endereco"];
						$cep = $linha["cep"];
						$telefone = $linha["telefone"];
						$senha = $linha["senha"];
						$pontos = $linha["pontos"];
					
		?>
		
		<center>
	
			<table class="tab4">
			
				<form name="formulario" action="troca_usu.php" method="get">
			
				<tr><td><br></td></tr>
			
				<tr>
				
					<td> 
						<h2 class="h2A">
							&emsp;&emsp;Nome: <?php echo "$nome"; ?>
							<br>
							&emsp;&emsp;Telefone: <?php echo "$telefone"; ?>
							<br>
							&emsp;&emsp;Endereço: <?php echo "$endereco"; ?>
							<br>
							&emsp;&emsp;CEP: <?php echo "$cep"; ?>
							<br>
							&emsp;&emsp;
						</h2>
					</td>
					
					<td align="right">
						<h2 class="h2A">
							Pontos: <?php echo "$pontos"; ?>&emsp;&emsp;
							<br>
							&emsp;&emsp;
							<br>
							&emsp;&emsp;
							<br>
							&emsp;&emsp;
							<br>
							&emsp;&emsp;
						</h2>
					</td>
					
				</tr>
				
				<tr>
					<td align="center" colspan="2">
						<font class="F1"><b>
						*Metal 		2		pontos/Kg&emsp;&emsp;&emsp;
						*Papel 		1,25 	pontos/Kg&emsp;&emsp;&emsp;
						*Plastico 	1		ponto/Kg&emsp;&emsp;&emsp;
						*Vidro 		1,75	pontos/Kg&emsp;&emsp;&emsp;
						</b></font>
					</td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr>
					<td align="center">
						<input type="hidden" name="pontos" value=<?php echo ($pontos)?>>
					</td>
					
					<td align="center">
						<input type="hidden" name="id" value=<?php echo ($id)?>>
					</td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr>
					<td align="center" colspan="2">
						<?php echo "<input type='Button' value='Solicitar coleta' class='botao1' onclick='Solicita();'>";?>
						&emsp;&emsp;
						<?php echo "<input type='Button' value='Trocar pontos' class='botao1' onclick='return Troca();'>";?>
					</td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr id="solicita"  style="visibility:hidden">
					<td align="center" colspan="2">
						<font class="F2"><b>
							Coleta Solicitada
						</b><font>
					</td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr id="Troca"  style="visibility:hidden">
						
					<td align="center" colspan="2">
						
						<table>
							
							<tr>
								
								<td align="center" colspan="5"><h2 class="h2B">Tipo de Desconto: </h2></td>	
											
							</tr>
							
							<tr><td><br></td></tr>
							
							<tr>
	
								<td align="center">
									<h3><input type="radio" name="rdDesc" value="1">
									&nbsp;&nbsp;Água&emsp;&nbsp;</h3><br>
								</td>
								
								<td align="center">
									<h3><input type="radio" name="rdDesc" value="2">
									&nbsp;&nbsp;Energia&emsp;&nbsp;</h3><br>
								</td>
								
								<td align="center">
									<h3><input type="radio" name="rdDesc" value="3">
									&nbsp;&nbsp;IPVA&emsp;&nbsp;</h3><br>
								</td>
								
								<td align="center">
									<h3><input type="radio" name="rdDesc" value="4">
									&nbsp;&nbsp;IPTU&emsp;&nbsp;</h3><br>
								</td>
										
							</tr>
							
							<tr>
								<td align="center" colspan="5">
									<font face="garamond" size="5"><b>Pontos: </b></font>
									&emsp;<input type="number" name="num4" min="50" step="50">&emsp;&emsp; 
								</td>
							</tr>
							
							<tr><td><br></td></tr>
							
							<tr>
								<td align="center" colspan="5">
									<?php echo "<input type='Submit' value='Salvar' class='botao1' 
									onclick='return validarpontos();'>";?>
								</td>
							</tr>
							
							<tr><td><br></td></tr>
							
						</table>
						
					</td>
						
				</tr>
				
				</form>
			
			</table>
		
		</center>
		
		<?php 
					
			}
			mysql_close($conexao);
					
		?>
		
	</body>

</html>