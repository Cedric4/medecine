<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title bg-white text-center text-primary px-2">Ouvrages</h3> <br>
            <!--h1 class="mb-5">Contactez-nous via le formulaire ci-bas</h1-->
            <p class="text-muted" style="font-family: 'Century Gothic'">Veuillez vous connecter pour accéder aux ouvrages</p>
            <hr class="text-primary">
            <br>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form method="post" action="<?= site_url('signin') ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email adress</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                        </div>
                        <br>
                        <div class="form-group col-md-6 md-3">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="pwd" class="form-control" id="inputPassword4" placeholder="Password" required>
                        </div>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <a href="<?= site_url('register') ?>" class="btn btn-secondary">Créer un compte</a>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->