<?php

	include("cabecalho.php");

	if(isset($_POST["sigla"])) {
		
		$arquivo = "estados.xml";
		
		if(!file_exists($arquivo)) {
			
			$fp = fopen($arquivo, "w");
			$texto = '<?xml version="1.0"?><estados></estados>';
			fwrite($fp, $texto);
			fclose($fp);
			
		}
		
		$xml = simplexml_load_file($arquivo);
		
		$erro = false;
		
		foreach($xml->estado as $i=>$v) {
			
			if($v->sigla == $_POST["sigla"]) {
				
				$erro = true;
				
			}
			
			if($v->nome == $_POST["estado"]) {
				
				$erro = true;
				
			}
			
		}
		
		if($erro) {
			
			echo "<h1>Estado já cadastrado! <a href='form_estado.php'>Realizar novo cadastro</a></h1>";
			
		} else {
			
			$posicao = sizeof($xml->estado);
			
			$xml->estado[$posicao]->sigla = $_POST["sigla"];
			$xml->estado[$posicao]->nome = $_POST["estado"];
			
			$xml->asXML($arquivo);
			
			echo "<h1>Estado cadastrado com sucesso! <a href='form_estado.php'>Realizar novo cadastro</a></h1>";
		
		}
		
	}

?>
