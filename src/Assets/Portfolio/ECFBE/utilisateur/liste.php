<?php

session_start();

if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
    $mail = $_SESSION['mail'];
    $mdp = $_SESSION['mdp'];
}

if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql="SELECT DISTINCT * FROM insevent AS i INNER JOIN utilisateur AS u ON i.id_users=u.id_users INNER JOIN event AS e ON i.id_events=e.id_events WHERE i.id_events ='".$id."'";

    require '../fonction.php';
    $bdd = getBdd();

    // grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
    $requete = $bdd->prepare($sql);
    // on execute notre requete
    $requete->execute();
    // on recupere les donnees de la bdd sous forme de tableau associatif
    $eve = $requete->fetchAll(PDO::FETCH_ASSOC);

    $sql2 = "SELECT DISTINCT * FROM event AS e INNER JOIN categorie As c ON e.id_cat=c.id_cat INNER JOIN utilisateur AS u ON e.id_users=u.id_users WHERE id_events=" . $_GET['id'];
    // grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
    $requet = $bdd->prepare($sql2);
    // on execute notre requete
    $requet->execute();
    // on recupere les donnees de la bdd sous forme de tableau associatif
    $eve2 = $requet->fetch(PDO::FETCH_ASSOC);
}
include '../include/head2.php';
?>

<header>
    <a href="index.php" type="button" class="btn btn-primary">Retour</a>
</header>
<main class="container-fluid">

    <div class="col-lg-12">

        <h2 class="text-center ">Liste des inscrits à l'évènement <?= $eve2['titre'] ?></h2>
        <table id="table" style="width:100%" class=" display table" border="1px">
            <thead>
                <tr>

                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Pseudo</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach ($eve as $recept) : ?>
                    <tr>
                        <p>
                            <td scope="row"><?= $recept['nom'] ?></td>
                            <td>
                                <p><?= $recept['prenom'] ?></p>
                            </td>
                            <td><?= $recept['mail'] ?></td>
                            <td><?= $recept['username']; ?></td>


                        </p>
                    </tr>


                <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</main>

<?php

include '../include/footer3.php';
include '../include/bottom.php';
?>