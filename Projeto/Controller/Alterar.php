<?php
require_once('Sistema.php');
session_start();

if(isset($_SESSION['email']) || isset($_SESSION['senha'])){

	while($_POST){
		if(current($_POST) != ''){
			$atualizar = 'UPDATE projeto_cadastrar
						  SET projeto_cadastrar_'.key($_POST).'='.current($_POST).'
						  WHERE projeto_cadastrar_email = '.$_SESSION['email'].'
						  OR projeto_cadastrar_senha = '.$_SESSION['senha'];

		}
		next($_POST);
	}

}

?>