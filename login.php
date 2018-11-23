<?php

$errors = array();

if(empty($_GET["email"])) {
    $errors[] = "Veuillez rentrer une adresse mail valide";
}

if(empty($_GET["mdp"])) {
    $errors[] = "Veuillez rentrer un mot de passe valide";
}


?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<?php if(!empty($errors)): ?>
    <?php foreach ($errors as $msg): ?>
        <p><?php echo $msg; ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<br><br><h1>Connexion</h1><br><br><br><br><br><br>
<input id="email" name="email" type="email" placeholder="Adresse mail" class="type"/><br><br><br><br>
<input id="mdp" name="mdp" type="password" placeholder="Mot de Passe" class="type"/><br><br><br>
<button type="submit" class="button">Valider</button><br>
<a href="#" class="mdpo" >Mot de passe oublié</a>
</body>
</html>