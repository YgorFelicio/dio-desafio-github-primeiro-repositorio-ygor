<html lang="pt-br">

	<head>
		<title> Intranet Coleta Consciente </title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
	<body class="body2">
	
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
			
				<form name="formulario" action="edita_usu.php" method="get">
			
				<tr><td><br></td></tr>
				
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
				
				<tr><td><br>&emsp;<br></td></tr>
				
				<tr>
					<td align="center" colspan="2">
						<font class="F3">
						<input type="radio" name="rdOpcao" value="1" onclick="Opcao();">&nbsp;&nbsp;Usuario
						&emsp;&emsp;
						<input type="radio" name="rdOpcao" value="2" onclick="Opcao();">&nbsp;&nbsp;Empresa
						</font>
					</td>
				</tr>
				
				<tr><td><br>&emsp;<br></td></tr>
				
				<tr id="item">
					<td align="center" colspan="2">
					<font class="F3">&nbsp;&nbsp;CPF: &nbsp;&nbsp;</font>
					<input type='text' class="caixa2" name='txtCPF' id='txtCPF' value=<?php echo ($cpf)?>
					onkeypress="return ValCPF(this);" maxlength="14">
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;></td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr id="item2" style="visibility:hidden">
					<td align="center" colspan="2">
					<font class="F3">CNPJ: &nbsp;&nbsp;</font>
					<input type='text' class="caixa2" name='txtCNPJ' id='txtCNPJ'
					onkeypress="return ValCNPJ(this);" maxlength="18">
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr id="item3" style="visibility:hidden">
					<td align="center" colspan="2">
						<?php echo "<input type='Button' value='Validar' class='botao1' onclick='return Validar();'>";?>
					</td>
				</tr>
				
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
						
						<table>
							
							<tr>
								
								<td><h2 class="h2B">Tipo de Item: </h2></td>
									
								<td width=70px><br></td>
									
								<td><h2 class="h2B">Quantidade: </h2></td>	
											
							</tr>
								
							<tr>
	
								<td align="center">
								<h3><input type="checkbox" name="box1" value="1">&emsp; Metal&emsp;&nbsp;</h3><br></td>
									
								<td width=70px><br></td>
									
								<td align="center">
								&emsp;<input type="number" name="num1" min="0" max="1000" step=".001">&emsp;&emsp;
								<font face="garamond" size="5"><b>Kg</b></font><br><br></td>
									
							</tr>
								
							<tr>
	
								<td align="center">
								<h3><input type="checkbox" name="box2" value="2">&emsp; Papel&emsp;&nbsp;</h3><br></td>
									
								<td width=70px><br></td>
									
								<td align="center">
								&emsp;<input type="number" name="num2" min="0" max="1000" step=".001">&emsp;&emsp; 
								<font face="garamond" size="5"><b>Kg</b></font><br><br></td>
									
							</tr>
								
							<tr>
	
								<td align="center">
								<h3><input type="checkbox" name="box3" value="3">&emsp; Plastico</h3><br></td>
									
								<td width=70px><br></td>
									
								<td align="center">
								&emsp;<input type="number" name="num3" min="0" max="1000" step=".001">&emsp;&emsp; 
								<font face="garamond" size="5"><b>Kg</b></font><br><br></td>
									
							</tr>
								
							<tr>

								<td align="center">
								<h3><input type="checkbox" name="box4" value="4">&emsp; Vidro&emsp;&nbsp;</h3><br></td>
								
								<td width=70px><br></td>
								
								<td align="center">
								&emsp;<input type="number" name="num4" min="0" max="1000" step=".001">&emsp;&emsp; 
								<font face="garamond" size="5"><b>Kg</b></font><br><br></td>
									
							</tr>
							
						</table>
						
					</td>
						
				</tr>
					
				<tr>
					<td align="center" colspan="2">
						<?php echo "<input type='Submit' value='Salvar' class='botao1' 
						onclick='return validaritens();'>";?>
					</td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr>
					<td align="center" colspan="2">
						<?php echo "<input type='button' value='Voltar' class='botao1' onclick='window.history.go(-1)'>";?>
					</td>
				</tr>
					
				<tr><td><br></td></tr>
				
				</form>
			
			</table>
		
		</center>
		
		<?php 
					
			}
			mysql_close($conexao);
					
		?>
		
	</body>

</html>