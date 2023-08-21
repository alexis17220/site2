<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/main.css">
    <link rel="stylesheet" href="Assets/css/connexion.css">
</head>

<body class="vh-100 d-flex flex-column">
    <?php require('header.php');  ?>

    <main class="container text-center">

        <section class="container">
            <div class="card _bordiere bg-light shadow mb-3 ">
                <form class=" row col-form-label">

                    <h1 class="mb-2">Identifiez-vous</h1>


                    <div class="col-lg-4 mt-4 mb-2">
                        <label for="mail" style="font-weight: bold;">Adresse e-mail</label><br>
                        <e-mail><input type="text" name="mail" id="mail" placeholder="Exemple@mail.fr"></e-mail>

                    </div>

                    <div class="col-lg-4 mt-0">
                        <label for="pass" style="font-weight: bold;">Mot de passe</label><br>
                        <a href="#"><span>Mot de passe oublié ?</span><br></a>
                        <input type="password" name="pass" id="pass">

                    </div>

                    <div class="col-lg-4 mt-4">
                        <a class="btn btn-info mb-2 mt-3 fw-bold" onclick="valider()">Identifiez-vous</a> <br>
                    </div>
                </form>

            </div>

            <div class="card _bordiere bg-light shadow mb-3 ">
                <form class=" row col-form-label">
                    <h2>Inscrivez-vous ici</h2>

                    <div class="row m-0 mb-2">
                        <div class="col-lg-12">
                            <a href="creation.php" class="btn btn-info mb-2 mt-3 fw-bold">Créer votre compte</a><br>
                        </div>

                    </div>
                </form>
            </div>
        </section>


    </main>




    <?php require('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/main.js"></script>

</body>

</html>