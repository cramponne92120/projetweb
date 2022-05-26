<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Activitées</title>
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

            $id = $_GET["idUtilisateur"];

            echo " <div>
            <form action=\"add.php\" method=\"post\">
                <input type=\"hidden\" name=\"$id\">
                <input type=\"text\" name=\"ajout\" >
                <input type=\"submit\" name=\"add\" value=\"Ajouter une activitée\" style=\"width: 50%;\"/>
            </form>
        
            <form action="del.php">
                <input type=\"hidden\" name=\"$id\">
                <input type=\"text\" name=\"sup\" >
                <input type=\"submit\" name=\"del\" value=\"Supprimer une activitée\" style=\"width: 50%;\"/>
            </form>
        </div>
        &nbsp;
        &nbsp;
        &nbsp;";


            
            $id ="'". $id ."'";
            $user = "root";
            $pass = "root";
            try {
                $dbh = new PDO('mysql:host=localhost;dbname=projetweb', $user, $pass);
                $res = $dbh->query("SELECT contenu FROM Activite WHERE idUtilisateur = $id");
                
                echo "<select name=\"activite\" id=\"act\">";
                while ($row = $res->fetch()) {
                    $val = $row['contenu'];
                    echo"<option value=\"$val\">$val</option>";

                }
                
                echo "</select>";


                $dbh = null;
                
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
            
            
       ?> 
    </div>
</body>
<footer>
    <p id="footertext"> Site de Thibault&Haris </p>
</footer>
</html>