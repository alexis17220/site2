<?php

session_start();  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
    $mail = $_SESSION['mail'];
    $mdp = $_SESSION['mdp'];
 
}


?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/stylesheet/style.css">
    <link rel="stylesheet" href="../../assets/stylesheet/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Average&display=swap" rel="stylesheet">
    <title>cahier des messages</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">Ajouter un utilisateur</h1>

        <form action="updateuser.php" method="POST">
        <div class="row">
                <div class="mb-3 col-lg-4">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" >
                </div>
                <div class="mb-3 col-lg-4">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-3 col-lg-4">
                    <label for="telephone" class="form-label">Téléphone :</label>
                    <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" class="form-control" id="telephone" name="telephone" >
                </div>
                
                <div class="mb-3 col-lg-3">
                    <label for="mail" class="form-label">Mail :</label>
                    <input type="email" class="form-control" id="mail" name="mail">
                </div>

                <div class="mb-3 col-lg-3">
                    <label for="agence" class="form-label">Adresse :</label>
                    <input type="adresse" class="form-control" id="adresse" name="adresse">
                </div>
                <div class="mb-3 col-lg-3">
                    <label for="mdp" class="form-label">Mot de passe :</label>
                    <input type="mdp" class="form-control" id="mdp" name="mdp" >
                </div>
                <div class="mb-3 col-lg-3">
                    <label for="ville" class="form-label">Ville :</label>
                    <input type="text" class="form-control" id="ville" name="ville">
                </div>
                <div class="mb-3 col-lg-3">
                    <label for="code_postal" class="form-label">Code Postal :</label>
                    <input type="text" class="form-control" id="code_postal" name="code_postal" >
                </div>
                <div class="mb-3 col-lg-3">
                    <label for="username" class="form-label">Pseudo :</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
            
                <div class="text-center">

                    <input type="submit" class="btn btn-warning" name="btn_add" value="Ajouter">
                    <a href="../utilisateur.php" class="btn btn-primary">Retour</a>

                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>