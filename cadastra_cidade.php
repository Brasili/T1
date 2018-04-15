<?php

	include("cabecalho.php");

	if(isset($_POST["nome_cidade"])) {

		$arquivo = "cidades.xml";
	
		if(!file_exists($arquivo)) {
			
			$fp = fopen($arquivo, "w");
			$texto = '<?xml version="1.0"?><cidades></cidades>';
			fwrite($fp, $texto);
			fclose($fp);
			
		}
		
		$xml = simplexml_load_file($arquivo);
		
		$erro = false;
		
		foreach($xml->cidade as $i=>$v) {
			
			if($v->nome_cidade == $_POST["nome_cidade"]) {
				
				$erro = true;
				
			}
			
		}
		
		if($erro) {
			
			echo "<h1>Cidade já cadastrada! <a href='form_cidade.php'>Realizar novo cadastro</a></h1>";
			
		} else {
			
			$posicao = sizeof($xml->cidade);
			
			$xml->cidade[$posicao]->estado = $_POST["estado"];
			$xml->cidade[$posicao]->nome_cidade = $_POST["nome_cidade"];
			
			$xml->asXML($arquivo);
			
			echo "<h1>Cidade cadastrada com sucesso! <a href='form_cidade.php'>Realizar novo cadastro</a></h1>";
		
		}
		
	}

?>
