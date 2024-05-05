drop database if exists mon_iris_2023;
create database mon_iris_2023; 
use mon_iris_2023; 

create table classe (
	idclasse int(3) not null auto_increment, 
	nom varchar (50), 
	salle varchar(50), 
	diplome varchar(50),
	primary key (idclasse)
);

create table etudiant (
	idetudiant int(3) not null auto_increment, 
	nom varchar (50), 
	prenom varchar(50), 
	adresse varchar(50),
	email varchar(50), 
	idclasse int(3) not null, 
	primary key(idetudiant), 
	foreign key (idclasse) references classe (idclasse)
);
create table professeur (
	idprofesseur int(3) not null auto_increment, 
	nom varchar (50), 
	prenom varchar(50), 
	diplome varchar(50),
	email varchar(50), 
	primary key(idprofesseur)
);
create table enseignement (
	idenseignement int(3) not null auto_increment, 
	matiere varchar (50),
	nbheures int(3), 
	coeff int(2), 
	annee varchar(10), 
	idclasse int(3) not null, 
	idprofesseur int(3) not null, 
	primary key (idenseignement), 
	foreign key (idclasse) references classe (idclasse), 
	foreign key (idprofesseur) references professeur (idprofesseur)
);

insert into classe values 
(null, "BTS SIO 2A", "Salle 3.10", "BTS SIO"), 
(null, "BTS SIO 2B", "Salle 3.10", "BTS SIO"), 
(null, "Solutions  digitales", "Salle 3.1", "Bachelor"), 
(null, "BAC Pro 1T", "Salle 1.5", "BAC PRO SN"); 


insert into professeur values 
(null, "Ben Ahmed", "OKA", "BTS", "a@gmail.com"), 
(null, "Chouaky", "Abdel", "BTS", "b@gmail.com");


create table user(
	iduser int (3) not  null auto_increment, 
	nom varchar(50), 
	prenom varchar(50), 
	email varchar(50), 
	mdp varchar(50), 
	role enum("user", "admin"),
	primary key (iduser)
);

insert into user values (null, "Judy", "Nathan",
"a@gmail.com", "123", "admin"); 

insert into user values (null, "Xavier","Seb", 
"b@gmail.com", "456", "user"); 







