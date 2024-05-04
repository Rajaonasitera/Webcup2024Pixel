-- PAYS

insert into pays values('PAYS_1', 'Vormir', 'mg');
insert into pays values('PAYS_2', 'Xandar', 'km');
insert into pays values('PAYS_3', 'Contraxia', 'mu');
insert into pays values('PAYS_4', 'Ego', 'mv');
insert into pays values('PAYS_5', 'Knowhere', 'sc');
-- insert into pays values('PAYS_6', 'Inde', 'in');

-- CATEGORIES
insert into categorie values('CAT1', 'AQUAIEN', 'categorie1.png', 'categorie1.png', 'AQUAMAN');
insert into categorie values('CAT2', 'BLACK PANTHERIEN', 'categorie2.png', 'categorie2.png', 'BLACK PANTHER');
insert into categorie values('CAT3', 'BLACK WIDOWIEN', 'categorie3.png', 'categorie3.png', 'BLACK WIDOWIEN');
insert into categorie values('CAT4', 'SPIDER MANIEN', 'categorie4.png', 'categorie4.png', 'SPIDER MAN');
insert into categorie values('CAT5', 'IRON MANIEN', 'categorie5.png', 'categorie5.png', 'IRON MAN');
insert into categorie values('CAT6', 'BATMANIEN', 'categorie6.png', 'categorie6.png', 'BAT MAN');

-- -----------------------------------------

-- UTILISATEURS
insert into client values(158, 'Pixel', 0, '2000-10-5', 'PAYS_1', 'pixel@gmail.com', 'pixel', 'Admin', 0, 'CAT1', 'Mon histoire');
insert into client values(159, 'Rasoa', 1, '1995-10-5', 'PAYS_2', 'rasoa@gmail.com', 'rasoa', 'RASOA GIRL',1, 'CAT2', 'Mon histoire');
insert into client values(160, 'Soa', 0, '1990-10-5', 'PAYS_3', 'soa@gmail.com', 'soa', 'KOTO MAN',1, 'CAT3', 'Mon histoire');
insert into client values(161, 'Fy', 0, '1995-10-5', 'PAYS_4', 'fy@gmail.com', 'fy', 'WI-FY',1, 'CAT4', 'Mon histoire');
insert into client values(162, 'Naivo', 1, '2005-10-5', 'PAYS_5', 'naivo@gmail.com', 'naivo', 'TRIMOBE',1, 'CAT5', 'Mon histoire');
insert into client values(163, 'Velo', 1, '2001-10-5', 'PAYS_1', 'velo@gmail.com', 'velo', 'R3',1, 'CAT5', 'Mon histoire');
insert into client values(164, 'Vololona', 0, '1998-10-5', 'PAYS_2', 'koly@gmail.com', 'koly', 'BOOGIMAN',1, 'CAT6', 'Mon histoire');
insert into client values(165, 'Manja', 0, '2002-10-5', 'PAYS_3', 'tefy@gmail.com', 'tefy', 'WRONG TURN',1, 'CAT1', 'Mon histoire');
insert into client values(166, 'Tia', 0, '1996-10-5', 'PAYS_4', 'tia@gmail.com', 'tia', 'DAFFY',1, 'CAT1', 'Mon histoire');
insert into client values(167, 'Narivony', 1, '1996-10-5', 'PAYS_5', 'rabe@gmail.com', 'rabe', 'TROZONA', 1, 'CAT2', 'Mon histoire');


-- SERVICES
insert into my_service values('SERV1', 'Entraînement physique');
insert into my_service values('SERV2', 'Entraînement mental');
insert into my_service values('SERV3', 'Rencontre avec votre Super Hero');

-- PACK

insert into pack values ('PACK1', 'Formation à distance', 'Description 1', 100);
insert into pack values ('PACK2', 'Formation présentielle', 'Description 2', 200);

-- ---------------------------------------------------------
-- DETAIL PACK, Make them all primary key please

insert into detail_pack values('PACK1', 'SERV1', 1);
insert into detail_pack values('PACK1', 'SERV2', 1);
insert into detail_pack values('PACK1', 'SERV3', 0);

insert into detail_pack values('PACK2', 'SERV1', 1);
insert into detail_pack values('PACK2', 'SERV2', 1);
insert into detail_pack values('PACK2', 'SERV3', 1);

-- ---------------------------------------------------------------

-- VENTE

-- insert into vente values('V_1', 159, 'PACK1', 100, '2022-01-01', '2022-03-01', 0);
-- insert into vente values('V_2', 160, 'PACK1', 100, '2022-03-03', '2022-06-06', 0);
-- insert into vente values('V_3', 161, 'PACK1', 100, '2022-04-04', '2022-07-07', 0);
-- insert into vente values('V_4', 159, 'PACK1', 100, '2022-09-09', '2022-12-12', 0);
-- insert into vente values('V_5', 160, 'PACK2', 200, '2023-01-01', '2023-03-01', 0);
-- insert into vente values('V_6', 161, 'PACK1', 100, '2023-02-01', '2023-05-01', 0);
-- insert into vente values('V_7', 159, 'PACK2', 200, '2023-07-01', '2023-10-01', 0);
-- insert into vente values('V_8', 159, 'PACK1', 100, '2023-01-01', '2023-03-01', 0);
-- insert into vente values('V_9', 160, 'PACK2', 200, '2023-07-01', '2023-10-01', 0);
-- insert into vente values('V_10', 161, 'PACK1', 100, '2023-08-01', '2023-11-01', 0);
-- insert into vente values('V_11', 162, 'PACK2', 200, '2022-01-01', '2022-03-01', 0);
-- insert into vente values('V_12', 163, 'PACK1', 100, '2022-01-01', '2022-03-01', 0);


-- -------------------------------------------------------------

-- DOONNESS ---------------------------------


-- ------------ QUESTIONS POUR LES ORIENTATIONS

insert into question_cat values('Q1', 'Quelle est votre principale motivation pour combattre le crime ?');
insert into question_cat values('Q2', 'Comment gérez-vous le stress pendant les combats ?');
insert into question_cat values('Q3', 'Comment décririez-vous votre relation avec vos alliés ?');

-- ------------ REPONSE POUR LES ORIENTATIONS

insert into reponse_cat values('R1', 'Q1', 'Protéger les innocents à tout prix.', 'CAT1', 'r1.jpg');
insert into reponse_cat values('R2', 'Q1', 'Venger une injustice personnelle.', 'CAT2', 'r2.jpg');
insert into reponse_cat values('R3', 'Q1', 'Gagner en renommée et en reconnaissance.', 'CAT3', 'r3.jpg');

insert into reponse_cat values('R4', 'Q2', 'Je me concentre sur ma respiration.', 'CAT4', 'r4.jpg');
insert into reponse_cat values('R5', 'Q2', 'Je me laisse emporter par adrénaline.', 'CAT5', 'r5.jpg');
insert into reponse_cat values('R6', 'Q2', 'Je cherche à impressionner le public.', 'CAT6', 'r6.jpg');

insert into reponse_cat values('R7', 'Q3', 'Nous sommes une famille, prêts à nous soutenir coûte que coûte.', 'CAT6', 'r7.jpg');
insert into reponse_cat values('R8', 'Q3', 'Je me méfie souvent de mes coéquipiers, mais je sais quand faire confiance.', 'CAT6', 'r8.jpg');
insert into reponse_cat values('R9', 'Q3', 'Je préfère travailler seul pour éviter les complications.', 'CAT6', 'r9.jpg');

-- -----------------------------------------------------------------