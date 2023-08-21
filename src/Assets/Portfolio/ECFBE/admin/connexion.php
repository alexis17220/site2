<?php


include '../include/head2.php';

?>
      
<header>
  <h1 class="h3 mb-3 fw-normal text-center">Merci de vous connectez</h1>
</header>
<main class="form-signin">
  <form action="login_post.php" method="POST">
    

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
    
  </form>

</main>
   <?php

   include '../include/footer3.php';
   include '../include/bottom.php';
   ?>

