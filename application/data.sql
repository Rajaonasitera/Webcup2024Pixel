-- PAYS

insert into pays values('PAYS_1', 'Madagascar', 'mg');
insert into pays values('PAYS_2', 'Comores', 'km');
insert into pays values('PAYS_3', 'Maurice', 'mu');
insert into pays values('PAYS_4', 'Maldives', 'mv');
insert into pays values('PAYS_5', 'Seychelles', 'sc');
-- insert into pays values('PAYS_6', 'Inde', 'in');

-- UTILISATEURS
insert into client values(158, 'Pixel', 'Me', 0, '2000-10-5', 'PAYS_1', 'pixel@gmail.com', 'pixel', 0);
insert into client values(159, 'Rasoa', 'Nary', 1, '1995-10-5', 'PAYS_2', 'rasoa@gmail.com', 'rasoa', 1);
insert into client values(160, 'Soa', 'Koto', 0, '1990-10-5', 'PAYS_3', 'soa@gmail.com', 'soa', 1);
insert into client values(161, 'Fy', 'Soa', 0, '1995-10-5', 'PAYS_4', 'fy@gmail.com', 'fy', 1);
insert into client values(162, 'Naivo', 'Raly', 1, '2005-10-5', 'PAYS_5', 'naivo@gmail.com', 'naivo', 1);
insert into client values(163, 'Velo', 'Rija', 1, '2001-10-5', 'PAYS_1', 'velo@gmail.com', 'velo', 1);
insert into client values(164, 'Vololona', 'Koly', 0, '1998-10-5', 'PAYS_2', 'koly@gmail.com', 'koly', 1);
insert into client values(165, 'Manja', 'Tefy', 0, '2002-10-5', 'PAYS_3', 'tefy@gmail.com', 'tefy', 1);
insert into client values(166, 'Tia', 'Koloina', 0, '1996-10-5', 'PAYS_4', 'tia@gmail.com', 'tia', 1);
insert into client values(167, 'Narivony', 'Rabe', 1, '1996-10-5', 'PAYS_5', 'rabe@gmail.com', 'rabe', 1);


-- SERVICES
insert into my_service values('SERV1', 'Service 1');
insert into my_service values('SERV2', 'Service 2');
insert into my_service values('SERV3', 'Service 3');

-- PACK

insert into pack values ('PACK1', 'PACK 1', 'Description 1', 100);
insert into pack values ('PACK2', 'PACK 2', 'Description 2', 200);


-- ---------------------------------------------------------
-- DETAIL PACK, Make them all primary key please

insert into detail_pack values('PACK1', 'SERV1');
insert into detail_pack values('PACK1', 'SERV2');
insert into detail_pack values('PACK2', 'SERV1');
insert into detail_pack values('PACK2', 'SERV2');
insert into detail_pack values('PACK2', 'SERV3');

-- ---------------------------------------------------------------
-- MODE DE PAIEMENT

insert into mode_paiement values('M1', 'Mvola', 'mvola');
insert into mode_paiement values('M2', 'PayPal', 'paypal');
insert into mode_paiement values('M3', 'Visa Card', 'card');

-- ---------------------------------------------------------------
-- VENTE

insert into vente values('V_1', 159, 'PACK1', 100, '2022-01-01', '2022-03-01', 0);
insert into vente values('V_2', 160, 'PACK1', 100, '2022-03-03', '2022-06-06', 0);
insert into vente values('V_3', 161, 'PACK1', 100, '2022-04-04', '2022-07-07', 0);
insert into vente values('V_4', 159, 'PACK1', 100, '2022-09-09', '2022-12-12', 0);
insert into vente values('V_5', 160, 'PACK2', 200, '2023-01-01', '2023-03-01', 0);
insert into vente values('V_6', 161, 'PACK1', 100, '2023-02-01', '2023-05-01', 0);
insert into vente values('V_7', 159, 'PACK2', 200, '2023-07-01', '2023-10-01', 0);
insert into vente values('V_8', 159, 'PACK1', 100, '2023-01-01', '2023-03-01', 0);
insert into vente values('V_9', 160, 'PACK2', 200, '2023-07-01', '2023-10-01', 0);
insert into vente values('V_10', 161, 'PACK1', 100, '2023-08-01', '2023-11-01', 0);
insert into vente values('V_11', 162, 'PACK2', 200, '2022-01-01', '2022-03-01', 0);
insert into vente values('V_12', 163, 'PACK1', 100, '2022-01-01', '2022-03-01', 0);


-- -------------------------------------------------------------
-- MODIFICATION DETAIL PACK

update detail_pack set etat_service = 1;

-- -------------------------------------------------------------
insert into detail_pack values('PACK1', 'SERV3', 0);

-- -------------------------------------------------------------