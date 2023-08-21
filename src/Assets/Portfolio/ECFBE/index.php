<?php
$sql = "SELECT DISTINCT * FROM event AS e INNER JOIN  categorie As c ON e.id_cat=c.id_cat ";
require 'fonction.php';
$bdd = getBdd();

// grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
$requete = $bdd->prepare($sql);
// on execute notre requete
$requete->execute();
// on recupere les donnees de la bdd sous forme de tableau associatif
$eve = $requete->fetchAll(PDO::FETCH_ASSOC);

include 'include/head.php';

?>

<header>
  <?php include 'include/navigation.php'; ?>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">My Events</h1>

      </div>
    </div>
  </section>


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($eve as $evenement) : ?>
          <div class="col">
            <div class="card shadow-sm"><img src="assets/image/<?= $evenement['image'] ?>">

              <div class="card-body">
                <p class="card-text"><?= $evenement['description'] ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="connexion.php" type="button" class="btn btn-sm btn-outline-secondary">Se connecter</a>

                  </div>
                
                </div>
              </div>
              
            </div>
          </div>
          <?php endforeach; ?>
      </div>


    </div>
  </div>

</main>
<?php

include 'include/footer.php';
include 'include/bottom.php';
?>