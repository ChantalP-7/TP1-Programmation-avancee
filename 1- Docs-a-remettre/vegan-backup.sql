CREATE DATABASE vegan;

CREATE TABLE membre (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    prenom VARCHAR(45) NOT NULL,  
    nom VARCHAR(45) NOT NULL,
    pseudonyme VARCHAR(45) NOT NULL,    
    courriel VARCHAR(45) NOT NULL,
    password VARCHAR(255) NOT NULL,    
    CONSTRAINT courriel_unique UNIQUE (courriel)
);

CREATE TABLE typePlat (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(45) NOT NULL    
);

CREATE TABLE categorie (
    id INT NOT null AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(45) NOT NULL    
);

CREATE TABLE recette (
    id INT NOT null AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(45) NOT NULL,
    ingredient text(1000) NOT NULL,
    instruction text(1000),
    nomAuteur,
    nomCategorie,
    id_membre INT NOT NULL,
    id_categorie INT NOT NULL,
    CONSTRAINT fk_id_membre FOREIGN KEY (id_membre) REFERENCES
    membre(id),
    CONSTRAINT fk_id_categorie FOREIGN KEY (id_categorie) REFERENCES
    categorie(id)
);

CREATE TABLE historiqueCatTyp (
    id_categorie INT NOT NULL,
    id_typePlat INT NOT NULL,
    CONSTRAINT fk_id_categorie FOREIGN KEY (id_categorie) REFERENCES
    categorie(id),
    CONSTRAINT fk_id_typePlat FOREIGN KEY (id_typePlat) REFERENCES
    typePlat(id)
);

CREATE TABLE commentaire (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,    
    texte TEXT(1000) NOT NULL,
    note INT,
    pseudonyme VARCHAR(45) NOT NULL,
    id_membre INT NOT NULL,
    id_recette INT NOT NULL,
    CONSTRAINT fk_id_membre FOREIGN KEY (id_membre) REFERENCES
    membre(id),
    CONSTRAINT fk_id_recette FOREIGN KEY (id_recette) REFERENCES
    recette(id)
);

INSERT INTO typePlat
VALUES(NULL, 'platPrincipaux'), (null, 'dessert'), (null, 'déjeuner'), (null, 'entrée'), (null, "plein de légumes");

INSERT INTO categorie
VALUES(NULL, 'tofu'), (null, 'légumineuse'), (null, 'plein de légumes'), (null, 'soupe / potage'), (null, 'trempette / tartinade'), (null, 'plein de légumes'), (null, 'plein de légumes'), (null, 'plein de légumes'), (null, 'comme la viande'), (null, "plein de légumes");

INSERT INTO membre
VALUES(NULL, 'Josiane', 'Lacombe', 'Jojo au lac', Null, "Jolac@gmail.com", '123456'), (null, 'Patrice', 'Dubé', null, null, 'Pat34@gmail.com', '12345');

