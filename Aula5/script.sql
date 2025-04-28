create database Aula5;

use Aula5;

CREATE TABLE `Aula5`.`aluno` (
                                 `id` INT NOT NULL AUTO_INCREMENT,
                                 `NOME` VARCHAR(100) NOT NULL,
                                 `ra` INT NULL,
                                 `email` VARCHAR(45) NOT NULL,
                                 PRIMARY KEY (`id`));

insert into aluno (nome, ra, email) values
    ('Gabriel', 12345, 'gabriel.boaventura@sempreceub.com');

select * from aluno;

insert into aluno (nome, ra, email) values
    ('Gabriel', 12345, 'gabriel.boaventura@sempreceub.com');
insert into aluno (nome, ra, email) values
    ('José', null, 'jose@gmail.com');
insert into aluno (nome, ra, email) values
    ('maria', 5555, 'maria@gmail.com');
insert into aluno (nome, ra, email) values
    ('Pedro', 5666, 'pedro@gmail.com');
delete from aluno
where id =3;
insert into aluno (nome, ra, email) values
    ('maria', 5555, 'maria@gmail.com');
update aluno set ra = 88888 where id = 2;
--Crie a tabela senha
--cria senha para os usuarios manualmente--
    update aluno set senha = md5(123456) where 1
--drop table aluno;