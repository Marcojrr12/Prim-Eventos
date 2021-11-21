INSERT INTO CATEGORIA_EVENTO VALUES ('1','VIP');
INSERT INTO CATEGORIA_EVENTO VALUES ('2','Social');
INSERT INTO CATEGORIA_EVENTO VALUES ('3','Corporativo');
INSERT INTO CATEGORIA_EVENTO VALUES ('4','Religioso');
INSERT INTO CATEGORIA_EVENTO VALUES ('5','Cultural');
INSERT INTO CATEGORIA_EVENTO VALUES ('6','Esportivo');
INSERT INTO CATEGORIA_EVENTO VALUES ('7','Educacional');

INSERT INTO CATEGORIA_SERVICO VALUES ('1','VIP');
INSERT INTO CATEGORIA_SERVICO VALUES ('2','Barman');
INSERT INTO CATEGORIA_SERVICO VALUES ('3','Bebidas');
INSERT INTO CATEGORIA_SERVICO VALUES ('4','Som e Iluminação');
INSERT INTO CATEGORIA_SERVICO VALUES ('5','Buffet');
INSERT INTO CATEGORIA_SERVICO VALUES ('6','Copos');
INSERT INTO CATEGORIA_SERVICO VALUES ('7','DJ');
INSERT INTO CATEGORIA_SERVICO VALUES ('8','Decoração');
INSERT INTO CATEGORIA_SERVICO VALUES ('9','Local');
INSERT INTO CATEGORIA_SERVICO VALUES ('10','Segurança');
INSERT INTO CATEGORIA_SERVICO VALUES ('11','Serviços Gerais');
INSERT INTO CATEGORIA_SERVICO VALUES ('12','Bolos');

INSERT INTO USUARIO VALUES ('rodrigo@hotmail.com','Rodrigo B.G.','Admin123');
INSERT INTO USUARIO VALUES ('italo@hotmail.com','Ítalo Lana','Admin123');
INSERT INTO USUARIO VALUES ('marco@hotmail.com','Marco JR','Admin123');
INSERT INTO USUARIO VALUES ('pedro@hotmail.com','Pedro Santos','Admin123');

INSERT INTO EVENTO VALUES ('','Festa inauguração PRIM','Bem vindo a primeira festa desse site.Será na rua X em frente a PUC Contagem.','32340-517','(31)9 9707-6824','2021-06-18','19:00:00','20.00','1.00','50','0','rodrigo@hotmail.com','1');
INSERT INTO EVENTO VALUES ('','Palestra Indústria 4.0','Palestra que irá mudar sua visão em sua empresa.','33111-555','(31)9 9876-5432','2021-08-30','15:30:00','50.00','1.00','100','0','rodrigo@hotmail.com','3');
INSERT INTO EVENTO VALUES ('','Lagunas Fest','A melhor resenha do Laguna','33411-585','(31)9 9867-4532','2021-07-20','18:00:00','20.00','1.00','100','0','marco@hotmail.com','2');
INSERT INTO EVENTO VALUES ('','Rave psicodelica','Venha expor o que tem de melhor em você','33411-585','(31)9 9867-4532','2021-08-25','15:00:00','30.00','1.00','900','0','marco@hotmail.com','2');
INSERT INTO EVENTO VALUES ('','Social de virada','Venha comemorar a virada do ano com nós','33411-585','(31)9 9867-4532','2021-12-31','18:00:00','15.00','1.00','150','0','marco@hotmail.com','2');
INSERT INTO EVENTO VALUES ('','Fogueira do bem estar','Venha curtir uma noite no acampamento','33411-585','(31)9 9867-4532','2021-08-08','18:00:00','10.00','1.00','200','0','pedro@hotmail.com','4');
INSERT INTO EVENTO VALUES ('','Campeonato dos Bronzes','Traga sua equipe para jogar um lolzin','33411-585','(31)9 9867-4532','2021-09-18','13:30:00','5.00','1.00','30','0','pedro@hotmail.com','6');
INSERT INTO EVENTO VALUES ('','Corpus christi','Venha para maior festa corpus christi','33411-585','(31)9 9867-4532','2022-06-03','13:30:00','5.00','1.00','30','0','pedro@hotmail.com','6');


INSERT INTO SERVICO VALUES ('','Bebidas feitas na hora','Temos todos os tipos de bebidas disponíveis','33111-555','(31)9 9876-5432','100.00','1.00','rodrigo@hotmail.com','2');
INSERT INTO SERVICO VALUES ('','DJ Azeite','O melhor DJ da região','33111-553','(31)9 9876-5432','300.00','1.00','rodrigo@hotmail.com','7');
INSERT INTO SERVICO VALUES ('','Proteção Segurança Limits','A melhor segurança de Minas Gerais','33222-552','(31)9 9876-5432','1000.00','1.00','rodrigo@hotmail.com','10');
INSERT INTO SERVICO VALUES ('','Bolo da vovó','O Bolo apenas','33212-352','(31)9 9876-5432','200.00','1.00','rodrigo@hotmail.com','12');
INSERT INTO SERVICO VALUES ('','Limpeza','Limpar área do evento','33212-569','(31)9 9876-5432','100.00','1.00','italo@hotmail.com','11');
INSERT INTO SERVICO VALUES ('','Wisky','Venda de Wiskys','33212-569','(31)9 9876-5432','30.00','1.00','italo@hotmail.com','3');
INSERT INTO SERVICO VALUES ('','Baloes de Gas helio','Enfeite para o ambiente','33212-569','(31)9 9876-5432','50.00','1.00','italo@hotmail.com','8');
INSERT INTO SERVICO VALUES ('','Caixa dos Crias','Aluguel de som','33212-569','(31)9 9876-5432','1000.00','1.00','italo@hotmail.com','4');

SELECT * FROM USUARIO;
SELECT * FROM CATEGORIA_EVENTO;
SELECT * FROM CATEGORIA_SERVICO;
SELECT * FROM EVENTO;
SELECT * FROM SERVICO;
SELECT * FROM INGRESSO;
