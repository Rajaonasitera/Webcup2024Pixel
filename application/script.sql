-- LISTE DES PAYES

create table pays(
    id_pays varchar(50) primary key,
    nom_pays varchar(50),
    code_pays varchar(10)
) ENGINE = InnoDB;

-- ------------------------------------------------------

-- ---------- CATEGORIES DE POUVOIR 
create table categorie(
    id_categorie varchar(10) primary key,
    nom_categorie varchar(50),
    image_cat varchar(100),
    image_prof varchar(100),        -- Image du prof
    nom_prof varchar(100)           -- Nom de prof
)ENGINE = InnoDB;

-- --------------------------------------------------------

-- UTILISATEURS

create table client(
    id_client int auto_increment primary key,
    nom_client varchar(100),
    genre int,
    dtn date,
    id_pays varchar(50),
    email varchar(100),
    mdp varchar(50),
    pseudo varchar(100),
    is_admin int,
    id_categorie varchar(10),
    foreign key(id_pays) references pays(id_pays),
    foreign key(id_categorie) references categorie(id_categorie)
)ENGINE = InnoDB;

-- --------------------------------------------------------
-- SERVICES

create table my_service(
    id_service varchar(10) primary key,
    nom_service varchar(100)
)ENGINE = InnoDB;

-- ----------------------------------------------------------
-- PACK (OU IL Y A PLUSIEURS SERVICES)

create table pack(
    id_pack varchar(10) primary key,
    nom_pack varchar(100),
    descri varchar(100),
    pu numeric
)ENGINE = InnoDB;
-- ---------------------------------------------------------
-- DETAIL PACK, Make them all primary key please
create table detail_pack(
    id_pack varchar(10),
    id_service varchar(10),
    etat_service int,
    foreign key(id_pack) references pack(id_pack),
    foreign key(id_service) references my_service(id_service)
)ENGINE = InnoDB;

-- -----------------------------------------------------------
-- VENTE DE SERVICE

create table vente(
    id_vente int auto_increment primary key,
    id_client int,
    id_pack varchar(10),
    pu_pack numeric,
    dateSubscription date,
    endSubscription date,
    etat int,           -- Au cas ou le client ne paie pas
    foreign key(id_client) references client(id_client),
    foreign key(id_pack) references pack(id_pack)
)ENGINE = InnoDB;

-- -----------------------------------------------------------

-- MODE DE PAIEMENT

-- create table mode_paiement(
--     id_mode varchar(10) primary key,
--     nom_mode varchar(50),
--     image_path varchar(100)
-- )ENGINE = InnoDB;

-- --------------------------------------------------------------
-- PAIEMENT DES UTILISATEURS (A REVOIR IHANY)

-- create table paiement(
--     id_paiement int auto_increment primary key,
--     id_vente int,
--     id_mode varchar(10),
--     numero_compte varchar(100),
--     foreign key(id_vente) references vente(id_vente),
--     foreign key(id_mode) references mode_paiement(id_mode)
-- )ENGINE = InnoDB;

-- -----------------------------------------------------------------

-- --------------------- PIXEL -------------------------------------




-- ------------ QUESTIONS POUR LES ORIENTATIONS

create table question_cat(
    id_question varchar(10) primary key,
    nom_question text
)ENGINE = InnoDB;

-- ------------- REPONSE POUR QUESTIONS
create table reponse_cat(
    id_reponse varchar(10) primary key,
    id_question varchar(10),
    nom_reponse text,
    id_categorie varchar(10),
    image_path varchar(50),
    foreign key(id_categorie) references categorie(id_categorie),
    foreign key(id_question) references question_cat(id_question)
)ENGINE = InnoDB;

-- ----------- ALTER TABLE CLIENT
alter table client add column histoire text;

-- -------------------------------------------------------------------------

-- -------------------------- PART 3 -------------------------
-- HABILITE

create table hability(
    id_hability varchar(50) primary key,
    nom_hability varchar(50)
)ENGINE = InnoDB;

-- ---------------------------------------------------------------
-- HABILITE CLIENT

create table hability_client(
    id_hability_client int auto_increment primary key,
    id_hability varchar(50),
    id_client int,
    valeur int,
    dateHability date,
    foreign key(id_client) references client(id_client),
    foreign key(id_hability) references hability(id_hability)
)ENGINE = InnoDB;

-- -------------------------------------------------------------
-- VALEUR CATEGORIE

create table note_category(
    id_cat_note int auto_increment primary key,
    id_client int,
    noteCat int,
    dateNote date,
    foreign key(id_client) references client(id_client)
)ENGINE = InnoDB;

-- -------------------------------------------------------------
-- PROGRAMME D'EXERCICE

create table programme(
    id_programme varchar(50) primary key,
    nom_programme varchar(100),
    duree varchar(50)
)ENGINE = InnoDB;

-- --------------------------------------------------------------
-- EXERCICE

create table exercice(
    id_exercice varchar(50) primary key,
    nom_exercice varchar(100),
    id_programme varchar(50),
    foreign key(id_programme) references programme(id_programme)
)ENGINE = InnoDB;

-- ---------------------------------------------------------
-- RESULTAT D'UN PROGRAMME -> HABILITY

create table result_hability(
    id_result_hability varchar(10) primary key,
    id_programme varchar(50),
    id_hability varchar(50),
    valeurPlus int,
    foreign key(id_programme) references programme(id_programme),
    foreign key(id_hability) references hability(id_hability)
)ENGINE = InnoDB;

-- -------------------------------------------------------------
-- RESULTAT D'UN PROGRAMME -> CATEGORIE

create table result_categorie(
    id_result_hability varchar(10) primary key,
    id_programme varchar(50),
    id_categorie varchar(10),
    valeurPlus int,
    foreign key(id_programme) references programme(id_programme),
    foreign key(id_categorie) references categorie(id_categorie)
)ENGINE = InnoDB;

-- ------------------------------------------------------------

-- LISTE DE PROGRAMME DU CLIENT
create table programme_client(
    id_p_client int auto_increment primary key,
    id_programme varchar(50),
    dateDebut date,
    statusProgramme int,
    foreign key(id_programme) references programme(id_programme)
);

-- ----------------------------------------------------------------
