<?php
require_once('Sistema.php');
session_start();

if(isset($_SESSION['email']) || isset($_SESSION['senha'])){
	
	$excluir = 'DELETE FROM projeto_cadastrar
				where projeto_cadastrar_email = \''.$_SESSION['email'].'\'
			  	AND projeto_cadastrar_senha = \''.$_SESSION['senha'].'\'';

	$ex_excluir = mysqli_query($GLOBALS['conexao_banco'], $excluir);

	if(mysqli_num_rows($ex_consultar) > 0){
		header('Location: ../View/Html/Login.html');
	}else{
		echo ("<script LANGUAGE='JavaScript'>
			    	window.alert('Aconteceu algum problema no momento da exclusão! Logue e tente novamente.');
					window.location.href='../View/Html/Login.html'; 
			   </script>");
	}
}else{
	echo "Session inválida.";
}
?>