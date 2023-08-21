<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Les Offres</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Assets/css/main.css" />
    <link rel="stylesheet" href="Assets/css/offre.css" />
</head>

<body>
    <?php require('header.php');  ?>
    <main class=" container text-center">
        <section class="container  recherche m-0 mt-3 row ">
            <div class=" card bg-light shadow mb-3 mt-3 _bordiere">
                <div class="card-body ">
                    <form class="container">
                        <h1 class="card-title ">RECHERCHE</h1>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 m-2">

                                <label for="codePostal" class="form-label fw-bold ">Par code postal</label>
                                <input id="codePostal" class="form-control form-control-sm form1 form_postal" list="datalistOptions" maxlength="5" placeholder="Code Postal" onkeyup="Postal()" aria-label=".form-control-sm example">
                                <datalist id="datalistOptions">
                                    <option value="72001 Aigné">
                                    <option value="72010 Asnières-sur-Vègre">
                                    <option value="72020 Avezé">
                                    <option value="72031 Beillé">
                                    <option value="72040 La Bossego">
                                </datalist>
                            </div>
                            <div class="col-lg-3">
                                <label for="secteur" class="form-label2 mb-2 mt-2 fw-bold">Par secteur
                                    d'activité</label>
                                <input id="secteur" class="form-control form-control-sm" list="datalistOptions2" placeholder="Secteur">
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
                            </div>
                            <div class="col-lg-4">
                                <label class="mt-2 mb-2 fw-bold">Recherche précise par mot</label>
                                <input id="rechercheMot" class="form-control form-control-sm mb-3" type="text" placeholder="Recherche par Mots-clés" aria-label=".form-control-sm example">
                            </div>
                        </div>
                        <a href="#" class="btn btn-info mb-2 fw-bold" onclick="rechercher()" id="recherche">Recherche</a>

                    </form>
                </div>
            </div>
        </section>
        <section class="offres container pt-3 m-0 mt-1 row">
            <div class="card bg-light shadow mb-3 _bordiere">
                <div class="card-body ">

                    <h2 class="card-title">LES OFFRES</h2>
                    <hr>
                    <article class="container mb-3">

                        <h5>Développeur Web (H/F)</h5>

                        <p>
                            En bref : L'entreprise S&YOU PARIS recrute un(e) Développeur
                            Web (H/F) en CDI à Le Mans. Le candidat idéal ?
                            Expérience de 1 - 2 ans et
                            des compétences en / html / css. Offre publiée le 02/06/2021.
                            Descriptif de poste : Descriptif de poste : Pour un groupe
                            français spécialisé dans la conception et la réalisation de
                            solutions sur-mesure de transport et de logistique à travers
                            l'Europe.
                            <br>
                            Vos missions : Rattaché à un Chef de Projet Réalisation de
                            l'analyse technique Développement des applications Rédaction
                            des lignes de code Application des règles de navigation, créer
                            des liens entre les pages Développer les interfaces Corriger
                            et optimiser les fonctionnalités Documenter les applications
                            pour les développements ultérieurs Test et écriture des
                            corrections nécessaires Maintenance corrective et évolutive
                            des applications
                        </p>


                        <div>
                            <a href="https://fr.indeed.com/viewjob?jk=286d393354ffb8a0&tk=1f8cvpeqtsu0v800&from=serp&vjs=3" class="btn btn-info" target="_blank">Voir l'offre</a>
                        </div>

                    </article>
                    <article class="container mb-3">

                        <h5>Développeur C# H/F</h5>

                        <p>
                            Notre client, est une société experte dans le secteur du
                            semiconducteur mais elle intervient également dans l’aéronautique,
                            l’advanced manufacturing, les machines d’essais ou le secteur médical.
                            Elle fournit des solutions informatiques et robotiques pour les machines
                            de production qui équipent les usines des grandes entreprises industrielles
                            au niveau mondial.
                            Forte d’une croissance moyenne de 16% depuis sa création en 2010, elle
                            accompagne ses clients de la conception des machines jusqu’à leur connexion
                            aux systèmes IT de pilotage de la production.
                        </p>

                        <div>
                            <a href="#" class="btn btn-info" target="_blank">Voir l'offre</a>
                        </div>

                    </article>
                    <article class="container">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Lorem, ipsum.
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Assumenda optio, dolore modi quidem doloremque
                                            <br>
                                            iure similique hic quisquam voluptates harum inventore
                                            id, dignissimos, deserunt quo ducimus
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Développeur Web (H/F)
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Bonjour, Nous sommes Doctoshop.com, nouveau site de
                                            pharmacie et parapharmacie française en ligne (beauté,
                                            santé, sport…) et nous sommes à la recherche d’un
                                            développeur web pour la refonte de notre site
                                            e-commerce. Si tu as envie de participer au
                                            développement d’un projet jeune et dynamique alors
                                            nous serons ravis de t’accueillir et te montrer tout
                                            ce qu’il se passe derrière un e-shop de pharmacie.
                                            <br>
                                            Tes missions : Refonte du site e-commerce (sous
                                            Prestashop) avec l'aide d'un webdesigner Analyse des
                                            besoins en module et ergonomie Développement web
                                            Testing et sourcing Participer aux choix techniques et
                                            à la réalisation des évolutions Maintenance
                                            préventive, curative et référencement
                                        </p>

                                        <div>
                                            <a href="https://fr.indeed.com/voir-emploi?cmp=Doctoshop&t=D%C3%A9veloppeur+Web&jk=25f2c174ad09a54f&q=D%C3%A9veloppeur+Web&vjs=3" target="_blank" class="btn btn-info">Voir l'offre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Lorem, ipsum1
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Assumenda optio, dolore modi quidem doloremque
                                            <br>
                                            iure similique hic quisquam voluptates harum inventore
                                            id, dignissimos, deserunt quo ducimus
                                        </p>

                                        <div>
                                            <a href="#" class="btn btn-info" target="_blank">Voir l'offre</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed fs-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Lorem, ipsum2
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Assumenda optio, dolore modi quidem doloremque
                                            <br>
                                            iure similique hic quisquam voluptates harum inventore
                                            id, dignissimos, deserunt quo ducimus
                                        </p>

                                        <div>
                                            <a href="#" class="btn btn-info" target="_blank">Voir l'offre</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

    </main>
    <?php require('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assets/js/main.js"></script>

</body>

</html>