CREATE TABLE 'empregador' (
  'id_empregador' int(11) NOT NULL AUTO_INCREMENT,
  'usuario' varchar(100) NOT NULL,
  'senha' varchar(30) NOT NULL,
  'nome_empresa' varchar(45) NOT NULL,
  'endereco' varchar(150) NOT NULL,
  'nome_pessoa' varchar(45) NOT NULL,
  'descricao' varchar(150) NOT NULL,
  PRIMARY KEY ('id_empregador')
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4