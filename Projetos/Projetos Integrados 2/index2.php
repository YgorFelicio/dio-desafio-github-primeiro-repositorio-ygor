<html lang="pt-br">
	<head>
		<title> Intranet Coleta Consciente</title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
<body class="body2">
	
	<br>
	
	<center> 

		<form name="formulario" action = "login_fun.php" method = "post">
		
			<table class="tab5">
			
				<tr><td><br></td></tr>
							
				<tr><td align="center" colspan="5"><h1 id = "titulo"> Área de login dos funcionários&nbsp;&nbsp;</h1></td></tr>			
				
				<tr><td><br></td></tr>
							
				<tr>
					<td width=60px>&nbsp;</td>
					<td align="right"><br><b><h2 class="h2C">Usuario: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='text' class="caixa3" name='txtUsuario' id='txtUsuario'></td>
				</tr>
							
				<tr>
					<td>&nbsp;</td>
					<td align="right"><br><b><h2 class="h2C">Senha: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='password' class="caixa3" name='txtSenha' id='txtSenha'>&nbsp;&nbsp;
					<button type='button' class='botao2' onclick='mostrarSenha();'>
					<img width="20px" height="20px" src="imagens/olho.png"></button></td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr><td align="center" colspan="5"><?php echo "<input type='Submit' value='Login' class='botao1' onclick='return validar4();'>";?></td></tr>
				
				<tr><td><br></td></tr>
				
				<tr><td><br></td></tr>
					
			</table>
		</form>
	</center>
	
</body>

</html>