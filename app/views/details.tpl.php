<?php

    if (!empty($pokemonNumber)) { ?>

        <div class="container fluid">
            <h2 class="text-white text-center my-4 fw-bold">
                Détails de <?= $pokemonNumber->getName()?>
            </h2>
            <div class="d-flex flex-wrap justify-content-center">
                <img src="<?= $baseUri ?>img/<?= $pokemonNumber->getNumber() ?>.png" class="img-fluid rounded-start mx-3 mb-3" style="object-fit: contain;" alt="image du pokemon <?= $pokemonNumber->getName() ?>">
                <div class="card mb-3 pokemon" style="width: 50em">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">#<?= $pokemonNumber->getNumber() ?> <?= $pokemonNumber->getName() ?></h3>
                            <?php foreach ($types as $type): ?>
                                <a href="<?= $router->generate('type-list', ["id" => $type->getId()]) ?>"><span class="badge p-2 me-2 my-3 fw-light" style="background-color: #<?= $type->getColor() ?>">
                                    <?= $type->getName() ?>
                                </span></a>
                            <?php endforeach; ?>
                            <h4 class="card-title fw-bold">Statistiques</h5>
                            <div class="statistic row">
                                <div class="card-title progress-card col-sm-12">
                                    <h6 class="">PV</h6>
                                    <div class="number"><?= $pokemonNumber->getHp() ?></div>
                                    <div class="progress flex-fill" role="progressbar" aria-label="pv" aria-valuenow="<?= $pokemonNumber->getHp() ?>" aria-valuemin="0" aria-valuemax="255">
                                        <div class="progress-bar" style="width: calc((<?= $pokemonNumber->getHp() ?> / 255) * 100%)"></div>
                                    </div>
                                </div>
                                <div class="card-title progress-card col-sm-12">
                                    <h6>Attaque</h6>
                                    <div class="number"><?= $pokemonNumber->getAttack() ?></div>
                                    <div class="progress flex-fill" role="progressbar" aria-label="attack" aria-valuenow="<?= $pokemonNumber->getAttack() ?>" aria-valuemin="0" aria-valuemax="255">
                                        <div class="progress-bar" style="width: calc((<?= $pokemonNumber->getAttack() ?> / 255) * 100%)"></div>
                                    </div>
                                </div>
                                <div class="card-title progress-card col-sm-12">
                                    <h6>Défense</h6>
                                    <div class="number"><?= $pokemonNumber->getDefense() ?></div>
                                    <div class="progress flex-fill" role="progressbar" aria-label="defense" aria-valuenow="<?= $pokemonNumber->getDefense() ?>" aria-valuemin="0" aria-valuemax="255">
                                        <div class="progress-bar" style="width: calc((<?= $pokemonNumber->getDefense() ?> / 255) * 100%)"></div>
                                    </div>
                                </div>
                                <div class="card-title progress-card col-sm-12">
                                    <h6>Attaque Spé.</h6>
                                    <div class="number"><?= $pokemonNumber->getSpeAttack() ?></div>
                                    <div class="progress flex-fill" role="progressbar" aria-label="attack-spe" aria-valuenow="<?= $pokemonNumber->getSpeAttack() ?>" aria-valuemin="0" aria-valuemax="255">
                                        <div class="progress-bar" style="width: calc((<?= $pokemonNumber->getSpeAttack() ?> / 255) * 100%)"></div>
                                    </div>
                                </div>
                                <div class="card-title progress-card col-sm-12">
                                    <h6>Défense spé.</h6>
                                    <div class="number"><?= $pokemonNumber->getSpeDefense() ?></div>
                                    <div class="progress flex-fill" role="progressbar" aria-label="defense-spe" aria-valuenow="<?= $pokemonNumber->getSpeDefense() ?>" aria-valuemin="0" aria-valuemax="255">
                                        <div class="progress-bar" style="width: calc((<?= $pokemonNumber->getSpeDefense()?> / 255) * 100%)"></div>
                                    </div>
                                </div>
                                <div class="card-title progress-card col-sm-12" style="width: 100%">
                                    <h6>Vitesse</h6>
                                    <div class="number ms-10"><?= $pokemonNumber->getSpeed() ?></div>
                                    <div class="progress flex-fill" role="progressbar" aria-label="speed" aria-valuenow="<?= $pokemonNumber->getSpeed() ?>" aria-valuemin="0" aria-valuemax="255">
                                        <div class="progress-bar" style="width: calc((<?= $pokemonNumber->getSpeed() ?> / 255) * 100%)"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    else { ?>
    
        <div class="row my-5" style="width: 100%;">
            <div class="col-lg-12 col-sm-12 text-center">
                <h2>Ce pokémon n'est pas encore répertorié</h2>
            </div>
        </div>

    <?php
    }