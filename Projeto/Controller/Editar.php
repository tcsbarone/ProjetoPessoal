<?php
require_once('Sistema.php');
session_start();

if(isset($_SESSION['email']) || isset($_SESSION['senha'])){
	$consultar = 'SELECT * FROM projeto_cadastrar
			  	  WHERE projeto_cadastrar_email = \''.$_SESSION['email'].'\'
			      AND projeto_cadastrar_senha = \''.$_SESSION['senha'].'\'';

	$ex_consultar = mysqli_query($GLOBALS['conexao_banco'], $consultar);

	$re_consultar = mysqli_fetch_assoc($ex_consultar);
	$retorno_dados_json['erro'] = 'N';

	$retorno_dados_json['nome']       = $re_consultar['projeto_cadastrar_nome'];
	$retorno_dados_json['cpf']        = $re_consultar['projeto_cadastrar_cpf'];
	$retorno_dados_json['nascimento'] = $re_consultar['projeto_cadastrar_datanascimento'];
	$retorno_dados_json['sexo']       = $re_consultar['projeto_cadastrar_sexo'];
	$retorno_dados_json['telefone']   = $re_consultar['projeto_cadastrar_telefone'];
	$retorno_dados_json['celular']    = $re_consultar['projeto_cadastrar_celular'];
	$retorno_dados_json['email']      = $re_consultar['projeto_cadastrar_email'];
	$retorno_dados_json['cep']        = $re_consultar['projeto_cadastrar_cep'];
	$retorno_dados_json['endereco']   = $re_consultar['projeto_cadastrar_endereco'];
	$retorno_dados_json['numero']     = $re_consultar['projeto_cadastrar_numero'];
	$retorno_dados_json['bairro']     = $re_consultar['projeto_cadastrar_bairro'];
	$retorno_dados_json['cidade']     = $re_consultar['projeto_cadastrar_cidade'];
	$retorno_dados_json['estado']     = $re_consultar['projeto_cadastrar_estado'];
	$retorno_dados_json['profissao']  = $re_consultar['projeto_cadastrar_profissao'];
	$retorno_dados_json['senha']      = $re_consultar['projeto_cadastrar_senha'];
	
	if(!empty($re_consultar) && $re_consultar != ''){
		header("Location: ../View/Html/Editar.html");
	}else{
		echo ("<script LANGUAGE='JavaScript'>
		    		window.alert('Ops, parece que a edição não está disponível no momento! Tente logar e realize a ação novamente.'); 
		   	   </script>");
	}

}else{
	echo "Session inválida.";
}
?>