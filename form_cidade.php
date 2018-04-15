<html>

	<head>
	
		<meta charset="utf-8"/>
		<title>Cadastrar Cidade</title>
		
	</head>
	
	<body>
		<?php
		
			include("cabecalho.php");
		
			$arquivo = "estados.xml";
		
			if(file_exists($arquivo)) {
			
		?>
			<form method="post" action="cadastra_cidade.php">
			
				<p>
					<label>Estado</label><br /><br />
					<select name="estado">
						<?php 

							$xml = simplexml_load_file($arquivo);
							
							foreach($xml->estado as $i=>$v) {
								
								echo "<option value='$v->sigla'>". $v->nome ."</option>";
							
							}
						
						?>
					</select>
				</p>
				
				<p>
					<label>Nome Cidade</label><br />
					<input type="text" size="50" name="nome_cidade"/>
				</p>
				
				<input type="submit" value="Enviar"/>
				
			</form>
		<?php
		
			}
		
		?>
		
	</body>
	
</html>
