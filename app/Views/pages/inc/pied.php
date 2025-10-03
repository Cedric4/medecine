<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Liens rapides</h4>
                <a class="btn btn-link" href="<?= site_url('about') ?>">A propos</a>
                <a class="btn btn-link" href="<?= site_url('contact') ?>">Nous contacter</a>
                <a class="btn btn-link" href="<?= site_url('/') ?>">Termes & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contacts</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>11 Av. Malunga, Kamina, RDC</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="https://wa.me/243978467432">+243 978 467 432</a></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="https://wa.me/243993780591">+243 993 780 591</a></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href="mailto:contact@facmedecineunikam.org">contact@facmedecineunikam.org</a></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Galerie</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <a href="<?= base_url('assets/images/galerie/real-1.jpg') ?>" data-lightbox="real-1.jpg" data-title="Salle Labo Médecine UNIKAM">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/images/galerie/real-1.jpg') ?>" alt="" class="img-thumbnail">
                        </a>       
                    </div>
                    <div class="col-4">
                        <a href="<?= base_url('assets/images/galerie/real-2.jpg') ?>" data-lightbox="real-2.jpg" data-title="Salle Labo Médecine UNIKAM">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/images/galerie/real-2.jpg') ?>" alt="" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="<?= base_url('assets/images/galerie/real-3.jpg') ?>" data-lightbox="real-3.jpg" data-title="Cliniques Universitaires">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/images/galerie/real-3.jpg') ?>" alt="" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="<?= base_url('assets/images/galerie/real-4.jpg') ?>" data-lightbox="real-4.jpg" data-title="Visite de la MINESU à l'UNIKAM">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/images/galerie/real-4.jpg') ?>" alt="" class="img-thumbnail">
                        </a> 
                    </div>
                    <div class="col-4">
                        <a href="<?= base_url('assets/images/galerie/real-5.jpg') ?>" data-lightbox="real-5.jpg">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/images/galerie/real-5.jpg') ?>" alt="" class="img-thumbnail">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="<?= base_url('assets/images/galerie/real-6.jpg') ?>" data-lightbox="real-6.jpg" data-title="Salle Labo Médecine UNIKAM">
                            <img class="img-fluid bg-light p-1" src="<?= base_url('assets/images/galerie/real-6.jpg') ?>" alt="" class="img-thumbnail">
                        </a> 
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p>Renseigner une adresse mail valide</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form action="" method="post">
                        <div class="form-group">
                            <input class="form-control border-0 w-100" type="text" placeholder="Email" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start">
                    <p class="text-muted offset-4">Copyright &copy; <?= date('Y') ?> UNIKAM &mdash; Faculté de Médecine</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/js/easing.min.js') ?>"></script>
<script src="<?= base_url('assets/js/all.min.js') ?>"></script>
<script src="<?= base_url('assets/js/waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('assets/js/toastr.min.js') ?>"></script><script src="<?= base_url('assets/DataTables/datatables.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/datatables.min.js'); ?>"></script>
<script src="<?= base_url('assets/lightbox/dist/js/lightbox.min.js'); ?>"></script>

<!-- Template Javascript -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<script>
    $(document).ready( function () {
        $('#myTable1').DataTable();
    } );
</script>
<script>
    $(document).ready(function(){
        <?php if (session()->get('success') != null){?>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["success"]("Message reçu avec succès !")
        <?php } ?>
    });
</script>
<script>
    $(document).ready(function(){
        <?php if (session()->get('echec_mail_visit') != null){?>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["error"]("Adresse mail inexistante", "Echec de connexion")
        <?php } ?>
    });
</script>
<script>
    $(document).ready(function(){
        <?php if (session()->get('faild_pwd_visit') != null){?>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["error"]("Mot de passe incorrect", "Echec de connexion")
        <?php } ?>
    });
</script>
<script>
    $(document).ready(function(){
        <?php if (session()->get('success_login_visit') != null){?>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["success"]("Bienvenue <?php $session = session(); echo $_SESSION['user']['prenom']. ' '. mb_strtoupper($_SESSION['user']['nom']); }  ?>", "Connexion réussie")
    });
</script>
<script>
    $(document).ready(function(){
        <?php if (session()->get('success_register') != null){?>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["success"]("Compte créé avec succès, veuillez vous connecter maintenant")
         <?php } ?>
    });
</script>
</body>

</html>