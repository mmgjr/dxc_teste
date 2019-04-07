<?php 

require_once 'environment.php';

$config = array();
if(ENVIRONMENT == "development"){
//Aqui é o servidor local(produção).
	define("BASE_URL","http://localhost/doublecross3/");	
	$config['dbname'] = 'doublecross';
	$config['host'] = 'localhost:3307';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
//Aqui vai as informações do Banco de Dados(Hospedagem).
	define("BASE_URL","http://localhost/doublecross3/");
	//define("BASE_URL","Link do servidor de hospedagem");
	$config['dbname'] = 'doublecross';
	$config['host'] = 'localhost:3307';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $pdo;
try {
	$pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
} catch (PDOException $e) {
	echo "ERRO: ".$e->getMessage();	
}