<?php
session_start();  // démarrage d'une session

// on vérifie que les données du formulaire sont présentes
if (isset($_POST['mail']) && isset($_POST['mdp'])) {
    require 'fonction.php';
    $bdd = getBdd();
    // cette requête permet de récupérer l'utilisateur depuis la BD
  

    $requete ="SELECT DISTINCT id_users FROM utilisateur WHERE mail=? AND mdp=? AND actif='activer' GROUP BY 'prenom'";

//var_dump($requete);

    
    $resultat = $bdd->prepare($requete);

    $mail =htmlspecialchars( $_POST['mail']);
    $mdp =htmlspecialchars ($_POST['mdp']);
    
    $search = array("amp;");
	$replace = array("");
	$mdp = str_replace($search, $replace, $mdp);

    
    $resultat->execute(array($mail, $mdp));
    
    
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        $_SESSION['mail'] = $mail;
        $_SESSION['mdp'] = $mdp;
       

        // cette variable indique que l'authentification a réussi
        $authOK = true;
    }

    
}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Résultat de l'authentification</title>
</head>
<body>
    <h1>Résultat de l'authentification</h1>
    <?php
    if (isset($authOK)) {
        echo "<p>Vous avez été reconnu(e) en tant que " . escape($mail) ." </p>";
        echo '<a href="utilisateur/index.php">Poursuivre vers la page d\'accueil</a>';
    }
    else { ?>
        <p>Vous n'avez pas été reconnu(e)</p>
        <p><a href="index.php">Nouvel essai</p>
    <?php } ?>
</body>
</html>