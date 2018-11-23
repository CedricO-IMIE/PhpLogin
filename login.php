<?php



?><!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Login</title>
            <link rel="stylesheet" type="text/css" href="login.css">
        </head>
        <body>
            <br><br><h1>Connexion</h1><br><br><br><br><br><br>
            <form method="POST" action="message.php">
                <input id="email" name="email" type="email" placeholder="Adresse mail" class="type"/><br><br><br><br>
                <input id="mdp" name="mdp" type="password" placeholder="Mot de Passe" class="type"/><br><br><br>
                <button type="submit" class="button">Valider</button><br>
                <a href="oubli.php" class="mdpo" >Mot de passe oublié</a><br>
                <a href="register.php" class="mdpo" >Pas de compte ?</a>
            </form>
        </body>
    </html>