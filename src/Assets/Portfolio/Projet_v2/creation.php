<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/creation.css">
</head>

<body class="vh-100 d-flex flex-column">
    <?php require('header.php');  ?>
    <main>
        <div class="container-fluid text-center">
            <h1>Création de compte</h1>
            <div>

                <article class="container-fluid">

                    <div class="container text-center">
                        <div class="card _bordiere shadow text-dark bg-light mb-3 p-2">
                            <h2 class="card-header">Vos informations personnelles</h2>

                            <div class="m-4">
                                <p>Vous êtes</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="etudiant"
                                        value="option1" onclick="etudiant()">
                                    <label class="form-check-label" for="etudiant">
                                        étudiants
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="pro"
                                        value="option2" onclick="professionnel()">
                                    <label class="form-check-label" for="pro">
                                        employeurs
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="form">

                        </div>
                    </div>
                </article>
            </div>
        </div>

    </main>
    <?php require('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/main.js"></script>
</body>

</html>