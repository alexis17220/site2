<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/stylesheet/main.css">
    <link rel="stylesheet" href="assets/stylesheet/contact.css">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icone/favicon-96x96.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">
</head>

<body class="vh-100 d-flex flex-column">


    <?php require('header.php');

    if (isset($_POST['submit'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $societe = htmlspecialchars($_POST['société']);
        $tel = htmlspecialchars($_POST['telephone']);
        $mail = htmlspecialchars($_POST['email']);
        $mes = htmlspecialchars($_POST['message']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $suj = htmlspecialchars($_POST['sujet']);
        /*
        if (empty($nom)) {
            // erreur
            echo "<script>alert('Merci de mettre votre nom')";
        }
        if (empty($prenom)) {
            // erreur
        }
        if (empty($mes)) {
            // erreur
        }
        if (empty($suj)) {
            // erreur
        }
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo 'L\'adresse e-mail est valide';
        } else {
            echo 'L\'adresse e-mail n\'est pas valide';
        }

        if (empty($tel)) {
            // erreur
        }
*/
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $mail . "\r\n";


        $message = '<p><b>Message envoyé depuis la page Contact du site Meysson Alexis</b></p><br>
            <p><b>Nom : </b>' . $nom . '<br>
            <b>Téléphone : </b>' . $tel . '<br>
            <b>Nom de la société : </b>' . $societe . '<br>
            <b>Email : </b>' . $mail . '<br>
            <b>Sujet : </b>' . $suj . '<br>
            <b>Message : </b>' . $mes . '</p>';


        $retour = mail('alexis1722086@gmail.com', 'Meysson Alexis', $message, $entete);
        if ($retour) {
            echo '<div class="container mt-4"><div class="alert alert-success" role="alert">Votre message a bien été envoyé.</div></div>';
        } else {
            echo '<div class="container mt-4"><div class="alert alert-danger" role="alert">Une erreur s\'est produite.</div></div>';
        }
    }
    ?>
    <main>
        <div class="container text-center">
            <div class='card  text-white mb-5 mt-5 p-4 fs-6'>
                <form action="Contact.php" method="POST" class='row g-3'>
                    <div class='col-lg-4'>
                        <label class='form-label' for='Nom'>Nom</label>
                        <input type='text' name="nom" class='form-control' id='Nom' placeholder='Entrer votre nom'>
                    </div>
                    <div class='col-lg-4'>
                        <label class='form-label' for='prenom'>Prénom</label>
                        <input type='text' name="prenom" id='prenom' class='form-control' placeholder='Entrer votre prénom'>
                    </div>
                    <div class='col-lg-4'>
                        <label class='form-label' for='soc'>Nom de la société</label>
                        <input type='text' name="société" class='form-control' id='soc' placeholder='Entrer votre nom de société'>
                    </div>
                    <div class='col-lg-6'>
                        <label class='form-label' for='tel'>Numéro de Téléphone</label>
                        <input type='text' id='tel' name="telephone" class='form-control' placeholder='Entrer votre numéro'>
                    </div>
                    <div class='col-lg-6'>
                        <label class='form-label' for='mail'>Adresse Email</label>
                        <input type='text' id='mail' name="email" class='form-control' placeholder='Entrer votre email'>
                    </div>

                    <div class='col-lg-12'>
                        <label for='suj' class='form-label'>Sujet du message</label>
                        <input type='text' class='form-control' name="sujet" id='suj' placeholder='Titre du message'>
                    </div>
                    <div class='col-lg-12'>
                        <label for='autre' class='form-label'>Votre message</label>
                        <textarea maxlength='1000' class='form-control' name="message" id='autre' placeholder='1000 caractère maximum'></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-outline-info text-uppercase" id="submit" name="submit" type="submit">Envoyer</button>
                    </div>

                </form>
            </div>
        </div>
    </main>
    <?php require 'footer.php'  ?>


</body>

</html>