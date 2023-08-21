<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icone/favicon-96x96.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/stylesheet/main.css">
    <link rel="stylesheet" href="assets/stylesheet/3D.css">

</head>

<body>

    <body class="vh-100 d-flex flex-column">

        <?php require 'header.php' ?>
        <main>
            <section>
                <div class="container-fluid portf mt-5 p-4">
                    <div class="text-white text-capitalize text-center text-decoration-underline mt-4">
                        <h2 class="fs-2">Voici mes réalisations de mes impressions 3D</h2>
                    </div>


                </div>
            </section>



            <?php
            if ($variable == 0) {
                echo "<script>alert(\"La page 3D est en cours de réalisation, merci de patienter\")</script>";
            }
            ?>

        </main>
        <?php require 'footer.php' ?>

    </body>

</html>