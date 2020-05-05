<?php
require_once('Sistema.php');

session_start();

$_SESSION['email'] = $_GET['usuario'];
$_SESSION['senha'] = $_GET['senha'];

$consultar = 'SELECT * FROM projeto_cadastrar
			  WHERE projeto_cadastrar_email = \''.$_GET['usuario'].'\'
			  AND projeto_cadastrar_senha = \''.$_GET['senha'].'\'';

$ex_consultar = mysqli_query($GLOBALS['conexao_banco'], $consultar);

if(mysqli_num_rows($ex_consultar) > 0){
	header('Location: ../View/Html/Menu.html');
}else{
	echo ("<script LANGUAGE='JavaScript'>
		    	window.alert('Ops, parece que o seu login não foi efetuado! Tente logar novamente ou cadastre-se em nosso site.');
				window.location.href='../View/Html/Login.html'; 
		   </script>");
}
?>