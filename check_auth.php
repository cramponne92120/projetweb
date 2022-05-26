<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test autentification</title>
</head>
<body>

    <?php

    $user = "root";
    $passwd = "root";
    $identifiant = $_POST["identifiant"];
    $pwd = $_POST["password"];

    $res = 0;

    try{
        $dbh = new PDO('mysql:host=localhost;dbname=projetweb', $user, $passwd);
        #$query = "select * from administrateur where login = '$login' and pwd = '$password'";
        #$result = $db->query($query);

        $stmt = $dbh->query("SELECT * FROM Utilisateur");
            while ($row = $stmt->fetch()) {
                if($identifiant == $row['identifiant'] && $pwd == $row['motDePasse'])
                {
                    $res = 1;
                }
            }
        if($res == 0){
            echo "Echec";
        }
        else{
            echo "Connexion réussie";
        }
    }

    catch(PDOException $e){
        print $e->getMessage();
    }



    ?>
    
</body>
</html>