<?php
	$servidor = "localhost";
	$usuario = "root";
	//$senha = "";//AMBIENTE DE PRODUÇÃO
	$senha = "";//AMBIENTE DE DESENVOLVIMENTO
	$dbname = "cadastro";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
	
	?>
