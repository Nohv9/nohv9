CREATE DATABASE lwb;
use lwb
CREATE TABLE pwd_pf (idpf INT(5), senha VARCHAR(64), user VARCHAR(15), nome VARCHAR(30));
INSERT INTO pwd_pf (senha, user, nome) VALUES ("teste", "hsc", "Gabriel H.S.C");

CREATE TABLE userC (idpf INT(5), cpf INT(13), nome VARCHAR(30), email VARCHAR(30), dataa VARCHAR(10), endereco VARCHAR(30), 
                    telefone INT(13), objetivo VARCHAR(300), form_acad VARCHAR(300), exp_profi VARCHAR(600),
                    cursos_adici VARCHAR(300), idioma VARCHAR(200));




CREATE TABLE pwd_pj (idpj INT(5), senha VARCHAR(64), user VARCHAR(15), nome VARCHAR(30));
INSERT INTO pwd_PJ (senha, user, nome) VALUES ("teste1", "lwb", "Litoral Work Bank");


CREATE TABLE userJ (idpj INT(5), cnpj VARCHAR(18), senha VARCHAR(64), nomej VARCHAR(30), enderecoj VARCHAR(30), email VARCHAR (30), qt_a INT(7));
CREATE TABLE anc (idpj INT(5), nome_empresa VARCHAR(30), nm_cargo VARCHAR(30), cep INT(13), salario VARCHAR(15), 
                    beneficios VARCHAR(60), type_contrato VARCHAR(15), descricao VARCHAR(600), qt_a INT(7));
