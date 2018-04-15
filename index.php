<html>

	<head>
	
		<meta charset="utf-8"/>
		<title>Início</title>
		
	</head>
	
	<body>
	
		<?php
			
			include("cabecalho.php");
			
			$estado = "estados.xml";
			$cidade = "cidades.xml";
			$cadastro = "cadastro.xml";
			
			
			/* ESTADOS ----------------------------------------------------------------- */
			
			echo "<div class='tabela'><h1>Estados</h1>";
			
			if(file_exists($estado)) {
				
				echo 
				"
				<table>
					<thead>
						<tr>
							<th>Sigla</th>
							<th>Estado</th>
						</tr>
					</thead>
					<tbody>
				";
				
				$xml = simplexml_load_file($estado);
				
				foreach($xml->estado as $i=>$v) {
					
					echo
					"
					<tr>
						<td>$v->sigla</td>
						<td>$v->nome</td>
					</tr>
					";
					
				}
				
				echo 
				"
					</tbody>
				</table>
				";
				
			} else {
				
				echo "<h2>Estados não cadastrados</h2>";
				
			}
			
			/* CIDADES ----------------------------------------------------------------- */
			
			echo "</div><div class='tabela'><h1>Cidades</h1>";
			
			if(file_exists($cidade)) {
				
				echo 
				"
				<table>
					<thead>
						<tr>
							<th>Cidade</th>
							<th>Estado</th>
						</tr>
					</thead>
					<tbody>
				";
				
				$xml = simplexml_load_file($cidade);
				
				foreach($xml->cidade as $i=>$v) {
					
					echo
					"
					<tr>
						<td>$v->nome_cidade</td>
						<td>$v->estado</td>
					</tr>
					";
					
				}
				
				echo 
				"
					</tbody>
				</table>
				";
				
			} else {
				
				echo "<h2>Cidades não cadastradas</h2>";
				
			}
			
			/* CADASTROS ----------------------------------------------------------------- */
			
			echo "</div><div class='tabela_c'><h1>Cadastros</h1>";
			
			if(file_exists($cadastro)) {
				
				echo 
				"
				<table>
					<thead>
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th>Sexo</th>
							<th>Cidade/Estado</th>
						</tr>
					</thead>
					<tbody>
				";
				
				$xml = simplexml_load_file($cadastro);
				
				foreach($xml->cadastro as $i=>$v) {
					
					echo
					"
					<tr>
						<td>$v->nome</td>
						<td>$v->email</td>
						<td>$v->sexo</td>
						<td>$v->cidade_estado</td>
					</tr>
					";
					
				}
				
				echo 
				"
					</tbody>
				</table>
				";
				
			} else {
				
				echo "<h2>Cadastros não realizados</h2>";
				
			}
		?>
		</div>
		
	</body>
	
</html>