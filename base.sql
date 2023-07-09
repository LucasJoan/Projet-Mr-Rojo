create database Projet_S4;
use Projet_S4;

create table utilisateur(
    id_utilisateur int primary key auto_increment,
    Nom varchar(20),
    Prenom varchar(10),
    email varchar(20),
    mdp varchar(30)
);

