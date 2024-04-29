drop database if exists Troc_objets_entre_enfants;
create database Troc_objets_entre_enfants; 
use Troc_objets_entre_enfants; 


create table categorie (
	idcategorie int(3) not null auto_increment, 
	nom_c varchar (50), 
	desc_c varchar (50),
	primary key(idcategorie)
);
create table troc (
	idtroc int(3) not null auto_increment, 
	nom_t varchar (50),
	nbr_objet int(3),
	annee varchar(10), 
	primary key (idtroc)
);
create table Objet (
	idObjet int(3) not null auto_increment, 
	nom_o varchar (50), 
	couleur varchar(50),
	taille varchar(50), 
	prix varchar(50),
	idcategorie int(3) not null, 
	idtroc int(3) not null, 
	idenfant int(3) not null, 
	primary key (idObjet),
	foreign key (idcategorie) references categorie (idcategorie),
	foreign key (idtroc) references troc (idtroc),
	foreign key (idenfant) references enfant (idenfant)
);
create table enfant (
	idenfant int(3) not null auto_increment, 
	nom varchar (50), 
	prenom varchar(50), 
	ville varchar(50),
	nom_responsable varchar(50),
	age int(3), 
	primary key(idenfant)
);
create table user(
	iduser int (3) not  null auto_increment, 
	nom varchar(50), 
	prenom varchar(50), 
	email varchar(50), 
	mdp varchar(50), 
	role enum("user", "admin"),
	primary key (iduser)
);

insert into Objet values
(null, "voiture", "rouge", "3", "2€"), 
(null, "voiture", "bleu", "11,95€"); 


insert into enfant values 
(null, "toto", "toto", "paris","papa et maman", 4);

insert into user values (null, "Judy", "Nathan",
"a@gmail.com", "123", "admin"); 

insert into user values (null, "Xavier","Seb", 
"b@gmail.com", "456", "user"); 







