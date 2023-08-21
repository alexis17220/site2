<?php
session_start();
if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
    $mail = $_SESSION['mail'];
    $mdp = $_SESSION['mdp'];
}

if (isset($_GET['id_users'])) {

$sql = "SELECT DISTINCT * FROM categorie";
require '../fonction.php';
$bdd = getBdd();

// grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
$requete = $bdd->prepare($sql);
// on execute notre requete
$requete->execute();
// on recupere les donnees de la bdd
$categorie = $requete->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT * FROM utilisateur WHERE mail='".$mail."'";


// grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
$req = $bdd->prepare($sql2);
// on execute notre requete
$req->execute();
// on recupere les donnees de la bdd
$users = $req->fetch(PDO::FETCH_ASSOC);
}
include '../include/head2.php';

?>

<header>
    <?php include '../include/nav.php'; ?>
</header>
<main class="container-fluid text-center">
    <h1>Ajouter un évènement</h1>
    <div class="album py-5 bg-light">
        <div class="container text-center">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <form method="POST" action="action.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_users" value="<?= $users['id_users'] ?>">


                        <div class="card shadow-sm">
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                            
                            <input type="file" name="monfichier" placeholder="exemple: montagne_214"/><br />
                            <label for="image" class="form-label">Nom de la photo identique:</label>
                            <input type="text" class="form-control" id="image" name="image" placeholder="exemple: montagne_214">


                            <div class="card-body row">
                                <div class="mb-3 col-lg-12">
                                    <label for="description" class="form-label">Description :</label>
                                    <input type="text" class="form-control" id="description" name="description">
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-3 col-lg-6">
                                        <label for="nom" class="form-label">Titre :</label>
                                        <input type="text" class="form-control" id="nom" name="titre">
                                    </div>

                                        <div class="mb-3 col-lg-6">
                                            <label for="date" class="form-label">Date :</label>
                                            <input type="date" class="form-control" id="date" name="datej">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-3 col-lg-12">
                                        <label for="cat" class="form-label">Catégorie :</label>
                                        <select name="id_cat" class="form-control" id="">
                                            <?php foreach ($categorie as $cat) : ?>
                                                <option value="<?= $cat['id_cat'] ?>"><?= $cat['categorie'] ?></option>
                                            <?php endforeach; ?>



                                        </select>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-sm btn-outline-primary" name="ajout" value="Ajouter" />
                    </form>

                </div>
            </div>
        </div>
    </div>



</main>

<?php

include '../include/footer3.php';
include '../include/bottom.php';
?>