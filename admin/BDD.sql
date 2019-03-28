CREATE DATABASE siteportfolio;

CREATE TABLE utilisateur (
id_utilisateur INT(3) PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(50),
prenom VARCHAR(30),
adresse VARCHAR (50),
code_postal INT (5) ZEROFILL,
ville VARCHAR (30),
pays VARCHAR(20),
date_naissance DATE ,
telephone INT (10) ZEROFILL,
email VARCHAR (50),
pseudo VARCHAR (30),
mdp VARCHAR (12),
site_web VARCHAR(50)
);

CREATE TABLE titre_cv (
id_titre_cv INT(3) PRIMARY KEY AUTO_INCREMENT,
titre_cv text,
description VARCHAR (30)
);

CREATE TABLE experiences (
id_experiences INT(3) PRIMARY KEY AUTO_INCREMENT,
titre VARCHAR (50),
entreprise VARCHAR (50),
description TEXT,
date_debut DATE,
date_fin DATE
);

CREATE TABLE formations (
id_formations INT(3) PRIMARY KEY AUTO_INCREMENT,
titre VARCHAR (50),
lieu VARCHAR (250),
description TEXT,
date_debut DATE,
date_fin DATE
);

CREATE TABLE competences (
id_competences INT(3) PRIMARY KEY AUTO_INCREMENT,
competences VARCHAR (30),
niveau INT (3)
);


CREATE TABLE loisirs (
id_loisirs INT(3) PRIMARY KEY AUTO_INCREMENT,
loisir VARCHAR (30)
);


CREATE TABLE realisations (
id_realisations INT(3) PRIMARY KEY AUTO_INCREMENT,
titre VARCHAR (50),
date VARCHAR (50),
description TEXT
);

CREATE TABLE photo (
id_photo INT(3) PRIMARY KEY AUTO_INCREMENT,
photo VARCHAR (255)
);

CREATE TABLE contact (
id_contact INT(3) PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR (255),
email VARCHAR (255),
sujet VARCHAR (255),
message TEXT 
);

CREATE TABLE commentaires (
id_commentaires INT(3) PRIMARY KEY AUTO_INCREMENT,
pseudo VARCHAR (255),
email VARCHAR (255),
date date,
commentaire TEXT 
);



pixabay

https://templatemag.com/bootstrap-templates/