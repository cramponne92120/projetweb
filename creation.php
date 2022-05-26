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
        <form method="POST" action="result_creation.php">
            <div id="form-div">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" required>
            </div>
            
            <div id="form-div">
                <label for="prenom">Prénom:</label>
                <input type="text" name="prenom" required>
            </div>
            
            <div id="form-div">
                <label for="identifiant">Identifiant:</label>
                <input type="text" name="identifiant" required>
            </div>

            <div id="form-div">
                <label for="sexe">Sexe:</label>
                    <input type="radio" value="M" id="masculin" name="sexe" checked>
                    <label for="masculin">Masculin</label>
                    <input type="radio" value="F" id="feminin" name="sexe">
                    <label for="feminin">Feminin</label>
            </div>

            <div id="form-div">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>

            <div id="form-div">
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" required>
            </div>

            <input type="submit" value="Confirmer" id="form-div">
        </form>
    </div>
</body>
<footer>
    <p id="footertext"> Site de Thibault&Haris </p>
</footer>
</html>