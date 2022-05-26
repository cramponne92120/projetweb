<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Creer un compte</title>
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
        $id = $_POST["identifiant"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $sexe = $_POST["sexe"];
        $password = $_POST["password"];

        $id ="'". $id ."'"; 
        $nom ="'". $nom ."'"; 
        $prenom ="'". $prenom ."'"; 
        $email ="'". $email ."'"; 
        $sexe ="'". $sexe ."'"; 
        $password ="'". $password ."'"; 

        $user = "root";
        $pass = "root";

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=projetweb', $user, $pass);
            $sql = "INSERT INTO utilisateur VALUES (DEFAULT,$nom,$prenom,$id,$sexe,$email,$password)";
            $res = $dbh->query($sql);
            echo "member successfully added";
            $dbh = null;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage() . "<br/>";
            die();
        }
    ?>
    </div>
</body>
<footer>
    <p id="footertext"> Site de Thibault&Haris </p>
</footer>
</html>