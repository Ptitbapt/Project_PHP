<?php


?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
        <link rel="stylesheet" href="assets/style.css">
        <script src="script.js"></script>
    </head>
    <body>
    <form method="POST" action="Functions/insertRegister.php">
        <label> Email </label>
        <input type="email" name="email" id="email" placeholder="Entrez votre email">
        <label> Mot de passe </label>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
        <label> Confirmer le mot de passe </label>
        <input type="password" name="password2" id="password2" placeholder="Confirmez votre mot de passe">
        <button class="BRegister" name="submitRegister" id="submitRegister"> S'inscrire </button>
    </form>
    </body>
    </html>