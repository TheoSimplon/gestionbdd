<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style1.css">

        <title>Connexion</title>
    </head>

    <body>
         <header>     
<img src="logo.jpg" alt="logo">
</header><div class="bouton">
        <h1>Connexion utilisateur</h1>
        <form action="login_post.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" name="login" id="nom" required />
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp" required />
            <input type="submit" value="Connexion">
        </form>
    </div>
    </body>
</html>