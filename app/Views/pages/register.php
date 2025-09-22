<!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title bg-white text-center text-primary px-2">Création compte</h3> <br>
                <!--h1 class="mb-5">Contactez-nous via le formulaire ci-bas</h1-->
                <p class="text-muted" style="font-family: 'Century Gothic'">Veuillez renseigner les champs ci-dessous</p>
                <hr class="text-primary">
                <br>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post" action="<?= site_url('creationCompte') ?>">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" maxlength="25" value="<?= set_value('prenom') ?>" required>
                                    <label for="prenom">Prénom</label>
                                </div>
                                <div class="text-danger mb-md-3" style="font-style: italic; font-size: x-small">
                                    <?php if (isset($validation)): ?>
                                        <?php
                                            if ($validation->hasError('prenom')) {echo $validation->getError('prenom');}
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" maxlength="25" value="<?= set_value('nom') ?>" required>
                                    <label for="prenom">Nom</label>
                                </div>
                                <div class="text-danger mb-md-3" style="font-style: italic; font-size: x-small">
                                    <?php if (isset($validation)): ?>
                                        <?php
                                            if ($validation->hasError('nom')) {echo $validation->getError('nom');}
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="100" value="<?= set_value('email') ?>" required>
                                    <label for="email">Adresse mail</label>
                                </div>
                                <div class="text-danger mb-md-3" style="font-style: italic; font-size: x-small">
                                    <?php if (isset($validation)): ?>
                                        <?php
                                            if ($validation->hasError('email')) {echo $validation->getError('email');}
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Mot de passe" maxlength="100" value="<?= set_value('pwd') ?>" required>
                                    <label for="pwd">Mot de passe</label>
                                </div>
                                <div class="text-danger mb-md-3" style="font-style: italic; font-size: x-small">
                                    <?php if (isset($validation)): ?>
                                        <?php
                                            if ($validation->hasError('pwd')) {echo $validation->getError('pwd');}
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="ConfPwd" name="ConfPwd" placeholder="Mot de passe" maxlength="100" value="<?= set_value('ConfPwd') ?>" required>
                                    <label for="ConfPwd">Confirmation Mot de passe</label>
                                </div>
                                <div class="text-danger mb-md-3" style="font-style: italic; font-size: x-small">
                                    <?php if (isset($validation)): ?>
                                        <?php
                                            if ($validation->hasError('ConfPwd')) {echo $validation->getError('ConfPwd');}
                                        ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success" type="submit">Send Message</button>
                            </div>
                            <hr class="text-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->