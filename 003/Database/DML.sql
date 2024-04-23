
USE ESCOLA;

INSERT INTO ALUNO (RA, NOME, ENDER, FONE) VALUES 
(1, 'Florinda Flor',  'Rua dos Amores, 14',    '(14)98333-3333'),
(2, 'João Silvério',  'Rua das Rolees, 23',    '(14)98111-4534'),
(3, 'Tiago Silva',    'Rua das cores, 22',     '(14)98333-4434'),
(4, 'Joel Soares',    'Rua das biqueras, 157', '(14)99790-1533'),
(5, 'Rafael Andrade', 'Rua das Dores, 11',     '(14)99332-3434');

INSERT INTO disciplina (IDDISC, NOME) VALUES
(1,'Matemática'),
(2,'Português'),
(3,'História'),
(4,'Física'),
(5,'Química');

INSERT INTO nota (ra, iddisc, nota1, nota2, nota3) VALUES
(1,1,8,9,7),
(1,2,10,9,10),
(1,3,8,9,10),
(1,4,9,10,7),
(1,5,7,6,7),
(2,1,6,6,7),
(2,2,7,6,5),
(2,3,8,7,6),
(2,4,7,6,5),
(2,5,6,6,6),
(3,1,7,6,7),
(3,2,7,8,9),
(3,3,8,9,8),
(3,4,7,8,10),
(3,5,8,10,10),
(4,1,7,8,7),
(4,2,7,6,6),
(4,3,6,4,7),
(4,4,4,8,10),
(4,5,5,5,6),
(5,1,7,8,7),
(5,2,7,4,6),
(5,3,6,8,7),
(5,4,6,8,10),
(5,5,5,6,7);
