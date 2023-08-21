<?php
session_start();
if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
    $mail = $_SESSION['mail'];
    $mdp = $_SESSION['mdp'];
}

if (isset($_GET['id'])) {
$id = intval($_GET['id']);
$sql = "SELECT DISTINCT * FROM event AS e INNER JOIN categorie As c ON e.id_cat=c.id_cat INNER JOIN utilisateur AS u ON e.id_users=u.id_users WHERE id_events='".$id."'";
require '../fonction.php';
$bdd = getBdd();

// grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
$requete = $bdd->prepare($sql);
// on execute notre requete
$requete->execute();
// on recupere les donnees de la bdd
$eve = $requete->fetch(PDO::FETCH_ASSOC);

}

include '../include/head2.php';

?>

<header>
    <a href="index.php" type="button" class="btn btn-primary">Retour</a>
</header>
<main class="container-fluid text-center">
    <h1>Modifier l'évènements</h1>
    <div class="album py-5 bg-light">
        <div class="container text-center">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <form method="post" action="action.php" enctype="multipart/form-data">
                        <div class="card shadow-sm"><img src="../assets/image/<?= $eve['image'] ?>">
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                            <input type="hidden" name="id_events" value="<?= $eve['id_events'] ?>" />

                            <input type="file" name="monfichier" /><br />
                            <label for="image" class="form-label">Nom de l'image exacte:</label>
                            <input type="text" class="form-control" id="image" name="image" value="<?= $eve['image'] ?>">


                            <div class="card-body">
                                <div class="mb-3 col-lg-12">
                                    <label for="description" class="form-label">Description :</label>
                                    <input type="text" class="form-control" id="description" name="description" value="<?= $eve['description'] ?>">
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-3 col-lg-6">
                                        <label for="nom" class="form-label">Nom :</label>
                                        <input type="text" class="form-control" id="nom" name="titre" value="<?= $eve['titre'] ?>">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="date" class="form-label">Date :</label>
                                        <input type="date" class="form-control" id="date" name="datej" value="<?= $eve['datej'] ?>">
                                    </div>


                                </div>

                                <input type="submit" class="btn btn-sm btn-outline-warning" name="valider" value="Modifier" />
                    </form>

                </div>
            </div>
        </div>
    </div>


    
</main>

<?php

include '../include/footer.php';
include '../include/bottom.php';
?>