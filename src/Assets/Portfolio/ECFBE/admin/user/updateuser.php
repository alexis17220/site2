<?php
require_once('../../config/bdd.php');
require_once('../../config/sanitize.php');

// enregistrer dans nego
if (isset($_POST['btn_modif'])) {


    // req pour recup et modifier en bdd à partir de l'id nego
    //echo 'test';
    $sql = "UPDATE utilisateur SET `nom`='" .htmlspecialchars (sanitizeInput($_POST['nom'])) .  "', `prenom`='" . htmlspecialchars(sanitizeInput($_POST['prenom'])) . "', `telephone`='" .htmlspecialchars (sanitizeInput($_POST['telephone'])) .  "', `mail`='" .htmlspecialchars (sanitizeInput($_POST['mail'])) . "', `adresse`='" .htmlspecialchars (sanitizeInput($_POST['adresse'])) . "', `code_postal`='" .htmlspecialchars (sanitizeInput($_POST['code_postal'])) .  "', `mdp`='" . htmlspecialchars (sanitizeInput($_POST['mdp'])) . "', `ville`='" . htmlspecialchars (sanitizeInput($_POST['ville'])) . "', `Actif`='" . htmlspecialchars (sanitizeInput($_POST['Actif'])) ."', `username`='" . htmlspecialchars (sanitizeInput($_POST['username']))."'WHERE id_users='" . $_POST['id_users'] . "'";
    //echo $sql;
   // var_dump($sql);

    $requete = $bdd->prepare($sql);
    // Etape 3 : Vérifier que l'ajout est bien ok en bdd
    if (!$requete->execute()) {
        // erreur de suppr
    }


    // si requette ok alors redirection
    header('Location:../utilisateur.php ');
    die;
}


if (isset($_GET['id'])) {


    $sql = "DELETE FROM utilisateur WHERE id_users='" . $_GET['id'] . "'";
 //var_dump($sql);
    // Etape 2 : préparer et éxecuter la requete grâce à PDO
    $requete = $bdd->prepare($sql);
    // Etape 3 : Vérifier que l'ajout est bien ok en bdd
    if (!$requete->execute()) {
        // erreur de suppr
    }
    // Etape 4 : Redirection + message
    header('location:../utilisateur.php');
    die;
}


//ajout utilisateur
if (isset($_POST['btn_add'])) {
   // echo 'formulaire ajout';
   // var_dump($_POST);
    // Etape 1 :vérif et sécurité des champs
    // sécurité
   
    $nom = htmlspecialchars($_POST['nom']);
    $prenom =  htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $mail = htmlspecialchars($_POST['mail']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $ville = htmlspecialchars($_POST['ville']);
    $pseudo = htmlspecialchars($_POST['username']);
    
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
    $sql = "INSERT utilisateur ( nom, prenom, mail, telephone,adresse, mdp, username,ville, code_postal ) VALUES ( '$nom', '$prenom','$mail', '$telephone', '$adresse', '$mdp', '$pseudo',  '$ville','$code_postal')";
    // var_dump($sql);
    // Etape 3 : préparer et éxecuter la requete grâce à PDO
    $requete = $bdd->prepare($sql);
    // Etape 4 : Vérifier que l'ajout est bien ok en bdd
    if (!$requete->execute()) {
        // erreur l'ajout n'est pas réaliser
    }
    // Etape 5 : Redirection + message
   header('location:../utilisateur.php');
    die;
}
