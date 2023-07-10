<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('Projet-Mr-Rojo/assets/inscription.css')?>">
    <title>Examen Web</title>
</head>
<body>
    
<div class="wrapper">
    
    <div class="text-center mt-4 name">
        BIENVENUE
    </div>
    <form class="p-3 mt-3" method='POST' action='Welcome/index'>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="mdp" name="Prenom" id="Prenom" placeholder="Entrez votre prénom">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="email" placeholder="Entrez votre email">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="mdp" id="mdp" placeholder="Entrez votre mot de passe">
        </div>
        <button class="btn mt-3">S'inscrire</button>
    </form>
    <div class="text-center fs-6">
        <a href="#">Avez vous déja un compte?</a> ou 
        <a href="views/Login.php">Connectez</a>
    </div>
</div>

</body>
</html>