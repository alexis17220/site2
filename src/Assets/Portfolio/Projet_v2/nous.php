<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos de nous</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/main.css">
    <link rel="stylesheet" href="Assets/css/nous.css">
</head>

<body>
    <?php require('header.php');  ?>
    <main>

        <div class="container">
            <div class="row">
                <h2 class="text-center">Notre équipe :</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">

            </div>
        </div>
        <div class="_bordiere container">
            <div class="row d-flex justify-content-evenly">
                <div class="_bordiere col-md-4 card bg-light text-center m-3 shadow" style="width: 18rem;">
                    <img class="card-img-top avatarCardA" src="Assets/image/avatarA1.png" alt="Meysson Alexis">
                    <div class="card-body">
                        <h5 class="card-title">Meysson Alexis</h5>
                        <p class="card-text">Actuellement en formation Développeur Web et Web Mobile (DWWM) à l'AFPA de Rochefort.</p>
                        <a href="https://www.ameysson.fr" class="btn btn-info">ameysson.fr</a>
                    </div>
                </div>

                <div class="_bordiere col-md-4 card bg-light text-center m-3 shadow" style="width: 18rem;">
                    <img class="card-img-top avatarCardC" src="Assets/image/avatarC1.png" alt="Benoit Cedric">
                    <div class="card-body">
                        <h5 class="card-title">Benoit Cedric</h5>
                        <p class="card-text">Actuellement en formation Développeur Web et Web Mobile (DWWM) à l'AFPA de Rochefort.</p>
                        <a href="#" class="btn btn-info">monsite.com</a>
                    </div>
                </div>

                <div class="_bordiere col-md-4 card bg-light text-center m-3 shadow" style="width: 18rem;">
                    <img class="card-img-top avatarCardK" src="Assets/image/avatarK1.png" alt="Andrieu Kevin">
                    <div class="card-body">
                        <h5 class="card-title">Andrieu Kevin</h5>
                        <p class="card-text">Actuellement en formation Développeur Web et Web Mobile (DWWM) à l'AFPA de Rochefort.</p>
                        <a href="https://kevinandrieu.com" class="btn btn-info">kevinandrieu.com</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">
            <div class="row">
                <h2 class="text-center">Nos projets de groupe :</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="_bordiere col card bg-light text-center m-3 shadow">
                    <img class="card-img pt-2" src="Assets/image/site_v1.PNG" alt="Version 1">
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title" style="color: rgb(4, 123, 141);">Version 1</h5>
                        <p class="card-text">Ici la première version de notre projet de groupe, réalisé avec du HTML, CSS & JS.</p>
                        <a href="https://www.kevinandrieu.com/projet_de_groupe_a_V1/index.html" class="btn btn-info">Jobetudiant.fr</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="_bordiere col card bg-light text-center m-3 shadow">
                    <img class="card-img pt-2" src="Assets/image/site_v2.PNG" alt="Version 2">
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title" style="color: rgb(4, 123, 141);">Version 2</h5>
                        <p class="card-text">Ici la seconde version de notre projet de groupe, réalisé avec du HTML, CSS & JS.</p>
                        <a href="https://www.kevinandrieu.com/projet_de_groupe_a/index.html" class="btn btn-info">Jobetudiant.fr</a>
                    </div>
                </div>
            </div>
        </div>





    </main>
    <?php require('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/main.js"></script>
</body>

</html>