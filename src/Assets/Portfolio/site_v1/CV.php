<!-- =====================
Meysson ALexis
17/04/21
Réalisation Cv en ligne
===============-->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/stylesheet/main.css">
    <link rel="stylesheet" href="assets/stylesheet/CV.css">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icone/favicon-96x96.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">
</head>

<body class="vh-100 d-flex flex-column">
    <?php require 'header.php' ?>
    <main>
        <div class="container-fluid ">

            <div class="card mt-5">
                <div class="row fs-4">

                    <div class="col-md-5 ">
                        <img src="assets/images/logo.png" class=" img-fluid " alt="">
                    </div>
                    <div class="col-md-7 ps-md-0">
                        <div class="row">
                            <div class="col-lg-12 md-5 text-end text-light">
                                <address>16 fief Buchet <br>
                                    17220 Saint Vivien</address>
                                <address class="row">
                                    <div class="col-12">
                                        <a href="tel:+33676428287" class="text-light" class="mb-4">(+33)676428287</a>
                                    </div>
                                    <div class="col-12">
                                        <a class="mail text-white fst-italic" href="mailto:alexis1722086@gmail.com">alexis1722086@gmail.com</a>
                                    </div>
                                </address>
                                <div class="row">
                                    <div class="col-12 text-white fs-5">Permis B / Véhicule personnel</div>
                                    <div class="col-12 py-3 py-sm-0 pt-md-3 d-flex  justify-content-center">
                                        <a class="btn btn-outline-info text-uppercase text-white" href="CV_Meysson_Alexis.pdf" download="CV_Meysson_Alexis.pdf">Télécharger Mon CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container-fluid text-white">
            <div class=" mt-5 text-center">

                <h2 class="fs-1 fw-bold text-decoration-underline">Mes Compétences</h2>

                <div class="card m-4 fs-3 front2">
                    <h3 class="text-decoration-underline text-center fw-bold ">Front-End</h3>
                    <div class="row ">
                        <div class="col-lg-3 mt-5">HTML 5
                            <img src="assets/icone/HTML.svg" class="d-block w-25 mx-auto" alt="HTML">
                        </div>
                        <div class=" col-lg-3 mt-5">CSS
                            <img src="assets/icone/css.svg" class="d-block w-25 mx-auto" alt="CSS">
                        </div>
                        <div class=" col-lg-3 mt-5">JS
                            <img src="assets/icone/JS.svg" class=" d-block w-25 mx-auto" alt="JS">
                        </div>
                        <div class=" col-lg-3 mt-5">BOOTSTRAP
                            <img src="assets/icone/bootstrap.svg" class="d-block w-25 mx-auto" alt="Bootstrap">
                        </div>
                    </div>

                </div>

                <div class="card m-4 fs-3 back2">
                    <h3 class="text-decoration-underline text-center fw-bold">Back-End</h3>
                    <div class="row ">
                        <div class="col-lg-3 mt-5">PHP
                            <img src="assets/icone/PHP.svg" class="d-block w-50 mx-auto" alt="PHP"></div>
                        <div class="col-lg-3 mt-5">SQL
                            <img src="assets/icone/sql.svg" class="d-block w-25 mx-auto" alt="SQL">
                        </div>
                        <div class=" col-lg-3 mt-5">PHPMyAdmin<img src="assets/icone/PhpMyAdmin.svg" class=" d-block w-50 mx-auto" alt="PHPMyAdmin">
                        </div>
                        <div class=" col-lg-3 mt-5">JAVA<img src="assets/icone/java.svg" class="d-block w-25 mx-auto" alt="JAVA">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-3">
                    <div class="fs-3 card m-4  sav">
                        <h3 class="text-decoration-underline fw-bold ">Logiciels utilisés</h3>
                        <ul>
                            <li>Visual Studio Code</li>
                            <li>Git</li>
                            <li>MySql</li>
                            <li>Npm</li>
                            <li>Node</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fs-3 card m-4  sav">
                        <h3 class="text-decoration-underline fw-bold ">Langages utilisés</h3>
                        <ul>
                            <li>JEE</li>
                            <li>Java</li>
                            <li>Java SE</li>
                            <li>Javascript</li>
                            <li>Symfony</li>
                            <li>PHP</li>
                            <li>PL/SQL</li>
                        </ul>
                    </div>
                </div>


               

                <div class="col-lg-3">
                    <div class="fs-3 card m-4 sav">
                        <h3 class="text-decoration-underline fw-bold">Savoirs-faire</h3>
                        <ul>
                            <li>Réaliser une Page Web Statique</li>
                            <li>Réaliser une Page Web Dynamique</li>
                            <li>Utiliser les conceptions de Mérise, UML.</li>
                            <li>Créer et gérer une base de données</li>
                            <li>Créer une application en couche</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="m-4 fs-3 card sav ">
                        <h3 class="text-decoration-underline fw-bold">Savoirs-être</h3>
                        <ul>
                            <li>Organisé</li>
                            <li>Rigoureux</li>
                            <li>Esprit d'équipe</li>
                            <li>Autonome</li>
                            <li>Autodictate</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-6 mt-4">
                    <div class="card">
                        <div class="pro text-white ">
                            <h2 class=" fs-1 fw-bold">Mes expériences professionnelles</h2>
                            <div class="text-center mt-4 fs-3">
                                Concepteur Développeur d'Application web / LM2I La Rochelle, <br>
                                Contrat d'apprentissage <br> De
                                2021 – 2022
                            </div>
                            <div class="text-center mt-4 fs-3">
                                Développeur web / LM2I La Rochelle, <br> 30 Aôut au 5 Novembre <br> 
                                Période en entreprise 10 semaines
                            </div>
                            <div class="text-center mt-4 fs-3">
                                Développeur web / LM2I La Rochelle, <br> Octobre-Novembre 2020 <br> 
                                Période en immersion de 2 semaines
                            </div>
                            <div class="text-center mt-4 fs-3">
                                Technicien informatique / Fénelon Notre Dame La Rochelle,<br>
                                Septembre-Octobre 2020,
                                <br> Novembre-Décembre 2020.
                                
                            </div>
                            <div class="text-center mt-4 fs-3">
                                2019/2020 : Stratiﬁeur en matériaux composites / SUPPLAY La Rochelle <br>
                                AAA Marine
                                Fountaine
                                Pajot
                                Novembre 2019 à Mars 2020 <br> Strate Atlantique juillet à octobre 2019
                            </div>

                            <div class="text-center mt-4 fs-3">
                                Stratiﬁeur / NAUTITECH CATAMARANS <br> Rochefort, France Juin 2019 <br>
                               
                            </div>
                            <div class="text-center mt-4 fs-3">
                                Technicien informatique / ACT Service La Rochelle <br> Octobre 2018 <br>
                                  
                            </div>
                            
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 mt-4">
                    <div class="card">
                        <div class="formation text-white text-center ">
                            <h2 class="fs-1 fw-bold ">Mes cursus de formations</h2>
                            <div class="text-center mt-4 fs-3">
                                Titre Professionnel Concepteur Développeur d'Application <br> ENI Ecole informatique de
                                Niort
                                <br> De
                                Décembre 2021
                                – en cours
                            </div>
                            <div class="text-center mt-4 fs-3">
                                Titre Professionnel Développeur Web et Web Mobile <br> Afpa de
                                Rochefort
                                <br> De
                                Mars 2021
                                – Novembre 2021
                            </div>
                            <div class="text-center mt-4 fs-3">
                                IFP Atlantique Périgny <br> De Septembre à
                                Décembre 2020
                                
                            </div>
                            <div class="text-center mt-4 fs-3">
                                Capacité de "Stratiﬁeur Multi-procédés en Matériaux Composites"
                                / CIPECMA
                                Châtelaillon-Plage, France <br> D'avril 2019 à juin 2019
                            </div>
                            <div class="text-center mt-4 fs-3">
                                Licence science de la vie / Université PST La Rochelle <br> De septembre
                                2014 à juin
                                2018 Niveau
                                BAC+2
                            </div>
                            <div class="text-center mt-4 fs-3">
                                Baccalauréat Sciences et Technologies de la Santé et du Social / Lycée Valin La Rochelle <br>
                                De septembre
                                2012 à
                                juin 2014
                                – ST2S
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container text-center text-white p-4">
            <div class="row">
                <div class="col-lg-12 card">
                    <h2 class="fs-2 fw-bold ">Mes centres d'intérêt</h2>
                    <div class="fs-3 ">
                        <ul>

                            <li>Imprimante 3D</li>
                            <li>Remplacement d'écran de smartphone / pc portable</li>
                            <li>Montage de pc gamers</li>
                            <li>Clonage HDD/SSD</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php require 'footer.php' ?>


</body>

</html>