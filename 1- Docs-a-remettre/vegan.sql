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

CREATE TABLE categorie ( 
    id INT NOT null AUTO_INCREMENT,
    categorie VARCHAR45
);

CREATE TABLE categorieRecette ( 
    id INT NOT null AUTO_INCREMENT,
    idCategorie INT NOT null,
    idRecette INT, 
    titre VARCHAR(45),
    categorie VARCHAR(45),
    FOREIGN KEY(idRecette) REFERENCES recette(id),
    primary KEY(id, idCategorie)
);

CREATE TABLE recette (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre varchar(45) NOT NULL,
    ingredient TEXT(10000) NOT NULL,
    idMembre INT NOT NULL,  
    idCategorie INT NOT NULL,
    idCommentaire INT, 
    date_creation datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    est_active  BOOLEAN NOT NULL,
    FOREIGN KEY(idMembre) REFERENCES membre(id),
    FOREIGN KEY(idCategorie) REFERENCES categorie(id),
    FOREIGN KEY(idCommentaire) REFERENCES commentaire(id)
)


CREATE TABLE commentaire (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    texte TEXT(500) NOT NULL,
    note INT(11) NOT NULL,     
    pseudo VARCHAR(45),  
    dateCommentaire date NOT NULL DEFAULT CURRENT_TIMESTAMP,
    idMembre INT not null
    idRecette INT not null
    FOREIGN KEY (idMembre) REFERENCES membre(id)  
    FOREIGN KEY (idRecette) REFERENCES recette(id)  
)


INSERT INTO categorie
VALUES(NULL, 'tofu'), (null, 'légumineuse'), (null, 'plein de légumes'), (null, 'soupe / potage'), (null, 'trempette / tartinade'), (null, 'muffins'), (null, 'crêpes'), (null, 'gauffres'), (null, 'tartes'), (null, "pleins de fruits"), (null, "pleins de fruits");

INSERT INTO membre
VALUES(NULL, 'Josiane', 'Lacombe', 'Jojo au lac', Null, "Jolac@gmail.com", '123456'), (null, 'Patrice', 'Dubé', null, "Pat", 'Pat34@gmail.com', '123456');

INSERT INTO tabletyperecette
VALUES (NULL, 'tofu', 1,  1), (NULL, 'légumineuse', 1,  2 ), (NULL, 'crêpes', 2,  7), (NULL, 'tartes', 2,  9), (NULL, 'crêpes', 3,  6 ), (NULL, 'gauffres', 3,  8), (NULL, 'soupe / potage', 4,  4), (NULL, 'trempette / tartinade', 4,  5);

INSERT INTO tabletyperecette
VALUES (Null, 1,  1, 'Plats principaux', 'tofu'), (Null, 1,  2, 'Plats principaux', 'légumineuse'), (Null, 2,  7, 'Desserts', 'crêpes'), (Null, 2,  9, 'Desserts', 'tartes'), (Null, 3,  6, 'Déjeuners', 'crêpes'), (Null, 3,  8, 'Déjeuners', 'gauffres'), (Null, 4,  4, 'Entrées', 'soupe / potage'), (Null, 4,  5, 'Entrées', 'trempette / tartinade');

INSERT INTO recette
VALUES(NULL, 'Moussaka', '
Légumes :

- 4 grandes aubergines
- 4 pommes de terre blanches, tranchées finement
- Huile d\'olive pour badigeonner et cuire

Sauce aux tomates :

- oignons moyens, hachés
- 1 boîte (28 onces) de tomates concassées dans leur purée
- 6 gousses d\'ail, hachées
- 2 cuillères à soupe de pâte de tomate
- ¼ tasse de persil, haché
- ½ cuillère à thé de cannelle moulue
- 2 cuillères à thé d\'origan séché
- 2 cuillères à soupe de vinaigre de vin rouge
- ½ tasse de vin blanc sec
- Sel et poivre noir, au goût

Sauce béchamel :

- 4 cuillères à soupe de beurre non salé
- 4 cuillères à soupe de farine tout usage
- 2 tasses de lait chaud
- 1/2 c. à thé de muscade moulue
- 1/3 tasse de fromage pecorino romano ou parmesan, râpé
- Sel et poivre blanc, au goût
- 2 jaunes d\'œufs', 1, 2, Null, Null, 1);

INSERT INTO recette 
VALUES(NULL, "Muffin au chocolat", 'Farine, poudre à pâte, pépites chocolat, lait oeufs' "1- Rassemble les aliments secs ensemble 2- Brasse les aliments mouillés ensemble 3- Mélange les deux ensemble 4- Mettre dans des moules à muffin 5- cuire 20 à 25 min au four à 350 degré,6- Déguster ", 2, 6, Null, Null, 1);

INSERT INTO commentaire VALUES
(null, 'J\'ai trouvé difficile de faire la recette sans mode d\'emploi ou d\instruction',  3, 'Pat', '2025-01-10', '2', '1', ),(null, 'Très bon les muffins!', 5, 'Jojo au lac', '2024-09-12', '1', '2'), (null, 'Délicieux!','5, 'Brio', '2024-02=15', '3'), (null, 'Ça goûte pas le creton traditionnel mais c\'est quand-même pas pire', '3.5', 'Jeanny♥', 5, '2025-02-28');