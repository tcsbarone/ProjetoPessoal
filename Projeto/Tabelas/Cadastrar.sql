create table `projeto`.`projeto_cadastrar`( 
   `projeto_cadastrar_id` int(15) NOT NULL AUTO_INCREMENT , 
   `projeto_cadastrar_nome` varchar(300) NOT NULL , 
   `projeto_cadastrar_cpf` varchar(14) NOT NULL , 
   `projeto_cadastrar_datanascimento` date NOT NULL , 
   `projeto_cadastrar_sexo` char(1) NOT NULL , 
   `projeto_cadastrar_telefone` varchar(12) , 
   `projeto_cadastrar_celular` varchar(13) , 
   `projeto_cadastrar_email` varchar(300) NOT NULL , 
   `projeto_cadastrar_cep` varchar(9) NOT NULL , 
   `projeto_cadastrar_endereco` varchar(300) NOT NULL , 
   `projeto_cadastrar_numero` varchar(10) NOT NULL , 
   `projeto_cadastrar_bairro` varchar(300) NOT NULL , 
   `projeto_cadastrar_cidade` varchar(300) NOT NULL , 
   `projeto_cadastrar_estado` char(2) NOT NULL , 
   `projeto_cadastrar_profissao` varchar(300) NOT NULL , 
   `projeto_cadastrar_senha` varchar(300) NOT NULL , 
   PRIMARY KEY (`projeto_cadastrar_id`)
 )