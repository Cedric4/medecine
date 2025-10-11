<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $titre ?> &mdash; Médecine UNIKAM </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="<?= base_url('assets/lightbox/dist/lightbox.min.css') ?>" rel="stylesheet">
</head>

<body  style="font-family: monospace" class="text-muted">
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
        <div class="navbar-nav ms-auto p-4 p-lg-0" style="font-family: "Helvetica Neue", Helvetica, Arial, sans-serif">
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
                <a href="<?= site_url('articles') ?>" class="dropdown-item"><i class="fa fa-book-reader"></i>  Articles</a>
            </div>
        </div>
        <!--a href="<?= site_url('connexion') ?>" class="nav-item nav-link">Sign In</a-->
        <a href="<?= site_url('contact') ?>" class="nav-item nav-link">Contact</a>
    </div>
    </div>
</nav>
<!-- Navbar End -->

