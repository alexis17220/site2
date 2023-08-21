<?php

session_start();  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
if (isset($_SESSION['mail']) && isset($_SESSION['mdp'])) {
  $mail = $_SESSION['mail'];
  $mdp = $_SESSION['mdp'];

}

$sql = "SELECT DISTINCT id_users, prenom, nom, username, actif, mail, date_inscription, adresse, ville, code_postal, telephone, mdp FROM utilisateur ORDER BY 'id_users' ASC";
require '../fonction.php';
$bdd = getBdd();
// grâce a PDO ($bdd) on prépare la requete que l'on stock dans $requete
$requete = $bdd->prepare($sql);
// on execute notre requete
$requete->execute();
// on recupere les donnees de la bdd sous forme de tableau associatif
$users = $requete->fetchAll(PDO::FETCH_ASSOC);
// on vérifie les infos
//var_dump($users);


include '../include/head2.php';

?>
      
<header>
  <?php include '../include/nav2.php'; ?>
</header>
<main>
    <h1>Gestion utilisateur</h1>

    <main>
    <div class="container-fluid">

      <div class="text-center">
        <a href="user/ajoutuser.php?id=" class="btn btn-success my-2">Ajouter un utilisateur</a>
      </div>
      <div>
        <table id="table" style="width:100%" class=" display table table-striped" border="1px">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">Mail</th>
              <th scope="col">Ville</th>
              <th scope="col">Adresse</th>
              <th scope="col">Pseudo</th>
              <th scope="col">Date inscription</th>
              <th scope="col">Mot de passe</th>
              <th scope="col">Code Postal</th>
              <th scope="col">Téléphone</th>

              <th scope="col">Modifier</th>
              <th scope="col">Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?>
              <tr>
                <th scope="row"><?= $user['id_users']; ?></th>
                <td><?= $user['nom']; ?></td>
                <td><?= $user['prenom']; ?></td>
                <td><?= $user['mail']; ?></td>
                <td><?= $user['ville']; ?></td>
                <td><?= $user['adresse']; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['date_inscription']; ?></td>
                <td><?= $user['mdp']; ?></td>
                <td><?= $user['code_postal']; ?></td>
                <td><?= $user['telephone']; ?></td>
              
                <td><a href="user/modifuser.php?id=<?=$user['id_users']?>" class="btn btn-warning">Modifier</a></td>
                <td><a href="user/updateuser.php?id=<?=$user['id_users']?>" class="btn btn-danger">Supprimer</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    
</main>

<?php

include '../include/footer2.php';
include '../include/bottom.php';
?>
