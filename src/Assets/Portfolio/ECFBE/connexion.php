<?php


include 'include/head.php';

?>
      
<header>
  <?php include 'include/navigation.php'; ?>
</header>
<main class="form-signin">
  <form action="login_post.php" method="POST">
    
    <h1 class="h3 mb-3 fw-normal">Merci de vous connectez</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="mdp">
      <label for="floatingPassword">Mot de passe</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me">Se Souvenir de moi
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Connecter</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>

</main>
   <?php

   include 'include/footer.php';
   include 'include/bottom.php';
   ?>

