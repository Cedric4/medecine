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
                                <table id="myTable1" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                        <th>Date ajout</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php static $i = 1; foreach ($medecine_internes as $ouvrage): ?>
                                            <tr>
                                                <td class="text-center"><?= $i; ?></td>
                                                <td><?= esc($ouvrage['titre']); ?></td>
                                                <td><?= esc($ouvrage['domaine']); ?></td>
                                                <td><a href="<?= base_url('uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                                <td><?= date('d/m/Y', strtotime($ouvrage['date_ajout'])); ?></td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm" id="del_support" value="<?= esc($ouvrage['id']); ?>" title="Supprimer le support de cours"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <?php $i++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
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
                                <table id="myTable2" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                        <th>Date ajout</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $i = 1; foreach ($Pediatrie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                            <td><?= date('d/m/Y', strtotime($ouvrage['date_ajout'])); ?></td>
                                            <td>
                                                <button class="btn btn-danger btn-sm" id="del_support" value="<?= esc($ouvrage['id']); ?>" title="Supprimer le support de cours"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
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
                                <table id="myTable3" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                        <th>Date ajout</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $i = 1; foreach ($Chirurgie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                            <td><?= date('d/m/Y', strtotime($ouvrage['date_ajout'])); ?></td>
                                            <td>
                                                <button class="btn btn-danger btn-sm" id="del_support" value="<?= esc($ouvrage['id']); ?>" title="Supprimer le support de cours"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Gynécologie
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable4" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                        <th>Date ajout</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $i = 1; foreach ($Gyneco as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                            <td><?= date('d/m/Y', strtotime($ouvrage['date_ajout'])); ?></td>
                                            <td>
                                                <button class="btn btn-danger btn-sm" id="del_support" value="<?= esc($ouvrage['id']); ?>" title="Supprimer le support de cours"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Spécialités
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable3" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                        <th>Date ajout</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $i = 1; foreach ($Specialite as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $i; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                            <td><?= date('d/m/Y', strtotime($ouvrage['date_ajout'])); ?></td>
                                            <td>
                                                <button class="btn btn-danger btn-sm" id="del_support" value="<?= esc($ouvrage['id']); ?>" title="Supprimer le support de cours"><i class="fas fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->