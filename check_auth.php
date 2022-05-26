<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test autentification</title>
</head>
<body>
    <div class="menudiv">
        <ul id="nav">
        		    <div class="menu" id="logo"> <a href="index.php"> <p class="menup" style="color: white;"><img src="logo.jpeg" id="img"></p> </a> </div>
        		    <div class="menu" id="connect"> <a href="connexion.php"> <p class="menup">Connexion</p> </a> </div>
        	    	<div class="menu" id="signup"> <a href="creation.php"> <p class="menup">Créer un compte</p></div>
            		<div class="menu" id="give"> <a href="https://www.paypal.com/paypalme/thibaultcramponne?country.x=FR&locale.x=fr_FR"> <p class="menup">Donation</p> </a> </div>
        </ul>   
    </div>
    <div id="form">
    <?php

    $user = "root";
    $passwd = "root";
    $identifiant = $_POST["identifiant"];
    $identifiantToUse = "'".$identifiant."'";
    $idUtilisateur = "";
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

        $stmt2 = $dbh->query("SELECT idUtilisateur FROM Utilisateur WHERE identifiant = $identifiantToUse");
        while ($row = $stmt2->fetch()) {
            $idUtilisateur = $row['idUtilisateur'];
        }
        
        if($res == 0){
            echo "Echec";
        }
        else{
            #echo "<div style=\"display = block;\"> <p> Connexion réussie </p> </div>";
            echo "<a href=\"activite.php?idUtilisateur=$idUtilisateur\"> <div id=\"activity\"> <p> Acceder à mes activitées </p> </div> </a>";
        }
    }

    catch(PDOException $e){
        print $e->getMessage();
    }



    ?>
    </div>
    
</body>
<footer>
    <p id="footertext"> Site de Thibault&Haris </p>
</footer>
</html>