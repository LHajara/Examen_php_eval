<?php require_once "./parts/header.php"?>
<?php require_once "./control.php"?>

<main class="container">

    <h1 class="my-5">
      Sweet Home 
    </h1>

       <?php foreach($myApparts as $myAppart ):?>
           <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= ucwords($myAppart["titre"]) ?></h2>
    </div>
    <div class="">
        <img src="<?= $car["image"] ?>" class="img-fluid" alt="photo de maison sexy">
        <hr>
        <p>adresse: 
          <span><?= ucwords($myAppart["adresse"])?></span>
        </p>
        <p>ville: 
          <span><?= ucwords($myAppart["ville"])?></span>
        </p>
        <p>code postale: 
          <span><?= ucwords($myAppart["cp"])?></span>
        </p>
        <p>surface: 
          <span><?= ucwords($myAppart["surface"])?></span>
        </p>
        <p>prix: 
          <span><?= ucwords($myAppart["prix"])?></span>
        </p>
        <p>type: 
          <span><?= ucwords($myAppart["type"])?></span>
        </p>

        <p>description: 
        <?php if ($myAppart["description"]): ?>
          <span><?= ucwords($myAppart["description"])?></span>
          <?php else: ?>
                    <span>""</span>
                    <?php endif; ?>
        </p>

        <p>Réserver maintenant !</p>
        <button  class="btn btn-primary ">Réserver</button>
    </div>
</div>
<hr>

       <?php endforeach;?>

    </div>

<div class="card text-center shadow my-3">




    


<?php require_once "./parts/footer.php"?>

