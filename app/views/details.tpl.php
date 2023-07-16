<div class="container fluid">
    <h2 class="text-white text-center my-4 fw-bold">
        Détails de <?= $pokemonNumber->getName()?>
    </h2>
    <div class="d-flex flex-wrap justify-content-center">
        <img src="<?= $baseUri ?>img/<?= $pokemonNumber->getNumber() ?>.png" class="img-fluid rounded-start" style="object-fit: contain;" alt="image du pokemon <?= $pokemonNumber->getName() ?>">
        <div class="card mb-3 pokemon" style="width: 50em">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="card-title fw-bold">#<?= $pokemonNumber->getNumber() ?> <?= $pokemonNumber->getName() ?></h3>
                    <p class="card-text">Type de pokemon TODO</p>
                    <h4 class="card-title">Statistiques</h5>
                    <div class="statistic row">
                        <div class="card-title progress-card d-flex align-items-center col-md-12">
                            <h6 class="">PV</h6>
                            <div class="number">numero</div>
                            <div class="progress flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="card-title progress-card d-flex align-items-center col-md-8">
                            <h6 class="me-8">Attaque</h6>
                            <div class="number me-8">numero</div>
                            <div class="progress flex-fill me-8" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="card-title progress-card d-flex align-items-center col-md-12">
                            <h6>Défense</h6>
                            <div class="number">numero</div>
                            <div class="progress flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                        </div>
                        <div class="card-title progress-card d-flex align-items-center col-md-12">
                            <h6>Attaque Spé.</h6>
                            <div class="number">numero</div>
                            <div class="progress flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="card-title progress-card d-flex align-items-center col-md-12">
                            <h6>Défense spé.</h6>
                            <div class="number">numero</div>
                            <div class="progress flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="card-title progress-card d-flex align-items-center col-md-12">
                            <h6>Vitesse</h6>
                            <div class="number">numero</div>
                            <div class="progress flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="<?= $router->generate('home') ?>" style="color: var(--bs-gray-500)">Revenir à la liste</a>
    </div>
</div>