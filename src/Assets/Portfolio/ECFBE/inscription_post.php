<?php
require_once('config/bdd.php');
require_once('config/sanitize.php');

if (isset($_POST['subject'])) {
    //echo 'formulaire ajout';
    //var_dump($_POST);
    // Etape 1 :vérif et sécurité des champs
    // sécurité
    
    $nom = htmlspecialchars($_POST['nom']);
    $prenom =  htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $pseudo = htmlspecialchars($_POST['username']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mail = htmlspecialchars($_POST['mail']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $ville = htmlspecialchars($_POST['ville']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
    
    
    // vérif
    if (empty($nom)) {
        // erreur
    }
    if (empty($prenom)) {
        // erreur
    }
    if (empty($telephone)) {
        // erreur
    }
    if (empty($mdp)) {
        // erreur
    }
    if (empty($mail)) {
        // erreur
    }

    
    // Etape 2 : Générer la requete SQL (ecriture du SQL)
    $sql = "INSERT INTO utilisateur (nom, prenom, mail, username, adresse, ville, code_postal,  telephone, mdp ) VALUES ('$nom', '$prenom','$mail', '$pseudo', '$adresse', '$ville',  '$code_postal','$telephone', '$mdp')";
    // var_dump($sql);
    // Etape 3 : préparer et éxecuter la requete grâce à PDO
    $requete = $bdd->prepare($sql);
    // Etape 4 : Vérifier que l'ajout est bien ok en bdd
    if (!$requete->execute()) {
        // erreur l'ajout n'est pas réaliser
    }
    // Etape 5 : Redirection + message
//var_dump($bdd);
  //  var_dump($sql);
    //var_dump($requete);
    header('location:index.php');
    die;
}