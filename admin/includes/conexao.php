<?php
	/*
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'escola';
	$con = mysql_connect($servidor,$usuario,$senha);
	mysql_set_charset('iso-8859-1',$con);
	mysql_select_db($banco);
	*/


	$servidor 	= 'http://www.terenciani.com.br';
	$banco	  	= "teren671_bd_escola";
	$usuario  	= "teren671_admin";
	$senha 		= "152535";
	$con = mysql_connect($servidor,$usuario,$senha);
	mysql_select_db($banco);

	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

?>