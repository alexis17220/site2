<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobetudiant.fr</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/main.css">
    <link rel="stylesheet" href="Assets/css/accueil.css">
</head>
<body>
    <?php require ('header.php');  ?>
    <main class="container text-center">


        <section class="row m-0 mt-3 mx-2">
            <article class="col-lg-8 mt-md-3 ">
                <div class="card _bordiere bg-light shadow mb-3 ">
                    <div class="card-body">
                        <h1 class="card-title">ETUDIANTS</h1>
                        <hr>
                        <p class="card-text">
                            En recherche d'un job <a href="idea_box.php"
                                style="text-decoration: none; color: black;">?</a><br>
                            Sur jobetudiant.fr vous trouverez celui qui vous corre<span id="troll"
                                ondblclick="Troll()">s</span>pondra le mieux.
                            Tous vos critères seront étudiés pour que vous trouviez un job qui répondra à vos attentes.
                        </p>
                        <hr>

                        <form class="container accueil_form">

                            <label for="codePostal" class="form-label fw-bold">Votre code postal</label>
                            <input id="codePostal" class="form-control form-control-sm form1 form_postal"
                                list="datalistOptions" maxlength="5" placeholder="Code Postal" onkeyup="Postal()"
                                aria-label=".form-control-sm example">
                            <datalist id="datalistOptions">
                                <option value="72001 Aigné">
                                <option value="72010 Asnières-sur-Vègre">
                                <option value="72020 Avezé">
                                <option value="72031 Beillé">
                                <option value="72040 La Bossego">
                            </datalist>


                            <label for="secteur" class="form-label2 mb-2 mt-2 fw-bold">Votre domaine</label>
                            <input id="secteur" class="form-control form-control-sm" list="datalistOptions2"
                                placeholder="Domaine">
                            <datalist id="datalistOptions2">
                                <option value="Administration, affaires, comptabilité et finance">
                                <option value="Arts, culture, lettres et communication">
                                <option value="Bâtiment, travaux publics, aménagement et transports">
                                <option value="Enseignement et sciences de l'éducation, sciences humaines et sociales">
                                <option value="Justice et protection du public">
                                <option value="Ressources naturelles, agriculture, faune et environnement">
                                <option value="Santé">
                                <option value="Technologies de l'information">
                                <option value="Tourisme et hôtellerie">
                            </datalist>
                            <input class="btn btn-info mb-3 mt-3 fw-bold" type="button" value="Voir les annonces">
                        </form>

                        <a href="creation.html" style="color: rgb(4, 123, 141); " class="container fw-bold">
                            <p>Inscrivez-vous</p>
                        </a>
                    </div>
                </div>
            </article>

            <article class=" m-0 col-lg-4 mt-md-3 ">
                <div class="card _bordiere bg-light shadow mb-3">
                    <div class="card-body">

                        <h2 class="card-text">EMPLOYEURS</h2>
                        <hr>
                        <p>
                            Trouvez le candidat idéal ?<br>
                            Poster votre offre sur JobEtudiant.fr est un moyen rapide et efficace de recruter le
                            candidat
                            adéquat.
                        </p>
                        <hr>
                        <a href="#" style="color: rgb(4, 123, 141)" class="container accueil_job fw-bold">
                            <p>Proposer un job</p>
                        </a>

                    </div>
                </div>
            </article>
        </section>


        <section class="row mb-3 pt-3 mx-3">
            <div class="card _bordiere bg-light shadow mb-4 ">
                <div class="card-body">

                    <h2 class="card-title">Les dernières annonces</h2>
                    <article class="container mt-3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                        style="color: #022b31;">
                                        DEVELOPPEUR - PHP -
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Sopra Steria, l'un des leaders européens du conseil, des services numériques et
                                        de
                                        l'édition de
                                        logiciels, aide ses clients à mener leur transformation digitale et à obtenir
                                        des
                                        bénéfices
                                        concrets et durables. Il apporte une réponse globale aux enjeux de compétitivité
                                        des
                                        grandes
                                        entreprises et organisations....<a href="">voir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" style="color: #022b31;">
                                        DEVELOPPEUR WEB - FULLSTACK -
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Nous recherchons pour le compte de notre client, spécialiste de la communication
                                        personnalisée
                                        pour les professionnels de proximité, un DÉVELOPPEUR WEB FULLSTACK (F/H) en
                                        CDI....<a href="">voir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree" style="color: #022b31;">
                                        DEVELOPPEUR WEB SYMPHONY - FULL STACK -
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        L'application est une plateforme de gestion pour les métiers du bâtiment.
                                        Utilisée
                                        par plusieurs clients finaux, elle sera à court terme un seul regroupement
                                        multi-sites, et s'oriente à moyen terme vers un partage...<a href="">voir
                                            plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseThree" style="color: #022b31;">
                                        DEVELOPPEUR WEB
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        amara Agency est une agence web. Nous sommes experts certifiés par Shopify.Notre
                                        équipe polyglotte de concepteurs Web, développeurs, designers UX/UI, d’experts
                                        en
                                        stratégies de croissance et marketing, d’experts en SEO et de chefs de projet
                                        qui...<a href="">voir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseThree" style="color: #022b31;">
                                        DEVELOPPEUR WEB JUNIOR
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dans un contexte de forte croissance, nous recherchons notre futur(e)
                                        Developpeur
                                        Web junior en CDI au sein de notre Business Unit Makershop 3D, site e-commerce
                                        spécialisé...<a href="">voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                
            </div>
        </section>

    </main>
    <?php require ('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/main.js"></script>

</body>
</html>