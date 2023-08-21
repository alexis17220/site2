function dbg(x) {
    console.log(x);
}
var postCode;

function Postal() {
    postCode = document.querySelector('.form_postal').value;
    document.querySelector('.display_postal').style = ('color: black; border: 1px solid black; padding: 5px; border-radius: 5px; box-shadow: black 0 5px 5px 0; margin-right: 2%;');
    // dbg(postCode);
    if (isNaN(postCode)) {
        alert("Saisissez un Code Postal numérique !");
    }
    else {
        document.querySelector('.display_postal').innerText = ("CODE POSTAL : ") + postCode;
    }

    if (postCode == "") {
        document.querySelector('.display_postal').innerText = ("");
        document.querySelector('.display_postal').style = ('');
    }


}

function Troll() {
    //document.body.innerHTML = ('<a href="index.html"><img  class="button_retour" src="assets/image/button_retour.png" alt="lien vers l\'accueil"></a><img src="assets/image/avengers.jpg" style="width: 90%; height: 90%;">');
    document.body.innerHTML = ('<a href="index.php"><img  class="button_retour" src="assets/image/button_retour.png" alt="lien vers l\'accueil"></a>');
    document.body.style = ('background: url(assets/image/avengers02.jpg)');
}

function rechercher() {


    if (document.querySelector(".form_postal").value == '') {
        var m = "Veuillez remplir les formulaires de recherche correctement."
        alert(m)
    }
    else {

        dbg(postCode);
    }

}

function Idea_box() {
    var test = document.querySelector(".value_textarea").value;
    document.querySelector(".test_idea_box").innerText += test + ('\n');
}

//<<<<<<< HEAD
//test



function deconnexion() {
    let message = confirm("Voulez vous vraiment vous déconnecter")
    if (message == true) {
        alert("Vous êtes déconnecté");
        document.location = "connexion.php";

    } else alert("Vous êtes toujours connecté");

}



function valider() {
    let entrer = document.querySelector("#mail").value;

    if (entrer == '') {

        alert("Merci de remplir votre mail");


    } else {

        alert("Bienvenue sur votre compte " + entrer);
        document.location = "compte.php";

    }

}

