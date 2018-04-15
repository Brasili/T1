<html>

	<head>
	
		<meta charset="utf-8"/>
		<title>Cadastrar Estado</title>
		
	</head>
	
	<body>
	
		<?php
		
			include("cabecalho.php");
		
		?>
	
		<form method="post" action="cadastra_estado.php">
		
			<p>
				<label>Sigla</label><br />
				<input type="text" maxlenght="2" size="2" name="sigla"/>
			</p>
			
			<p>
				<label>Nome Estado</label><br />
				<input type="text" size="50" name="estado"/>
			</p>
			
			<br />
			<input type="submit" value="Enviar"/>
			
		</form>
		
	</body>
	
</html>
