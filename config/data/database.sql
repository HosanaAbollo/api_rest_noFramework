drop database if exists apinofram;
create database apinofram;
use apinofram;

create table produit(
    
    idp int(11) unsigned auto_increment,
    code_barre varchar(255) not null,
    nom varchar(50) not null,
    prix float not null,
    createdAt datetime not null,
    updatedAt timestamp not null current_timestamp,
    famille_id int(11) not null,
    lieu_id int(11) not null,
    foreign key(famille_id) references famille(idF),
    foreign key(lieu_id) references lieu(idL),
    primary key(idP)
);

create table Famille(

    idf int(11) unsigned auto_increment,
    referencef varchar(50) not null,
    nomf varchar(50) not null,
    createdAt datetime not null,
    updatedAt timestamp not null current_timestamp,
    primary key(idf)
);

create table Transac(

    idt int(11) unsigned auto_increment,
    commentaire text not null,
    prix float not null,
    quantite float not null,
    raison enum('Nouveau stock','rendu utilisable','rendu inutilisable') not null,
    createdAt datetime not null,
    updatedAt timestamp not null current_timestamp,
    idP int(11) not null,
    foreign key(idP) references produit(idP) 
    primary key(idT)
);

create table Lieu(

    idl int(11) unsigned auto_increment,
    reference varchar(100) not null,
    details text not null,
    createdAt datetime not null,
    updatedAt timestamp not null current_timestamp,
    primary key(idL)
);


