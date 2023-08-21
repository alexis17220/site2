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
    <h1>Affichage de l'évènements</h1>
    <div class="album py-5 bg-light">
        <div class="container text-center">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="card shadow-sm"><img src="../assets/image/<?= $eve['image'] ?>">

                        <div class="card-body">
                            <p class="card-text"><?= $eve['description'] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <input disabled type="date" value="<?=$eve['datej']?>" >
                                <div class="btn-group">
                                    
                                    <a href="modifier.php?id=<?=$eve['id_events']?>" type="button" class="btn btn-sm btn-outline-warning">Modifier</a>
                            

                                </div>
                                <?= $eve['categorie'] ?>
                                
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>

<?php

include '../include/footer.php';
include '../include/bottom.php';
?>