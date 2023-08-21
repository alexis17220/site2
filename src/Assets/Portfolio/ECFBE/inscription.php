<?php


include 'include/head.php';

?>
      
<header>
  <?php include 'include/navigation.php'; ?>
</header>
<main class="container-fluid">
    <h1 class="text-center">Inscription</h1>
    <form class="row g-3" action="inscription_post.php" method="POST">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Nom</label>
    <input type="text" class="form-control" id="validationDefault01" name="nom"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="validationDefault02" name="prenom"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault06" class="form-label">Email</label>
    <input type="email" class="form-control" id="validationDefault06" name="mail" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Pseudo</label>
    
      <input type="text" class="form-control" id="validationDefaultUsername" name="username" aria-describedby="inputGroupPrepend2" required>
    
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="validationDefault03" name="adresse" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Ville</label>
    <input class="form-control" id="validationDefault04" name="ville" required>
      
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Code postal</label>
    <input type="text" class="form-control" id="validationDefault05" name="code_postal" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault07" class="form-label">Téléphone</label>
    <input type="tel" class="form-control" id="validationDefault07" name="telephone" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault07" class="form-label">Mot de passe</label>
    <input type="text" class="form-control" id="validationDefault07" name="mdp" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Accepter les termes et les conditions
      </label>
    </div>
  </div>
  <div class="col-12">
  <input type="submit" class="btn btn-primary" id="submit" name="subject"></input>

  </div>
</form>

</main>
   <?php

   include 'include/footer.php';
   include 'include/bottom.php';
   ?>

