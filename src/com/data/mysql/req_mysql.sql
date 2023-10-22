-- ==============================================
-- database
-- ==============================================

use db_readydev;

-- ==============================================
-- _user : gestion des utilisateurs
-- ==============================================

drop table if exists _user;

create table if not exists _user (
    _id int not null auto_increment -- identifiant de l'utilisateur
    , _email varchar(50) -- email de l'utilisateur
    , _password varchar(50) not null -- mot de passe de l'utilisateur
    , _create_date datetime default current_timestamp -- date de création de l'utilisateur
    , _update_date datetime on update current_timestamp -- date de modification de l'utilisateur
    , primary key (_id) -- clé primaire de l'utilisateur
    , unique (_email) -- unicité du mot de passe de l'utilisateur
);

-- ==============================================
-- _facebook : gestion des comptes facebook
-- ==============================================

drop table if exists _facebook;

create table if not exists _facebook (
    _id int not null auto_increment -- identifiant de l'utilisateur
	, _user_id varchar(50) not null -- identifiant de l'utilisateur
	, _name varchar(50) not null -- nom complet de l'utilisateur
	, _last_name varchar(50) not null -- nom de l'utilisateur
	, _first_name varchar(50) not null -- prénom de l'utilisateur
	, _email varchar(50) not null -- email de l'utilisateur
	, _photo varchar(256) not null -- photo de l'utilisateur
    , _create_date datetime default current_timestamp -- date de création de l'utilisateur
    , _update_date datetime on update current_timestamp -- date de modification de l'utilisateur
    , primary key (_id) -- clé primaire de l'utilisateur
    , unique (_user_id) -- unicité du mot de passe de l'utilisateur
);

-- ==============================================
-- end
-- ==============================================

