<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire | Fiche de renseignement de l'étudiant</title>
    <meta name="description" content="Fiche formulaire, à remplir pour tous les renseignements néccessaire de l'étudiant">
    <!-- appel cdn reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- appel de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- appel cdn fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- appel dosier css -->
    <link rel="stylesheet" href="./assets/css/styles.css">
    <!-- appel dossier JavaScript -->
    <script async src="./assets/js/script.js"></script>
</head>

<body>
    <!---------------------------------------------------------------Header------------------------------------------------------------->
    <header class="content-header">
        <div class="header-wrapper">
            <figure class="wrapper-logo-manu">
                <a href="#"><img class="logo-novei" src="./assets/img/logo-manu-2.svg"></a>
            </figure>
            <figure class="wrapper-menu-burger">
                <a href="#">
                    <div class="menu-burger"></div>
                </a>
            </figure>
        </div>
    </header>
    <!---------------------------------------------------------------Fin header------------------------------------------------------------->



    <!---------------------------------------------------------------Contenu principal------------------------------------------------------------->
    <main class="site-content">
        <div class="first-page">
            <figure class="background-image">
                <img class="img-bg" src="./assets/img/lehavre-volcan.jpg">
            </figure>
        </div>
        <div class="wrapper-content">
            <h1 class="title-renseignement">
                < Fiche de renseignement de l'étudiant>
            </h1>
            <div class="wrapper-info">
                <div class="wrapper-input">
                    <div class="item-info">
                        <!------------------ First section info perso --------------------->
                        <div class="wrapper-title-first-section">
                            <div class="form-title"></div>
                            <h2 class="title-first-info">Informations personnelles</h2>
                        </div>

                        <div class="content-form">
                            <form action="" method="POST" class="form">
                                <input type="text" name="lastName" class="item-form" placeholder="Nom">
                                <input type="text" name="firstName" class="item-form" placeholder="Prénom">
                                <input type="text" name="adresse" class="item-form" placeholder="Adresse">
                                <input type="text" name="city" class="item-form" placeholder="Code postal et ville">
                                <input type="text" name="phoneFixed" class="item-form" placeholder="Téléphone fixe">
                                <input type="text" name="phoneMobile" class="item-form" placeholder="Téléphone portable">
                                <input type="text" name="email" class="item-form" placeholder="Adresse mail">
                                <input type="text" name="born" class="item-form" placeholder="Date de naissance">
                                <input type="text" name="placeBorn" class="item-form" placeholder="Lieu de naissance">
                                <input type="text" name="department" class="item-form" placeholder="Département de naissance">
                                <input type="text" name="country" class="item-form" placeholder="Pays de naissance">
                                <input type="text" name="nationality" class="item-form" placeholder="Nationalité">
                            </form>
                        </div>
                        <!-- End first section -->
                    </div>
                    <div class="item-info">
                        <!-------------------- Seconde section Last class attended ------------------------>
                        <div class="wrapper-title-first-section">
                            <div class="form-title"></div>
                            <h2 class="title-first-info">Dernière classe suivie</h2>
                        </div>

                        <div class="content-form form-check">
                            <form action="" method="POST" class="form form-check">
                                <div class="btn-radio">
                                    <input type="radio" class="item-radio" name="school" value="Terminal" checked>
                                    <label class="value-radio" for="Termianl">Terminal</label>
                                </div>
                                <div class="btn-radio">
                                    <input type="radio" class="item-radio" name="school" value="sup">
                                    <label class="value-radio" for="sup">1ère ou 2ème année de DEUG, DUT, BTS</label>
                                </div>
                                <div class="btn-radio">
                                    <input type="radio" class="item-radio" name="school" value="prepa">
                                    <label class="value-radio" for="prepa">Classe préparatoire</label>
                                </div>
                            </form>
                            <!-- End seconde section -->
                        </div>
                    </div>
                    <div class="item-info">
                        <!----------------------- Third section Diploma obtained ------------------------->
                        <div class="wrapper-title-first-section">
                            <div class="form-title"></div>
                            <h2 class="title-first-info">Diplôme(s) obtenu(s)</h2>
                        </div>

                        <div class="content-form form-check">
                            <form action="" method="POST" class="form form-check">
                                <div class="btn-checkbox">
                                    <input type="checkbox" class="item-check" name="graduation" value="bac" checked>
                                    <label class="value-check" for="Termianl">Terminal</label>
                                </div>
                                <div class="btn-checkbox">
                                    <input type="checkbox" class="item-check" name="graduation" value="sup">
                                    <label class="value-check" for="sup">1ère ou 2ème année de DEUG, DUT, BTS</label>
                                </div>
                                <div class="btn-checkbox">
                                    <input type="checkbox" class="item-check" name="graduation" value="prepa">
                                    <label class="value-check" for="prepa">Classe préparatoire</label>
                                </div>
                            </form>
                            <!-- End third section -->
                        </div>
                    </div>
                    <div class="item-info">
                        <!----------------------- Fourth section People to notify in case of emergency ----------------------->
                        <div class="wrapper-title-first-section">
                            <div class="form-title"></div>
                            <h2 class="title-first-info">Personnes à prévenir en cas d’urgence</h2>
                        </div>

                        <div class="form-proche form-proche-1">
                            <!-- form person proche -->
                            <div class="wrapper-form-proche">
                                <div class="numberPerson">1</div>
                                <form action="" method="POST" class="form">
                                    <input type="text" name="lastName" class="item-form" placeholder="Nom">
                                    <input type="text" name="firstName" class="item-form" placeholder="Prénom">
                                    <input type="text" name="phoneFixed" class="item-form" placeholder="Téléphone fixe">
                                    <input type="text" name="phoneMobile" class="item-form" placeholder="Téléphone portable">
                                    <input type="text" name="email" class="item-form" placeholder="Adresse mail">
                                </form>
                            </div>

                        </div>

                        <!-- Icon plus for add form person proche -->
                        <div class="wrapper-item-plus">
                            <div class="item-cross">
                                <button class="border-cross"><img class="icon-feather-plus" src="./assets/img/Icon feather-plus.png"></button>
                            </div>
                        </div>

                        <!-- End fourth section -->
                    </div>
                    <div class="item-info">
                        <!------------------------ Fifth section Other informations ------------------------------->
                        <div class="wrapper-title-first-section">
                            <div class="form-title"></div>
                            <h2 class="title-first-info">Autres renseignements que vous jugez utiles</h2>
                        </div>

                        <div class="form-other-thing">
                            <form action="" method="POST">
                                <textarea class="textarea" name="renseignement" placeholder="Ecrivez vos renseignements"></textarea>
                            </form>
                        </div>
                        <!-- End fifth section -->
                    </div>
                </div>
                <!----------------------------- picture illustration --------------------------------->
                <figure class="image-illustration">
                    <img class="img-illust" src="./assets/img/Fichier 1.png">
                </figure>
                <!-- End picture -->
            </div>
            <div class="section-droit-image">
                <!----------------------------- Sixth section Image rights ---------------------------->
                <div class="item-info">
                    <div class="wrapper-title-first-section">
                        <div class="form-title"></div>
                        <h2 class="title-first-info">Droit à l’image
                        </h2>
                    </div>

                    <div class="form-droit-image">
                        <form action="" method="POST">
                            <div class="droit-image">
                                <div class="text-1">
                                    <p>Adresse mail</p><input type="text" class="input-droit-image">
                                </div>
                                <div class="text-2">
                                    Autorise LA MANU / NOVEI FORMATION à utiliser les clichés me représentant dans le cadre de la <br>
                                    formation et de ses activités annexes sur son site internet, ses réseaux sociaux officiels et tout autre <br>
                                    support de la formation.<br>
                                    <br>
                                    <b>Signature</b>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End sixth section -->
            </div>

            <div class="form-mention">
                <!----------------------------- seventh section for button mention ----------------------------->
                <form action="" method="POST" class="form-contition form-check">
                    <div class="btn-radio">
                        <input type="checkbox" class="item-check" name="mention" value="mention" checked>
                        <label class="value-check" for="mention">J’ai lu et je m’engage à respecter toutes les clauses du règlement intérieur qui m’a été fourni dans
                            le Livret d’Accueil
                        </label>
                    </div>
                    <div class="btn-radio">
                        <input type="checkbox" class="item-check" name="mention" value="mention">
                        <label class="value-check" for="mention">J’ai lu et je m’engage à respecter toutes les clauses de la charte informatique qui m’a été fournie
                            dans le Livret d’Accueil</label>
                    </div>
                    <div class="btn-radio">
                        <input type="checkbox" class="item-check" name="mention" value="mention">
                        <label class="value-check" for="mention">J’ai lu et je m’engage à respecter toutes les clauses du protocole sanitaire</label>
                    </div>

                    <div class="btn-form">
                        <button type="submit" name="submit">Envoyer</button>
                    </div>
                </form>
                <!-- End seventh section -->
            </div>

            <!------------------------- Footer ------------------------------>
            <footer class="content-footer">
                <div class="wrapper-footer">
                    <figure class="logo-manu-footer">
                        <img class="logo-footer" src="./assets/img/logo-manu.svg">
                    </figure>
                </div>
            </footer>
            <!-- End footer -->
        </div>

    </main>
    <!---------------------------------------------------------------Fin contenu------------------------------------------------------------->



    <!---------------------------------------------------------------Footer------------------------------------------------------------->


</body>

</html>