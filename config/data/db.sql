drop database if exists apinofram;
create database apinofram;
use apinofram;

create table produit(
    
    idP int(11) unsigned auto_increment primary key,
    code_barre varchar(255) not null,
    nom varchar(50) not null,
    prix float not null,
    createdAt datetime not null,
    updatedAt timestamp not null current_timestamp 
);

create table famille(

    idF int(11) unsigned auto_increment primary key,
    referenceF varchar(50) not null,
    nomF varchar(50) not null,
    createdAt datetime not null,
    updatedAt timestamp not null current_timestamp 

);

create table transac(

    idT int(11) unsigned auto_increment primary key,
    commentaire text not null,
    prix float not null,
    quantite float not null,
    raison enum('Nouveau stock','retour utilisable','retour inutilisable') not null,
    createdAt datetime not null,
    updatedAt timestamp not null current_timestamp,
    idP int(11) not null
);

create table lieu(

    idL int(11) unsigned auto_increment primary key,
    reference varchar(100) not null,
    description text not null,
    createdAt datetime not null,
    updatedAt timestamp not null current_timestamp
);


