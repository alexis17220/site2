function dbg(x){
    console.log(x);
}
var postCode;

function Postal(){
    postCode = document.querySelector('.form_postal').value;
    document.querySelector('.display_postal').style = ('color: royalblue; border: 1px solid white; padding: 5px; background: gainsboro; font-weight: bold; border-radius: 5px; box-shadow: black 0 5px 5px 0');
   // dbg(postCode);
   if(isNaN(postCode)){
        alert("Saisissez un Code Postal numérique !");
    } 
    else {
        document.querySelector('.display_postal').innerText = ("CODE POSTAL : ") + postCode;
    }

    if(postCode == ""){
        document.querySelector('.display_postal').innerText = ("");
        document.querySelector('.display_postal').style = ('');
    }
        
    
}

function Troll(){
    //document.body.innerHTML = ('<a href="index.html"><img  class="button_retour" src="assets/image/button_retour.png" alt="lien vers l\'accueil"></a><img src="assets/image/avengers.jpg" style="width: 90%; height: 90%;">');
    document.body.innerHTML = ('<a href="index.html"><img  class="button_retour" src="assets/image/button_retour.png" alt="lien vers l\'accueil"></a>');
    document.body.style = ('background: url(assets/image/avengers02.jpg)');
}

function rechercher(){


    if(document.querySelector(".form_postal").value == '')
    {
        var m="Merci de remplir le formulaire de recherche correctement."
        alert (m)
    }
    else {
        
        dbg(postCode);
    }
    
}

function Idea_box(){
    var test = document.querySelector(".value_textarea").value;
    document.querySelector(".test_idea_box").innerText += test + ('\n');
}

//<<<<<<< HEAD
//test



function deconnexion(){
    let message=confirm("Voulez vous vraiment vous déconnecter")
    if(message==true)
    {
        alert("Vous êtes déconnecté");
        document.location="connexion.html";

    }else alert("Vous êtes toujours connecté"); 
    
}



function valider(){
    let entrer=document.querySelector("#mail").value;

        if(entrer==''){
        
        alert("Merci de remplir votre mail");


    } else {
        
        alert("Bienvenue sur votre compte "+ entrer);
        document.location="compte.html";
        
    }

}
/*
################################
############ jQuery ############
################################
*/

//ici on va transformer notre code d'origine JS en jQuery


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
    

    
 });

//>>>>>>> 9b122d2369d9e8649300e66474d22783ca300862
