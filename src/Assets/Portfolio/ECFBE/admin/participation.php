<?php

session_start();

if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
    $mail = $_SESSION['mail'];
    $mdp = $_SESSION['mdp'];
}

if(isset($_GET['id'])){

$sql = "SELECT DISTINCT * FROM event AS e INNER JOIN categorie As c ON e.id_cat=c.id_cat INNER JOIN utilisateur AS u ON e.id_users=u.id_users INNER JOIN insevent AS i ON e.id_events=i.id_events WHERE i.id_users=".$_GET['id'];
require '../fonction.php';
$bdd = getBdd();

 // grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
 $requete = $bdd->prepare($sql);
 // on execute notre requete
 $requete->execute();
 // on recupere les donnees de la bdd sous forme de tableau associatif
 $eve = $requete->fetchAll(PDO::FETCH_ASSOC);

 $sql2 = "SELECT DISTINCT * FROM event AS e INNER JOIN categorie As c ON e.id_cat=c.id_cat INNER JOIN utilisateur AS u ON e.id_users=u.id_users WHERE u.id_users=".$_GET['id'];
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

                        <h2 class="text-center ">Liste de vos participations <?=$eve2['nom']?></h2>
                        <table id="table" style="width:100%" class=" display table" border="1px">
                            <thead>
                                <tr>

                                    <th scope="col">Titre</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($eve as $recept) : ?>
                                    <tr>
                                        <p>
                                            <td scope="row"><?= $recept['titre'] ?></td>
                                            <td>
                                                <p><?= $recept['description'] ?></p>
                                            </td>
                                            <td><?= $recept['datej'] ?></td>
                                                                                    
                                        </p>
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                    </main>

<?php

include '../include/footer.php';
include '../include/bottom.php';
?>
