<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title bg-white text-center text-primary px-2">Ouvrages</h3> <br>
            <!--h1 class="mb-5">Contactez-nous via le formulaire ci-bas</h1-->
            <p class="text-muted" style="font-family: 'Century Gothic'">Bonjour <strong><?php $session = session(); echo $_SESSION['user']['prenom']. ' '. mb_strtoupper($_SESSION['user']['nom']) ?></strong>, trouver ci-dessous différents contenus en Médecine.</p><a href="<?= site_url('logout') ?>" class="btn btn-danger"> <i class="fas fa-power-off"></i> Déconnexion</a>
            <hr class="text-primary">
            <br>
        </div>
        <div class="row g-4">
            <div class="col-lg-12 table-responsive">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Médecine Interne
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body table-responsive">
                                <table class="table table-bordered table-sm table-striped" id="myTable1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Intitulé livre (Description)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php static $i = 1; foreach($all_cours as $item): ?>
                                                <tr>
                                                    <td><?= $i ?></td>
                                                    <td><a href="<?= base_url().'uploads/cours/'.$item['fichier'] ?>"><?= $item['titre'] ?></a></td>
                                                    <td><a href="<?= base_url().'uploads/cours/'.$item['fichier'] ?>" class="btn btn-success btn-sm" download=""><i class="fas fa-download"></i>  Download</a></td>
                                                </tr>
                                            <?php $i++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Pédiatrie
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Chirurgie
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->