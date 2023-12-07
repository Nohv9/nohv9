CREATE DATABASE lwb;
use lwb
CREATE TABLE pwd_pf (idpf INT(5) AUTO_INCREMENT, email VARCHAR(100), cpf VARCHAR(20), nome VARCHAR(40),
    senha VARCHAR(64), nasc VARCHAR(20), adress VARCHAR(50), telefone VARCHAR(20), genero VARCHAR(11),
    obj VARCHAR(400), hab VARCHAR(600), formac VARCHAR(600), exp VARCHAR(600), idioma VARCHAR(600),
    bairro VARCHAR(40), cidade VARCHAR(45), PRIMARY KEY(idpf), UNIQUE(cpf), UNIQUE(idpf), UNIQUE(email), UNIQUE(telefone));

CREATE TABLE pwd_pj (idpj INT(5) AUTO_INCREMENT, email VARCHAR(100), cnpj VARCHAR(14), nome VARCHAR(40), senha VARCHAR(64), PRIMARY KEY(idpj), UNIQUE(email), UNIQUE(cnpj));

CREATE TABLE vaga (idvg INT(7) AUTO_INCREMENT, email VARCHAR(100), empresa VARCHAR(40), title VARCHAR(30), salario VARCHAR(9), descri varchar(900), PRIMARY KEY(idvg));
