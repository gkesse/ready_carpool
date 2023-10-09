-- ==============================================
-- database
-- ==============================================

use db_carpool;

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
-- end
-- ==============================================

