<?php

	include("cabecalho.php");

	if(isset($_POST["nome"])) {

		$arquivo = "cadastro.xml";
	
		if(!file_exists($arquivo)) {
			
			$fp = fopen($arquivo, "w");
			$texto = '<?xml version="1.0"?><cadastros></cadastros>';
			fwrite($fp, $texto);
			fclose($fp);
			
		}
		
		$xml = simplexml_load_file($arquivo);
		
		$erro = false;
		
		foreach($xml->cadastro as $i=>$v) {
			
			if($v->email == $_POST["email"]) {
				
				$erro = true;
				
			}
			
		}
		
		if($erro) {
			
			echo "<h1>Cadastro já existente! <a href='form_cadastro.php'>Realizar novo cadastro</a></h1>";
			
		} else {
			
			$posicao = sizeof($xml->cadastro);
			
			$xml->cadastro[$posicao]->nome = $_POST["nome"];
			$xml->cadastro[$posicao]->email = $_POST["email"];
			$xml->cadastro[$posicao]->sexo = $_POST["sexo"];
			$xml->cadastro[$posicao]->cidade_estado = $_POST["cidade"];
			
			$xml->asXML($arquivo);
			
			echo "<h1>Cadastro realizado com sucesso! <a href='form_cadastro.php'>Realizar novo cadastro</a></h1>";
		
		}
		
	}

?>
