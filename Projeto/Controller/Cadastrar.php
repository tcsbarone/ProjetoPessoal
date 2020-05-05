<?php
require_once('Sistema.php');

$explode = explode('/',$_POST['nascimento']);
$dataSql = implode('-',array_reverse($explode));

$cadastrar = 'INSERT INTO projeto_cadastrar(
			  projeto_cadastrar_nome,
			  projeto_cadastrar_cpf,
			  projeto_cadastrar_datanascimento,
			  projeto_cadastrar_sexo,
			  projeto_cadastrar_telefone,
			  projeto_cadastrar_celular,
			  projeto_cadastrar_email,
			  projeto_cadastrar_cep,
			  projeto_cadastrar_endereco,
			  projeto_cadastrar_numero,
			  projeto_cadastrar_bairro,
			  projeto_cadastrar_cidade,
			  projeto_cadastrar_estado,
			  projeto_cadastrar_profissao,
			  projeto_cadastrar_senha)
			  VALUES (
			  \''.$_POST['nome'].'\',
			  \''.$_POST['cpf'].'\',
			  \''.$dataSql.'\',
			  \''.$_POST['genero'].'\',
			  \''.$_POST['telefone'].'\',
			  \''.$_POST['celular'].'\',
			  \''.$_POST['email'].'\',
			  \''.$_POST['cep'].'\',
			  \''.$_POST['endereco'].'\',
			  \''.$_POST['numero'].'\',
			  \''.$_POST['bairro'].'\',
			  \''.$_POST['cidade'].'\',
			  \''.$_POST['estado'].'\',
			  \''.$_POST['profissao'].'\',
			  \''.$_POST['senha'].'\')';

$ex_cadastrar = mysqli_query($GLOBALS['conexao_banco'], $cadastrar); 

if(mysqli_affected_rows($GLOBALS['conexao_banco']) > 0){
	echo ("<script LANGUAGE='JavaScript'>
		    	window.alert('Cadastro Realizado com sucesso!');
				window.location.href='../View/Html/Login.html'; 
		   </script>");
}else{
	echo ("<script LANGUAGE='JavaScript'>
		    	window.alert('Ops, algo deu errado em seu cadastro! Lembre-se de preencher todos os campos e tente novamente.');
				window.location.href='../View/Html/Cadastro.html'; 
		   </script>");
}
?>