# SistemaSimplesdeCadastroeLogin
Sistema simples de Cadastro e login
Devido a um erro na instalação do meu MYSQL sempre que tento exportar algo não funciona,
então é necessário criar um esquema chamado siscadlog e crie a tabela abaixo.

sql:
CREATE TABLE `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4
