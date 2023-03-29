<?php
	$dsn = "mysql:host=localhost;dbname=cinedesweb2";
	$user = "root";
	$pass = ""; //Nas máquinas do wamp a senha costuma ser wamp
	try{
		//Argumentos: data source name (driver, host e base de dados), usuário e senha
		$conexao = new PDO($dsn,$user,$pass);
		//Coloca o PDO p/ trabalhar no modo de tratamento de exceções
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		//Se não for possível conectar, montar uma resposta p/ ser devolvida com JSON
		$resposta["erro"]=true;
		$resposta["msgErro"] = "Erro ao conectar com o BD. ".$e->getMessage();
		//Transformando a matriz associativa num objeto JSON em forma de texto
		// e devolvendo para o cliente (javascript)
		echo json_encode($resposta);
		exit();
	}	
?>
