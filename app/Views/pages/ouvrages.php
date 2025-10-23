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
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php static $i = 1; foreach ($medecine_internes as $ouvrage): ?>
                                            <tr>
                                                <td class="text-center"><?= $i; ?></td>
                                                <td><?= esc($ouvrage['titre']); ?></td>
                                                <td><?= esc($ouvrage['domaine']); ?></td>
                                                <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $j = 1; foreach ($Pediatrie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $j; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $j++; endforeach; ?>
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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $k = 1; foreach ($Chirurgie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $k; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $k++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Gynécologie
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable4" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $l = 1; foreach ($Gyneco as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $l; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $l++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Spécialités
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable5" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $m = 1; foreach ($Specialite as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $m; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $m++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Dermatologie
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable6" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $n = 1; foreach ($Dermatologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $n++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Infectiologie
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable7" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $o = 1; foreach ($Infectiologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $o++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Podologie
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable8" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $q = 1; foreach ($Podologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $q++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Rhumatologie
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable9" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $r = 1; foreach ($Rhumatologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $r++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Urologie
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable10" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $s = 1; foreach ($Urologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $s++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Nephrologie
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable11" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $t = 1; foreach ($Nephrologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $t++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Santé Publique
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable12" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $u = 1; foreach ($sapu as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $u++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Neurologie
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable13" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $v = 1; foreach ($Neurologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $v++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Psychiatrie
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable14" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $w = 1; foreach ($Psychiatrie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $w++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Microbiologie_et_bacteriologie
                            </button>
                        </h2>
                        <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable15" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $x = 1; foreach ($Microbiologie_et_bacteriologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $x++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Anthropologie
                            </button>
                        </h2>
                        <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable16" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $y = 1; foreach ($Anthropologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $y++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Anatomie
                            </button>
                        </h2>
                        <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable17" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $z = 1; foreach ($Anatomie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $z++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Physiologie
                            </button>
                        </h2>
                        <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable18" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $a = 1; foreach ($Physiologie as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $a++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Imagerie médicale
                            </button>
                        </h2>
                        <div id="collapse16" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable19" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $b = 1; foreach ($Imagerie_medicale as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $b++; endforeach; ?>
                                    <!-- Ajouter d'autres lignes de support de cours ici -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Science_de_base
                            </button>
                        </h2>
                        <div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table id="myTable20" class="display table table-bordered table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Domaine</th>
                                        <th>Fichier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php static $c = 1; foreach ($Science_de_base as $ouvrage): ?>
                                        <tr>
                                            <td class="text-center"><?= $n; ?></td>
                                            <td><?= esc($ouvrage['titre']); ?></td>
                                            <td><?= esc($ouvrage['domaine']); ?></td>
                                            <td><a href="<?= base_url('admin/uploads/ouvrages/'.$ouvrage['fichier']) ?>" target="_blank"><?= esc($ouvrage['fichier']); ?></a></td>
                                        </tr>
                                        <?php $c++; endforeach; ?>
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