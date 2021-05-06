CREATE TABLE 'usuario' (
  'id_usuario' int(11) NOT NULL AUTO_INCREMENT,
  'usuario' varchar(200) NOT NULL,
  'senha' varchar(30) NOT NULL,
  'nome' varchar(100) NOT NULL,
  'ano_ingresso' varchar(5) NOT NULL,
  'curso' varchar(45) NOT NULL,
  'minicurriculo' varchar(500) NOT NULL,
  PRIMARY KEY ('id_usuario')
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4