function etudiant() {

    document.getElementById("form").innerHTML = "<div class='card _bordiere shadow text-dark bg-light mb-5 mt-5 p-4'><form class='row g-3'><div class='col-sm-6'><label class='form-label' for='Nom'>Nom</label><input type='text' class='form-control' id='Nom' placeholder='Exemple : Petit'></div><div class='col-sm-6'><label class='form-label' for='prenom'>Prénom</label><input type='text' id='prenom' class='form-control' placeholder='Exemple : Suisse'></div><div class='col-12'><label for='inputAddress' class='form-label'>Adresse</label><input type='text' class='form-control' id='inputAddress' placeholder='Exemple : 13 rue Bidon'></div><div class='col-6'><label for='inputAddress2' class='form-label'>Adresse complémentaire</label><input type='text' class='form-control' id='inputAddress2' placeholder='Adresse Complémentaire'></div><div class='col-6'><label class='form-label' for='tel'>Numero de Téléphone</label><input type='text' id='tel'class='form-control' placeholder='xx.xx.xx.xx.xx'></div><div class='col-sm-5'><label for='inputCity' class='form-label'>Ville</label><input type='text' class='form-control' id='inputCity' placeholder='Exemple : Saint Moustache'></div><div class='col-sm-4'><label for='inputState' class='form-label'>Département</label><input type='text' class='form-control' id='inputState' placeholder='Exemple : Yaourt'></div><div class='col-sm-3'><label for='inputZip' class='form-label'>Code postal</label><input type='text' class='form-control' id='inputZip' placeholder='Exemple : 321021'></div></form></div><div class='card _bordiere shadow text-dark bg-light mb-5 mt-5 p-4 '><form class='row g-3'><div class='col-sm-6'><label for='inputEmail4' class='form-label'>Email</label><input type='email' class='form-control' id='inputEmail4' placeholder='Exemple : exemple@fdg.com'></div><div class='col-sm-6'><label for='inputEmail5' class='form-label'>Confirmation Email</label><input type='email' class='form-control' id='inputEmail5' placeholder='Confirmation E-mail'></div><div class='col-sm-6'><label for='inputPassword4' class='form-label'>Mot de passe</label><input type='text' class='form-control' id='inputPassword4' placeholder='Mot de passe'></div><div class='col-sm-6'><label for='inputPassword5' class='form-label'>Confirmation de Mot depasse</label><input type='text' class='form-control' id='inputPassword5' placeholder='Confirmation de mot de passe'></div><div><p>Permis</p><div class='form-check form-check-inline'><input class='form-check-input' type='radio' name='inlineRadioOptions'id='oui' value='option1'><label class='form-check-label' for='oui'>Oui</label></div><div class='form-check form-check-inline'><input class='form-check-input' type='radio' name='inlineRadioOptions'id='non' value='option1'><label class='form-check-label' for='non'>Non</label></div></div></form></div><div class='card _bordiere shadow text-dark bg-light mb-5 mt-5 p-4'><h3 class='card-header'>Documents</h3><form class='row g-3'><div class='col-lg-12'><label for='formFile' class='form-label'>CV</label><input type='file' class='form-control'></div><div class='col-lg-12'><label for='formFileMultiple' class='form-label'>Diplômes</label><input type='file' class='form-control' id='formFileMultiple' multiple></div><label >Secteur d'activité</label><input type='text' placeholder='Secteur activité' list='Domaine'><datalist id='Domaine'><option value='Administration, affaires, comptabilité et finance'><option value='Arts, culture, lettres et communication'><option value='Bâtiment, travaux publics, aménagement et transports'><option value='Enseignement et sciences de l éducation, sciences humaines et sociales'><option value='Justice et protection du public'><option value='Ressources naturelles, agriculture, faune et environnement'><option value='Santé'><option value='Technologies de l information'><option value='Tourisme et hôtellerie'></datalist><label for='autre' >Autres informations</label><textarea maxlength='300' id='autre' placeholder='Max 300 caractères'></textarea><div class='col-12'><input type='submit'  class='btn btn-primary'></input></div></form></div>";

}

