<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $titre ?> &mdash; Médecine UNIKAM </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="Médecine, Médecine Kamina, Université de Kamina, Université Haut-Lomami, Médecine UNIKAM, Médecine RDC, Médecine Haut-Lomami, Faculté de Médecine">
    <meta content="" name="description">
    <meta name="Author" content="Cédric KALENGA">
    <meta name="robots" content="index, all">
    <meta name="url" content="https://www.facmedecineunikam.org">
    <meta name="copyright" content="Faculté de Médecine, UNIKAM">
    <meta name="revisit-after" content="15">
    <meta name="refresh" content="15">
    <meta name="canonical" content="https://www.facmedecineunikam.org">
    <meta name="title" content="Faculté de Médecine, UNIKAM">
    <meta name="owner" content="Doyen : Prof Michel KABAMBA NZAJI">
    <meta name="reply-to" content="contact@facmedecineunikam.org">

     <!-- Locale Timezone Configuration -->
    <meta http-equiv="Content-Language" content="fr">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Site infos schema.org for Google-->

    <meta itemprop="name" content="Faculté de Médecine UNIKAM"/>

    <meta itemprop="image" content="<?= base_url('assets/images/real-1.jpg') ?>"/>

    <meta itemprop="description" content="L'Université de Kamina organise la faculté de Médecine au stantard international avec des Professeurs mondialement reconnus"/>



    <!-- Site infos Open Graph (OG) for Facebook, Pinterest, LinkedIn, Google+-->

    <meta name="og:title" content="Faculté de Médecine, UNIKAM"/>

    <meta name="og:image" content="<?= base_url('assets/images/real-1.jpg') ?>"/>

    <meta name="og:description" content="L'Université de Kamina organise la faculté de Médecine au stantard international avec des Professeurs mondialement reconnus"/>

    <meta name="og:url" content="facmedecineunikam.org"/>

    <meta name="og:type" content="website"/>

    <meta name="og:locale" content="fr_FR"/>



    <!-- Meta Tags World Ranking -->

    <META name="Distribution" content="Global">

    <META name="Rating" content="General">

    <meta name="generator" content="Faculté de Médecine UNIKAM"/>


    <!-- Site infos Open Graph (OG) for Twitter-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Faculté de Médecine UNIKAM"/>
    <meta name="twitter:image:src" content="<?= base_url('assets/images/galerie/real-4.jpg') ?>"/>
    <meta name="twitter:description" content="L'Université de Kamina organise la faculté de Médecine au stantard international avec des Professeurs mondialement reconnus"/>

    <!-- Favicon -->
    <link href="<?= base_url('assets/images/logo/favicon.jpeg') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/fontawesome.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/toastr.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/datatables.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/lightbox/dist/css/lightbox.min.css') ?>" rel="stylesheet">
</head>

<body style="font-family: monospace" class="text-muted">
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">

    <a href="<?= site_url('/') ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <!--h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>FACMED</h2-->
        <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="Logo" class="h-100">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif">
            <a href="<?= site_url('/') ?>" class="nav-item nav-link active">Accueil</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">A propos</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="<?= site_url('about') ?>" class="dropdown-item"><i class="fa fa-book-reader"></i> Brève histoire</a>
                    <a href="<?= site_url('annonces') ?>" class="dropdown-item"><i class="fa fa-bell"></i>  Communication</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ressources</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="<?= site_url('ouvrages') ?>" class="dropdown-item"><i class="fa fa-book-open"></i> Ouvrages</a>
                    <a href="<?= site_url('cours') ?>" class="dropdown-item"><i class="fa fa-book-bookmark"></i>  Cours pdf</a>
                    <a href="<?= site_url('/') ?>" class="dropdown-item"><i class="fa fa-book-reader"></i>  Articles</a>
                </div>
            </div>
            <!--a href="<?= site_url('connexion') ?>" class="nav-item nav-link">Sign In</a-->
            <a href="<?= site_url('contact') ?>" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?= base_url('assets/images/sliders/slider-1.jpg') ?>" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary mb-3 animated slideInDown display-5" style="letter-spacing: 2px;  font-family: monospace!important;">Faculté de Médecine</h5>
                            <h1 class="display-3 text-white animated slideInDown">Former des Cadres médecins</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Elle dispense des enseignements au stantard international pour les futurs Médecins capables aux diplômes reconnus mondialement.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                            <!--a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid h-100" src="<?= base_url('assets/images/sliders/slider-2.jpg') ?>" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary mb-3 animated slideInDown display-5" style="letter-spacing: 2px; font-family: monospace!important;">Faculté de Médecine</h5>
                            <h1 class="display-3 text-white animated slideInDown">Recherche scientifique</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Dans le but d'orienter les étudiants vers des solutions des pays, le cadre idoine de la recherche est à votre portée.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                            <!--a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?= base_url('assets/images/sliders/slider-3.jpg') ?>" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary mb-3 animated slideInDown display-5" style="letter-spacing: 2px; font-family: monospace!important;">Faculté de Médecine</h5>
                            <h1 class="display-3 text-white animated slideInDown">En partenariat avec d'autres Universités</h1>
                            <p class="fs-5 text-white mb-4 pb-2">Se veut hospitalière à tous les étudiants de la République Démocratique du Congo et d'autres pays, pour le développement global.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->