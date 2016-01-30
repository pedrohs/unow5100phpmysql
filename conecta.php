<?php

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

	$usuario = "SEUUSUARIODOBANCODEDADOS";
	$senha = "SUASENHABANCODEDADOS";
	$host = "mysql.hostinger.com.br";


	$conexao = mysql_connect($host,$usuario,$senha);

	$selecionabd = mysql_select_db('NOMEDOSEUBANCODEDADOS', $conexao);

	if($conexao)
	{
		echo "conectou com sucesso";
	} else { 

		echo "ocorreu um erro";
}

?>
