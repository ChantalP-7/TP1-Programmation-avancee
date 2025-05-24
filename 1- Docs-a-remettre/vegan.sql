CREATE DATABASE vegan;

CREATE TABLE membres (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    prenom VARCHAR(45) NOT NULL,  
    nom VARCHAR(45) NOT NULL,
    pseudonyme VARCHAR(45) NOT NULL,
    telephone VARCHAR(45),
    courriel VARCHAR(45) NOT NULL,
    password VARCHAR(255) NOT NULL,    
    CONSTRAINT courriel_unique UNIQUE (courriel)
);

CREATE TABLE categories ( 
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

CREATE TABLE recettes (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titre varchar(45) NOT NULL,
    ingredient TEXT(10000) NOT NULL,
    instruction TEXT(10000) NOT NULL,
    categorie varchar(45),
    pseudonyme varchar(45),
    date_creation date NOT NULL,
    idMembre INT NOT NULL,  
    idCategorie INT NOT NULL,    
    FOREIGN KEY(idMembre) REFERENCES membre(id),
    FOREIGN KEY(idCategorie) REFERENCES categorie(id)
)


CREATE TABLE commentaires (
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
- 2 jaunes d\'œufs', null, 'légumineuses', Null, '(2024-02-17', Null, null);

INSERT INTO recette 
VALUES(NULL, "Muffin au chocolat", 'Farine, poudre à pâte, pépites chocolat, lait oeufs' "1- Rassemble les aliments secs ensemble 2- Brasse les aliments mouillés ensemble 3- Mélange les deux ensemble 4- Mettre dans des moules à muffin 5- cuire 20 à 25 min au four à 350 degré,6- Déguster ", 'muffin', null, '2024-03-16', Null, 2);

INSERT INTO recette
VALUES(NULL, "Gauffres aux bleuets", '2 tasses de bleuets frais ou surgelés (décongelés)
2 c. à soupe de farine tout usage
Ingrédients secs
2 tasses de farine tout usage
½ tasse de fécule de maïs
2 c. à thé de poudre à pâte
Une pincée de sel
Ingrédients humides
½ tasse de cassonade
1 c. à thé d’extrait de vanille
2 œufs
2 tasses de lait tiède
1 c. à soupe de jus de citron
½ tasse de beurre, fondu', "Dans un bol, mélanger tous les ingrédients secs, puis réserver.
Dans un grand bol, fouetter tous les ingrédients humides. Ajouter les ingrédients secs et fouetter à nouveau afin de former une pâte, sans plus. Laisser reposer la pâte au réfrigérateur pendant un minimum de 10 minutes.
Dans un bol, combiner les bleuets et la farine, puis réserver.
Préchauffer le gaufrier et l’enduire d’huile à l’aide d’un pinceau.
Verser environ ½ tasse du mélange à gaufres, puis garnir avec ¼ tasse de bleuets (ou varier selon la taille du gaufrier).
Fermer le gaufrier et cuire jusqu’à ce que la gaufre soit dorée. Cuire toutes les gaufres.", 'gauffre', null, '2024-03-16', Null, 3);

INSERT INTO recette
VALUES(NULL, "Creton vegan", "1 oignon, haché
1 gousse d'ail, hachée
15 ml (1 c. à soupe) d'huile d'olive
135 g (1 3/4 de tasse) de protéine végétale texturée (PVT), de forme hachée (très petits morceaux)
1 L (4 tasses) de bouillon de légumes
5 ml (1 c. à thé) de cannelle, moulue
2,5 ml (1/2 c. à thé) de clou de girofle, moulu
2,5 ml (1/2 c. à thé) de sel
Poivre blanc, fraichement moulu (ou poivre du moulin)", "Dans une casserole à feu moyen, attendrir l'oignon et l'ail dans l'huile. Ajouter la PVT, le bouillon, les épices et le sel. À l'aide d'une cuillère de bois, bien mélanger. Poivrer. Couvrir et laisser mijoter à feu doux 10 minutes, en remuant à quelques reprises.
Ajouter les flocons d'avoine. Poursuivre la cuisson à découvert jusqu'à évaporation complète du liquide, soit environ 3 minutes. Rectifier l'assaisonnement.
Transvider la préparation dans un moule à pain, des ramequins ou autres contenants. Couvrir d'une pellicule de plastique directement sur la surface des cretons. Laisser tiédir et réfrigérer 4 heures ou jusqu'à ce que le mélange soit complètement refroidi.", 'muffin', null, '2023-12-16', Null, 4);

INSERT INTO commentaire VALUES
(null, 'Moussaka', "J\'ai trouvé difficile de faire la recette sans mode d\'emploi ou d\instruction'",  3, 'Pat', '2025-01-10', 2, 1),(null, null, 'Très bon les muffins!', 5, 'Jojo au lac', '2024-09-12', 1, 2), (null, 'Gauffres aux bleuets', 'Délicieux!', 5, 'chatou', '2024-02-15', 4, 4), (null, 'Creton vegan',  "Ça goûte pas le creton traditionnel mais c\'est quand-même pas pire", 3.5, 'Brio', '2025-02-28', 5, 4 );



INSERT INTO commentairerecette
VALUES(null, 1, 9), (null, 2, 10), (null, 3, 11), (null, 4, 12);

