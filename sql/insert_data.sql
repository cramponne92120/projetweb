INSERT INTO Utilisateur VALUES (DEFAULT, 'Amarouche', 'Haris', 'hamarouche', 'M', 'amaroucheharis@gmail.com', '1234');
INSERT INTO Utilisateur VALUES (DEFAULT, 'Cramponne', 'Thibault', 'tcramponne', 'M', 'cramponnethibault@gmail.com', '1234');


INSERT INTO Activite VALUES (DEFAULT, 1, DEFAULT, 'test contenu');
INSERT INTO Activite VALUES (DEFAULT, 2, DEFAULT, 'test contenu 2');

/*
    NOTE exemple requete pour récupérer uniquement la date du TIMESTAMP:
        SELECT DATE(dateAjout) FROM Activite WHERE idActivite = 1;
*/