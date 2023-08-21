<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/stylesheet/main.css">
    <link rel="stylesheet" href="assets/stylesheet/portfolio.css">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icone/favicon-96x96.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">
</head>

<body class="vh-100 d-flex flex-column">

    <?php require 'header.php' ?>
    <main>
        <section>
            <div class="container-fluid portf mt-5 p-4">
                <div class="text-white text-capitalize text-center text-decoration-underline mt-4">
                    <h2 class="fs-2">Mes réalisations</h2>
                </div>
                <div class="row text-white text-center mt-5">
                    <div class="col-lg-4 fs-5 mt-5">
                        <div class="card">
                            <img src="assets/images/site_v1.PNG" class="card-img-top" alt="...">

                            <h3 class="card-title">jobétudiant.fr</h3>
                            <p class="card-text ">Projet de groupe réalisé durant ma
                                formation de Développeur
                                Web et Web
                                Mobile</p>
                            <a href="Projet_v1/accueil.html" target="_blank" class="btn btn-primary">Version 1</a>

                        </div>
                    </div>
                    
                    <div class="col-lg-4 fs-5 mt-5">
                        <div class="card">
                            <img src="assets/images/site_v2.png" class="card-img-top" alt="...">

                            <h3 class="card-title">jobétudiant.fr</h3>
                            <p class="card-text">Projet de groupe réalisé durant ma formation de Développeur
                                Web et
                                Web
                                Mobile</p>
                            <a href="Projet_v2/accueil.php" target="_blank" class="btn btn-primary">Version 2</a>

                        </div>
                    </div>
                    
                    <div class="col-lg-4 fs-5 mt-5">
                        <div class="card">
                            <img src="assets/images/ECF.png" class="card-img-top" alt="...">

                            <h3 class="card-title">ECF</h3>
                            <p class="card-text">Page web réalisé lors de l'ECF. Partie Front-End en Bootstrap.
                            </p>
                            <a href="ECF/ECF.html" target="_blank" class="btn btn-primary">La page ECF </a>

                        </div>
                    </div>
                    <div class="col-lg-4 fs-5 mt-5">
                        <div class="card">
                            <img src="assets/images/MonSite.png" class="card-img-top" alt="...">

                            <h3 class="card-title">Clone Angular</h3>
                            <p class="card-text">Pages web réalisés sous Angular. Le formulaire de contact vous renvoie sur la page contact de mon site. Il y aura d'autres sites sous Angular.
                            </p>
                            <a href="monSite/" target="_blank" class="btn btn-primary">Site Angular</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require 'footer.php' ?>
    
</body>

</html>