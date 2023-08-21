<?php
require_once('../config/bdd.php');
require_once('../config/sanitize.php');


$message = "";
if (isset($_POST["valider"])) {
    if (!preg_match("#jpeg|png#", $_FILES["monfichier"]["type"]))
        $message = '<span class="nook">Format invalide!</span>';
    elseif ($_FILES["monfichier"]["size"] > 2000000)
        $message = '<span class="nook">Taille trop grande!</span>';
    else {
        $message = 'Nom du fichier :<b>' .
            $_FILES["monfichier"]["name"] .
            '</b><br />';
        $message .= 'Nom temporaire du fichier :<b>' .
            $_FILES["monfichier"]["tmp_name"] .
            '</b><br />';
        $message .= 'Type du fichier :<b>' .
            $_FILES["monfichier"]["type"] .
            '</b><br />';
        $message .= 'Taille du fichier :<b>' .
            $_FILES["monfichier"]["size"] .
            ' octets</b><br />';
        if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], "../assets/image//" . $_FILES["monfichier"]["name"]))
            $message .= '<span class="ok">Image chargée avec succès</span>';
    }

    // req pour recup et modifier en bdd à partir de l'id nego
    //echo 'test';
    $sql = "UPDATE event SET `titre`='" . htmlspecialchars(sanitizeInput($_POST['titre'])) . "', `description`='" . htmlspecialchars(sanitizeInput($_POST['description'])) . "', `image`='" . htmlspecialchars(sanitizeInput($_POST['image'])) ."', `datej`='" . htmlspecialchars(sanitizeInput($_POST['datej'])) . "'WHERE id_events='" . $_POST['id_events'] . "'";

    //echo $sql;
    //var_dump($sql);

    $requete = $bdd->prepare($sql);
    // Etape 3 : Vérifier que l'ajout est bien ok en bdd
    if (!$requete->execute()) {
        // erreur de suppr
    }

    //var_dump($requete);
    // si requette ok alors redirection
    header('Location:evenement.php ');
    die;
}

if (isset($_POST["ajout"])) {
    if (!preg_match("#jpeg|png#", $_FILES["monfichier"]["type"]))
        $message = '<span class="nook">Format invalide!</span>';
    elseif ($_FILES["monfichier"]["size"] > 2000000)
        $message = '<span class="nook">Taille trop grande!</span>';
    else {
        $message = 'Nom du fichier :<b>' .
            $_FILES["monfichier"]["name"] .
            '</b><br />';
        $message .= 'Nom temporaire du fichier :<b>' .
            $_FILES["monfichier"]["tmp_name"] .
            '</b><br />';
        $message .= 'Type du fichier :<b>' .
            $_FILES["monfichier"]["type"] .
            '</b><br />';
        $message .= 'Taille du fichier :<b>' .
            $_FILES["monfichier"]["size"] .
            ' octets</b><br />';
        if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], "../assets/image//" . $_FILES["monfichier"]["name"]))
            $message .= '<span class="ok">Image chargée avec succès</span>';
    }

    $id_users = $_POST['id_users'];

    $image = htmlspecialchars(sanitizeInput($_POST['image']));
    $description = htmlspecialchars(sanitizeInput($_POST['description']));
    $titre = htmlspecialchars(sanitizeInput($_POST['titre']));
    $datej = htmlspecialchars(sanitizeInput($_POST['datej']));
    $id_cat = htmlspecialchars(sanitizeInput($_POST['id_cat']));


    // req pour recup et modifier en bdd à partir de l'id nego
    //echo 'test';


    $sql = "INSERT INTO event ( titre, description, id_cat, id_users, datej, image ) VALUES ( '$titre', '$description','$id_cat', '$id_users', '$datej', '$image')";





    //echo $sql;
    //var_dump($sql);

    $requete = $bdd->prepare($sql);
    // Etape 3 : Vérifier que l'ajout est bien ok en bdd
    if (!$requete->execute()) {
        // erreur de suppr
    }

    //var_dump($requete);
    // si requette ok alors redirection
    header('Location:evenement.php ');
    die;
}

if (isset($_GET['id'])) {



    $sql2 = "DELETE FROM event WHERE id_events='" . $_GET['id'] . "'";
    // var_dump($sql);
    // Etape 2 : préparer et éxecuter la requete grâce à PDO
    $requete = $bdd->prepare($sql2);
    // Etape 3 : Vérifier que l'ajout est bien ok en bdd
    if (!$requete->execute()) {
        // erreur de suppr
    }
    // Etape 4 : Redirection + message
    header('location:evenement.php');
    die;
}



if (isset($_POST['inscrire'])) {
  //  echo 'test';
    
    $id_events = $_POST['id_events'];
    $id_users = $_POST['id_users'];

    $sql = "INSERT INTO insevent ( id_users, id_events) VALUES ( '$id_users', '$id_events')";
  //  var_dump($sql);
    // Etape 2 : préparer et éxecuter la requete grâce à PDO
    $requete = $bdd->prepare($sql);
    // Etape 3 : Vérifier que l'ajout est bien ok en bdd
    if (!$requete->execute()) {
        // erreur de suppr
    }
    // Etape 4 : Redirection + message
    header('location:index.php');
    die;
}
