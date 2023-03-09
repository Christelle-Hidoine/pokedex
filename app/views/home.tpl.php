<?php
/** @var Pokemon $pokemonsList */
$pokemonsList = $viewData['pokemon'];
?>

<div class="row row-cols-1 row-cols-md-3 g-4 container-card">
  <?php
    foreach ($pokemonsList as $pokemonElement) {
        ?>
        <div class="col text-center">
          <div class="card h-100 pokemon">
            <img src="<?= $baseUri ?>img/<?= $pokemonElement->getNumber() ?>.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> #<?= $pokemonElement->getNumber() ?>  <?= $pokemonElement->getName() ?></h5>
            </div>
          </div>
        </div>  
    <?php
    }
  ?>
</div>