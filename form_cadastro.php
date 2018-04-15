<html>

	<head>
	
		<meta charset="utf-8"/>
		<title>Cadastro</title>
		
	</head>
	
	<body>
	
		<?php
		
			include("cabecalho.php");
		
			$arquivo = "cidades.xml";
		
			if(file_exists($arquivo)) {
				
		?>
		
			<form method="post" action="cadastra.php">
			
				<p>
					<label>Nome</label><br />
					<input type="text" size="50" name="nome"/>
				</p>
				
				<p>
					<label>E-mail</label><br />
					<input type="email" size="50" name="email"/>
				</p>
				
				<p>
					<label>Sexo</label><br /><br />
					<input type="radio" name="sexo" value="Masculino"/>Masculino<br />
					<input type="radio" name="sexo" value="Feminino"/>Feminino<br />
					<input type="radio" name="sexo" value="Outros"/>Outros
				</p>
				
				<p>
					<label>Cidade/Estado</label><br /><br />
					<select name="cidade">
						<?php 

							$xml = simplexml_load_file($arquivo);
							
							foreach($xml->cidade as $i=>$v) {
								
								echo "<option>". $v->nome_cidade ."/". $v->estado ."</option>";
							
							}
						
						?>
					</select>
				</p>
				
				<input type="submit" value="Enviar"/>
				
			</form>
		
		<?php
		
			}
		
		?>
		
	</body>
	
</html>