function professionnel() {

    document.getElementById("form").innerHTML = "<div class='card _bordiere shadow text-dark bg-light mb-5 mt-5 p-4'><form class='row g-3'><div class='col-sm-6'><label class='form-label' for='nom'>Nom de la société</label><input type='text' class='form-control' id='nom' placeholder='Nom de la société'></div><div class='col-sm-6'><label class='form-label' for='num'>Numéro de Siret</label><input type='text' id='num' class='form-control' placeholder='Numéro de Siret'></div><div class='col-12'><label for='inputAddress' class='form-label'>Adresse</label><input type='text' class='form-control' id='inputAddress' placeholder='Adresse'></div><div class='col-6'><label for='inputAddress2' class='form-label'>Adresse complémentaire</label><input type='text' class='form-control' id='inputAddress2' placeholder='Adresse Complémentaire'></div><div class='col-6'><label class='form-label' for='tel'>Numero de Téléphone</label><input type='text' class='form-control' id='tel' placeholder='xx.xx.xx.xx.xx'></div><div class='col-sm-5'><label for='inputCity' class='form-label'>Ville</label><input type='text' class='form-control' id='inputCity' placeholder='Ville'></div><div class='col-sm-4'><label for='inputState' class='form-label'>Département</label><input type='text' class='form-control' id='inputState' placeholder='Département'></div><div class='col-sm-3'><label for='inputZip' class='form-label'>Code postal</label><input type='text' class='form-control' id='inputZip' placeholder='Code postal'></div></form></div><div class='card text-dark _bordiere shadow bg-light mb-5 mt-5 p-4'><form class='row g-3'><div class='col-sm-6'><label for='inputEmail4' class='form-label'>Email</label><input type='email' class='form-control' id='inputEmail4' placeholder='E-mail'></div><div class='col-sm-6'><label for='inputEmail5' class='form-label'>Confirmation Email</label><input type='email' class='form-control' id='inputEmail5' placeholder='Confirmation E-mail'></div><div class='col-sm-6'><label for='inputPassword4' class='form-label'>Mot de passe</label><input type='text' class='form-control' id='inputPassword4' placeholder='Mot de passe'></div><div class='col-sm-6'><label for='inputPassword5' class='form-label'>Confirmation de Mot de passe</label><input type='text' class='form-control' id='inputPassword5' placeholder='Confirmation de mot de passe'></div></form></div><div class='card _bordiere shadow text-dark bg-light mb-5 mt-5 p-4'><h3 class='card-header'>Documents</h3><form class='row g-3'><label>kbis</label><input type='file'placeholder='kbis'><label >Secteur d'activité</label><input type='text' placeholder='Secteur activité' list='Domaine'><datalist id='Domaine'><option value='Administration, affaires, comptabilité et finance'><option value='Arts, culture, lettres et communication'><option value='Bâtiment, travaux publics, aménagement et transports'><option value='Enseignement et sciences de l éducation, sciences humaines et sociales'><option value='Justice et protection du public'><option value='Ressources naturelles, agriculture, faune et environnement'><option value='Santé'><option value='Technologies de l information'><option value='Tourisme et hôtellerie'></datalist><label for='autre' >Autres informations</label><textarea maxlength='300' id='autre'placeholder='Max 300 caractères'></textarea><div class='col-12'><input type='submit' class='btn btn-primary'></input></div></form></div>";

}


/*
################################
############ jQuery ############
################################
*/

//ici on va transformer notre code d'origine JS en jQuery
/*

$(document).ready(function() {

/* FONCTION APPARITION ET DISPARITION DE LA BANNIERE ( travail sur le callback a faire pour la boucle)*/
/*

$(".button2").click(function(){
    let b = $(".banniere");
    b.hide(2000);
    b.queue(function(){
        setTimeout(function(){
            b.css('background','url(assets/image/banniere_paysagiste.jpg)')
            .dequeue();
        },1000);
    });
    b.show(2000);
    
    //b.hide(3000);
    //b.delay(3000).css('background','url(assets/image/nature_banniere.jpg)');
    //$(".banniere").show(3000);
    //b.show(300).css('background','url(assets/image/banniere_paysagiste.jpg)');
    //b.hide(2000).delay(500).css('background','url(assets/image/nature_banniere.jpg)').show(2000);
});
*/

/****************************************************************************** */
/*NE FONCTIONNE PAS A L'HEURE ACTUELLE*/

/*
    $(".button2").click(function(){
        function animate() {
            let p = $(".banniere");
                p.animate({background:'url(assets/image/banniere_paysagiste.jpg)'}, 1000, function(){
                    p.animate({background:'url(assets/image/nature_banniere.jpg)'}, 1000, function(){
                        p.animate({background:'url(assets/image/banniere_paysagiste.jpg)'}, 1000, function(){
                            animate();
                        });
                    });
                });
            }
        animate();
    });
*/

/***************************************************************** */
/*
    $(".button2").click(function(){
        function animate() {
            let p = $(".pbanniere");
                p.animate({fontSize:'40px'}, 1000, function(){
                    p.animate({fontSize:'60px'}, 1000, function(){
                        p.animate({fontSize:'80px'}, 1000, function(){
                            animate();
                        });
                    });
                });
            }
        animate();
    });
*/
/*********************************************************** */
    
/*
    
 });
*/
//>>>>>>> 9b122d2369d9e8649300e66474d22783ca300862
