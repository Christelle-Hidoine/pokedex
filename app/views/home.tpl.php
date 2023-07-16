<div class="row row-cols-1 row-cols-md-3 g-4 container-card">
  <?php

    if (isset($pokemon)) {
      foreach ($pokemon as $pokemonElement) {
        ?>
        <div class="col text-center">
          <a href="<?= $router->generate('details', ["number" => $pokemonElement->getNumber()]) ?>" rel="noopener noreferrer">
            <div class="card h-100 pokemon">
              <img src="img/<?= $pokemonElement->getNumber() ?>.png" class="card-img-top" alt="image d'un pokemon">
              <div class="card-body">
                <h5 class="card-title"> #<?= $pokemonElement->getNumber() ?>  <?= $pokemonElement->getPokemonName() ?></h5>
              </div>
            </div>
          </a>
        </div>  
      <?php
      }
    } 
    else {
      foreach ($pokemonByType as $pokemonElement) {
        ?>
        <div class="col text-center">
          <a href="<?= $router->generate('details', ["number" => $pokemonElement->getNumber()]) ?>" target="_blank" rel="noopener noreferrer">
            <div class="card h-100 pokemon" style ="background-color: #<?= $pokemonElement->getColor() ?>">
              <img src="../img/<?= $pokemonElement->getNumber() ?>.png" class="card-img-top" alt="image d'un pokemon">
              <div class="card-body">
                <h5 class="card-title text-dark"> #<?= $pokemonElement->getNumber() ?>  <?= $pokemonElement->getPokemonName() ?></h5>
              </div>
            </div>
          </a>
        </div>  
      <?php
      }
    }
  ?>
</div>