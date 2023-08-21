<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea Box</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
</head>

<body>
    <?php require('header.php');  ?>
    <main>
        <div class="container-fluid idea_box">

            <a href="index.php"><img class="button_retour" src="assets/image/button_retour.png" alt="lien vers l'accueil'"></a>

            <div class="idea_box_form">
                <form action="#">
                    <label for="#">Une nouvelle idée ?</label><br>
                    <textarea class="value_textarea"></textarea><br>
                    <input type="button" value="Envoyer" onclick="Idea_box()">

                </form>
                <div class="test_idea_box"></div>

            </div>




        </div>

    </main>
    <?php require('footer.php'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/main.js"></script>
</body>

</html>