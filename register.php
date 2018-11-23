<!DOCTYPE html>
<html>
<head>
    <title>S'inscrire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="register.css" />
</head>
<body>

<form action="/action_page.php">
    <div class="container">
        <h1>S'inscrire</h1>
        <p>Completez ce formulaire pour vous inscrire.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Entrer Email" name="email" required>

        <label for="psw"><b>Mot de passe</b></label>
        <input type="password" placeholder="Mot de passe" name="psw" required>

        <label for="psw-repeat"><b>Retaper le mot de passe</b></label>
        <input type="password" placeholder="Mot de passe" name="psw-repeat" required>
        <hr>

        <button type="submit" class="registerbtn">S'enregistrer</button>
    </div>

    <div class="container signin">
        <p>Déjà inscrit ? <a href="login.php">Se connecter</a>.</p>
    </div>
</form>

</body>
</html>
