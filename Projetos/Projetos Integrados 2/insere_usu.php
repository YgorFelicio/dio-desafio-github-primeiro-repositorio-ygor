<html>
	<head>
		<title> DB Usuário</title>
		<link rel="icon" href="imagens/imagem1.jpg">
		<link rel="stylesheet" type="text/css" href="estilo1.css">
		<script src="funcoes.js"></script>
	</head>
	
<body>

	<?php 
		include('menu.php');
	?>
	
	<br>
	
	<table class="tab3" align="center">
			<tr><td>

				<center>
			
					<form>
					
						<?php
						
						header('Content-Type: text/html; charset=iso-8859-1');
						
						$nome = $_POST["txtNome"];
						$email = $_POST["txtEmail"];
						$cpf = $_POST["txtCPF"];
						$endereco = $_POST["txtEndereco"];
						$cep = $_POST["txtCEP"];
						$telefone = $_POST["txtTel"];
						$senha = $_POST["txtSenha"];
						$pontos = 0;
						
						$sql = "INSERT INTO usuario (nome,email,cpf,endereco,cep,telefone,senha,pontos) 
						VALUES ('$nome','$email','$cpf','$endereco','$cep','$telefone','$senha','$pontos')";
						//echo $sql;
						//Agora é hora de contatar o mysql
						
						$conexao = mysql_connect("localhost:3306", "root", "root")
						or die ("Configuração de Banco de Dados Errada!");
						
						//Substitua os valores acima caso não esteja de acordo com sua máquina
						//Selecionando o banco de dados...
						
						$db = mysql_select_db("db_projetos2")
						or die ("Banco de Dados Inexistente!");
						
						//Inserindo os dados
						//echo "SQL: $sql";
						$sql = mysql_query($sql)
						or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");
						
						$sql = mysql_query("SELECT id FROM usuario WHERE email ='$email' AND senha = '$senha'");
					 	$linha=mysql_fetch_array($sql);
						$id = $linha["id"];
						echo "<script>window.location.href = 'entrou_usu.php?id=$id';</script>";
						
						mysql_close($conexao);
						
						?>
						
							
					</form>
					
				</center>
				
			</td></tr>
			
		</table>
		
		<div class = "rodape">
	</div>
	
</body>