<?php

session_start();

if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
  $mail = $_SESSION['mail'];
  $mdp = $_SESSION['mdp'];
}

$sql = "SELECT DISTINCT * FROM utilisateur WHERE mail='" . $mail . "'";
require '../fonction.php';
$bdd = getBdd();

// grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
$requete = $bdd->prepare($sql);
// on execute notre requete
$requete->execute();
// on recupere les donnees de la bdd sous forme de tableau associatif
$eve = $requete->fetchAll(PDO::FETCH_ASSOC);

$sql2 = "SELECT DISTINCT * FROM utilisateur WHERE mail='" . $mail . "'";


// grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
$req = $bdd->prepare($sql2);
// on execute notre requete
$req->execute();
// on recupere les donnees de la bdd sous forme de tableau associatif
$users = $req->fetch(PDO::FETCH_ASSOC);



$sql3 = "SELECT DISTINCT * FROM event AS e INNER JOIN  categorie As c ON e.id_cat=c.id_cat";

// grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
$requet = $bdd->prepare($sql3);
// on execute notre requete
$requet->execute();
// on recupere les donnees de la bdd sous forme de tableau associatif
$eve2 = $requet->fetchAll(PDO::FETCH_ASSOC);


include '../include/head2.php';

?>

<header>
  <?php include '../include/nav2.php'; ?>
</header>
<main>
  <h1>Accueil Administrateur</h1>
  <div class="album py-5 bg-light">
    <div class="container-fluid">
      
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <?php foreach ($eve2 as $evenement) : ?>
          <div class="col">
            <div class="card shadow-sm"><img src="../assets/image/<?= $evenement['image'] ?>">



              <div class="card-body">
                <p class="card-text"><?= $evenement['description'] ?></p>
                <div class="d-flex justify-content-between align-items-center">

                  <?= $evenement['categorie'] ?>
                  <small class="text-muted"><a type="button" class="btn btn-success" href="liste.php?id=<?= $evenement['id_events'] ?>">Liste d'inscrits</a> </small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>

</main>
</main>

<?php

include '../include/footer2.php';
include '../include/bottom.php';
?>