-- VUE UTILISATEURS ET PAYS

create or replace view v_user_complet as (
    select
        client.id_client,
        client.nom_client,
        client.prenom_client,
        client.genre,
        client.dtn,
        client.email,
        client.id_pays,
        pays.nom_pays,
        pays.code_pays
    from client
    join pays on pays.id_pays = client.id_pays
);
-- -------------------------------------------------------

-- Statistique Vente (Nombre et Chiffre d'affaire)

create or replace view v_stat_vente as (
    select
        count(id_vente) as nbr_vente,
        sum(pu_pack) as ca
    from vente
);

-- -----------------------------------------------------
-- Meilleur pack avec nbr vente et ca par pack (Metier fa tsy mety subqueries MYSQL)

-- create or replace view v_meilleur_pack as(
    select 
        pack.nom_pack,
        t.*
    from 
        (select
            id_pack,
            count(id_pack) as nbr_vente,
            sum(pu_pack) as ca_pack
        from vente
        group by id_pack
        order by nbr_vente desc 
        limit 1
        ) as t 
    join pack on pack.id_pack = t.id_pack;
-- );

-- --------------------------------------------------------------
-- VUE LISTE DES VENTES GENERAL
create or replace view v_general_vente as (
    select
        v_user_complet.*,
        vente.id_vente,
        vente.id_pack,
        vente.pu_pack,
        vente.dateSubscription,
        vente.etat,
        pack.nom_pack
    from vente
    join v_user_complet on v_user_complet.id_client = vente.id_client
    join pack on pack.id_pack = vente.id_pack
);

-- ----------------------------------------------------------------
-- CHIFFRE D'AFFAIRE ET NOMBRE D'UTILISATEURS PAR PAYS


create or replace view v_vente_pays as (
    select
        pays.id_pays,
        pays.nom_pays,
        coalesce (count(v_general_vente.id_pays), 0) as nbr_utilisateurs,
        coalesce (sum(v_general_vente.pu_pack), 0) as ca_pays
    from pays
    left join v_general_vente on v_general_vente.id_pays = pays.id_pays
    group by pays.id_pays, pays.nom_pays
    order by ca_pays desc
);


-- ----------------------------------------------------------------

-- AGE DES UTILISATEURS

create or replace view v_age_utlisateur as (
    select 
        genre,
        round(DATEDIFF((now()), dtn) / 365) AS age
    from client
);

-- -------------------------------------------------------------
-- UTILISATEURS AVEC NOMBRE DE VENTE ET CA PAR USERS LIB

create or replace view v_vente_utilisateur_lib as (
    select
        client.id_client,
        coalesce ((sum(v_general_vente.pu_pack)), 0) as ca_client,
        coalesce ((count(v_general_vente.id_client)), 0) as nbr_vente,
        max(v_general_vente.dateSubscription) as last_order
    from client
    left join v_general_vente on v_general_vente.id_client = client.id_client
    group by client.id_client
);

-- UTILISATEURS AVEC NOMBRE DE VENTE ET CA PAR USERS COMPLET
create or replace view v_vente_utilisateur_complet as (
    select
        client.*,
        v_vente_utilisateur_lib.ca_client,
        v_vente_utilisateur_lib.nbr_vente,
        CASE 
            WHEN v_vente_utilisateur_lib.last_order IS NULL THEN '--/--/--'
            ELSE v_vente_utilisateur_lib.last_order
        END AS last_order
    from 
        v_vente_utilisateur_lib
    join v_user_complet as client on client.id_client = v_vente_utilisateur_lib.id_client
    order by v_vente_utilisateur_lib.nbr_vente desc
);

-- --------------------------------------------------

-- VENTE DES UTILISATEURS

create or replace view v_vente_history as (
    select
        id_client,
        nom_client,
        prenom_client,
        nom_pack,
        dateSubscription,
        pu_pack,
        CASE 
            WHEN etat = 0 THEN 'Awaiting'
            ELSE 'Paid'
        END AS status_paiement,
        CASE 
            WHEN etat = 0 THEN 'bi bi-clock-history'
            ELSE 'bi bi-check-circle'
        END AS icon_status
    from v_general_vente
    order by dateSubscription
);

-- -----------------------------------------------------------------
-- PACK AVEC LEUR DETAILS

create or replace view v_detail_pack as (
    select
        pack.nom_pack,
        pack.pu,
        my_service.nom_service,
        detail_pack.*,
        CASE 
            WHEN etat_service = 0 THEN 'del'
            ELSE 'span'
        END AS balise,
        CASE 
            WHEN etat_service = 0 THEN 'text-muted'
            ELSE ''
        END AS style_texte
    from detail_pack
    join pack on detail_pack.id_pack = pack.id_pack
    join my_service on my_service.id_service = detail_pack.id_service
);



