<html>
	<head>
		<title> Área da empresa</title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
<body class="body2">

	<?php 
		header('Content-Type: text/html; charset=iso-8859-1');
		include('menu.php');
	?>
	
	<br>
	
	<center>
	
		<form name="formulario" action = "insere_emp.php" method = "post">
		
			<table class="tab6">
				
				<tr><td><br></td></tr>
							
				<tr><td align="center" colspan="5"><h1 id = "titulo"> Sistema de Cadastro de Empresa</h1></td></tr>			
				
				<tr><td><br></td></tr>
								
				<tr>
					<td align="right"><br><b><h2 class="h2C">Razão Social: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='text' class="caixa1" name='txtRS' id='txtRS'></td>
				</tr>
								
				<tr>
					<td align="right"><br><b><h2 class="h2C">E-mail: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='text' class="caixa1" name='txtEmail' id='txtEmail' maxlength="35"></td>
				</tr>
							
				<tr>
					<td align="right"><br><b><h2 class="h2C">CNPJ: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='text' class="caixa1" name='txtCNPJ' id='txtCNPJ' 
					onkeypress="return ValCNPJ(this);" maxlength="18"></td>
				</tr>
							
				<tr>
					<td align="right"><br><b><h2 class="h2C">Endereço: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='text' class="caixa1" name='txtEndereco' id='txtEndereco'></td>
				</tr>
				
				<tr>
					<td align="right"><br><b><h2 class="h2C">CEP: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='text' class="caixa1" name='txtCEP' id='txtCEP' 
					onkeypress="return ValCEP(this);" maxlength='10'></td>
				</tr>
							
				<tr>
					<td align="right"><br><b><h2 class="h2C">Telefone: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='text' class="caixa1" name='txtTel' id='txtTel' 
					onkeypress="return ValTel2(this);"  maxlength="14"></td>
				</tr>
									
				<tr>
					<td align="right"><br><b><h2 class="h2C">Senha: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='password' class="caixa1" name='txtSenha' id='txtSenha' maxlength="16">
					&nbsp;&nbsp;<button type='button' class='botao2' onclick='mostrarSenha();'>
					<img width="20px" height="20px" src="imagens/olho.png"></button></td>
				</tr>
				
				<tr>
					<td align="right"><br><b><h2 class="h2C">Confirmar: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='password' class="caixa1" name='txtSenha2' id='txtSenha2' maxlength="16"></td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr>
					<td align="center" colspan="5"><?php echo "<input type='Submit' value='Cadastrar' class='botao1' 
					onclick='return validar3();'>";?>&nbsp;&nbsp;&nbsp;
					<?php echo "<input type='Reset' value='Limpar' class='botao1'>";?></td>
				</tr>
				
				<tr><td><br></td></tr>
							
			</table>
		</center>
	</form>
</body>
</html>