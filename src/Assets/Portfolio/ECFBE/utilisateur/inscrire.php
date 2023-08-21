<?php
session_start();
if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
    $mail = $_SESSION['mail'];
    $mdp = $_SESSION['mdp'];
}

if (isset($_GET['id_users'])) {

    $sql = "SELECT DISTINCT * FROM event ";
    require '../fonction.php';
    $bdd = getBdd();

    // grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
    $requete = $bdd->prepare($sql);
    // on execute notre requete
    $requete->execute();
    // on recupere les donnees de la bdd
    $event = $requete->fetchAll(PDO::FETCH_ASSOC);

    $sql2 = "SELECT DISTINCT * FROM utilisateur WHERE mail='" . $mail . "'";


    // grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
    $req = $bdd->prepare($sql2);
    // on execute notre requete
    $req->execute();
    // on recupere les donnees de la bdd sous forme de tableau associatif
    $users = $req->fetch(PDO::FETCH_ASSOC);
}
include '../include/head.php';

?>

<header>
    <a href="index.php" type="button" class="btn btn-primary">Retour</a>
</header>
<main class="container-fluid text-center">
    <h1>Inscription a un évènement</h1>
    <div class="album py-5 bg-light">
        <div class="container text-center">

            <div class="row">

                <div class="col text-center">
                    <form method="POST" action="action.php" enctype="multipart/form-data">
                        <input type="hidden" name="id_users" value="<?= $users['id_users'] ?>">


                        <div class="card shadow-sm">



                            <div class="card-body row text-center">
                                <div class="mb-3 col-lg-12 text-center">
                                    <label for="description" class="form-label text-center">Titre de l'évènements :</label>
                                    <select name="id_events" class="form-control">
                                        <?php foreach ($event as $eve) : ?>
                                            <option value="<?= $eve['id_events'] ?>"> <?= $eve['titre'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                            </div>
                            <input type="submit" class="btn btn-sm btn-outline-primary" name="inscrire" value="S'inscrire" />
                        </div>
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