<html lang="pt-br">
	<head>
		<title> Área do usuário</title>
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

		<form name="formulario" action = "login_usu.php" method = "post">
		
			<table class="tab5">
			
				<tr><td><br></td></tr>
							
				<tr><td align="center" colspan="5"><h1 id = "titulo"> Área de login/cadastro do usuário&nbsp;&nbsp;</h1></td></tr>			
				
				<tr><td><br></td></tr>
							
				<tr>
					<td width=60px>&nbsp;</td>
					<td align="right"><br><b><h2 class="h2C">E-mail: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='text' class="caixa3" name='txtEmail' id='txtEmail'></td>
				</tr>
							
				<tr>
					<td>&nbsp;</td>
					<td align="right"><br><b><h2 class="h2C">Senha: &nbsp;&nbsp;</h2></b></td>
					<td><br><input type='password' class="caixa3" name='txtSenha' id='txtSenha'>&nbsp;&nbsp;
					<button type='button' class='botao2' onclick='mostrarSenha();'>
					<img width="20px" height="20px" src="imagens/olho.png"></button></td>
				</tr>
				
				<tr><td><br></td></tr>
				
				<tr><td align="center" colspan="5"><?php echo "<input type='Submit' value='Login' class='botao1' onclick='return validar2();'>";?></td></tr>
				
				<tr><td><br></td></tr>
				
				<tr><td align="center" colspan="5"><?php echo "<a href='cadastrar_usu.php' class='botao1'> Cadastrar-se</a>";?></td></tr>
				
				<tr><td><br></td></tr>
					
			</table>
		</form>
	</center>
	
</body>

</html>