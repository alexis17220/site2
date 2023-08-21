<?php


session_start();

if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
    $mail = $_SESSION['mail'];
    $mdp = $_SESSION['mdp'];
}

$sql = "SELECT DISTINCT * FROM event AS e INNER JOIN categorie As c ON e.id_cat=c.id_cat INNER JOIN utilisateur AS u ON e.id_users=u.id_users WHERE mail='".$mail."'";
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

include '../include/head.php';

?>
      
<header>
  <?php include '../include/nav.php'; ?>
</header>
<main class="container-fluid">
    <h1>Liste des évènements</h1>
    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($eve as $evenement) :?>
        <div class="col">
          <div class="card shadow-sm"><img src="../assets/image/<?=$evenement['image']?>">
           
            <div class="card-body">
              <p class="card-text"><?=$evenement['description'] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="view.php?id=<?=$evenement['id_events']?>" type="button" class="btn btn-sm btn-outline-secondary">Voir</a>
                  <a href="modifier.php?id=<?=$evenement['id_events']?>" type="button" class="btn btn-sm btn-outline-warning">Modifier</a>
                  <a href="action.php?id=<?=$evenement['id_events']?>" type="button" class="btn btn-sm btn-outline-danger">Supprimer</a>

                </div>
                <?=$evenement['categorie']?>
                <small class="text-muted"><a type="button" class="btn btn-success" href="liste.php?id=<?=$evenement['id_events']?>">Liste d'inscrits</a>  </small>
              </div>
            </div>
          </div>
        </div>
        <?php  endforeach; ?>
        
      </div>
    </div>
  </div>
</main>

<?php

include '../include/footer3.php';
include '../include/bottom.php';
?>
