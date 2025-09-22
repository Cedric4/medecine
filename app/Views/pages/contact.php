<!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="section-title bg-white text-center text-primary px-2">Nous contacter</h3> <br>
                <!--h1 class="mb-5">Contactez-nous via le formulaire ci-bas</h1-->
                <p class="text-muted" style="font-family: 'Century Gothic'">Contactez-nous via le formulaire ci-bas pour tout renseignement</p>
                <hr class="text-primary">
                <br>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0">
                    </iframe>
                </div>
                <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post" action="<?= site_url('posts') ?>">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" maxlength="25" value="<?= set_value('prenom') ?>" required>
                                    <label for="prenom">Prénom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="100" value="<?= set_value('email') ?>" required>
                                    <label for="email">Adresse mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="sujet" placeholder="Subject" maxlength="100" value="<?= set_value('sujet') ?>" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                    <label for="message">Message</label>
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