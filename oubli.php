
<?php

?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Mot de passe oublié</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
<div class="container">
    <header>
        <h1 class="marquee">Mot de passe oublié</h1>
    </header>
    <section>
        <div id="container_demo" >
            <div id="wrapper">
                <div id="login">
                    <form method="POST" action="verification.php">
                        <p>
                            <label for="nom" data-icon="e" > Veuillez entrer votre adresse email :</label>
                            <input id="nom" name="email" required="required" type="email"/>
                        </p>
                        <p>
                            <input type="submit" value="Envoyer" name="submit"/>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>