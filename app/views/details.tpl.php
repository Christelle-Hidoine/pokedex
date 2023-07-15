<h3>
    Détails de <?= $pokemonNumber->getName()?>
</h3>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= $baseUri ?>img/<?= $pokemonNumber->getNumber() ?>.png" class="img-fluid rounded-start" alt="image d'un pokemon selon son numéro">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">#<?= $pokemonNumber->getNumber() ?> <?= $pokemonNumber->getName() ?></h3>
                        <p class="card-text">Type de pokemon TODO </p>
                            <h5 class="card-title">Statistiques</h5>
                                <div class="card-title">
                                    <h6>PV</h6>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 0%"></div>
                                    </div>
                                </div>
                                <div>
                                <h7>Attaque</h7>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 25%"></div>
                                </div>
                                </div>
                                <div>
                                <h7>Défense</h7>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>
                                </div>
                                <div>
                                <h7>Attaque Spé.</h7>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 75%"></div>
                                </div>
                                </div>
                                <div>
                                <h7>Défense spé.</h7>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                </div>
                                <div>
                                <h7>Vitesse</h7>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                </div>
                </div>
            </div>
        </div>
    </div>