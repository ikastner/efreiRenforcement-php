
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire d'Authentification</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="login-container">
    <h2>Authentification</h2>
    <form action="user.php" method="post">
        <input type="text" placeholder="Nom d'utilisateur" name="username" required>
        <input type="password" placeholder="Mot de passe" name="password" required>
        <input type="submit" name="valider" value="Se connecter">
    </form>
    <p><a href="register.php"">Inscription</a></p>
</div>

 
</body>
</html>