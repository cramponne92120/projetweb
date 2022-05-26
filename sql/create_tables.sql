DROP TABLE IF EXISTS Activite;
DROP TABLE IF EXISTS Utilisateur;

CREATE TABLE Utilisateur (
    idUtilisateur INT AUTO_INCREMENT, 
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    identifiant VARCHAR(100) NOT NULL,
    sexe VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    motDePasse VARCHAR(255) NOT NULL,
    PRIMARY KEY (idUtilisateur)
);

CREATE TABLE Activite (
    idActivite INT AUTO_INCREMENT, 
    idUtilisateur INT NOT NULL,
    dateAjout TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    contenu TEXT NOT NULL,
    PRIMARY KEY (idActivite, idUtilisateur, dateAjout),
    FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur(idUtilisateur)
);

/*
    NOTE: Au moment de l'insertion d'une activitée, il faudra spécifier pour la date : CURRENT_DATE()
    --dateAjout DATE NOT NULL,

*/

