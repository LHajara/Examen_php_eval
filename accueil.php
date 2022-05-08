<?php require_once "./parts/header.php" ?>
<?php require_once "./control.php" ?>
<link rel="stylesheet" href="./css/css.css">
<meta charset="UTF-8">


</head>

<body>

    <main class="container ">
        <h1 class="my-5 flex ">
            Immo-Lation
        </h1>

        <div class="row flex-lg-row flex-xl-row flex-column">

            <?php foreach ($myApparts as $myAppart) : ?>
                <div class="card text-center shadow my-6 dimension">
                    <div class="card-header bg-dark text-white ">
                        <h2 class="card-title"><?= ucwords($myAppart["titre"]) ?></h2>
                    </div>
                    <div class="card-body">
                        <img src="<?= $myAppart["photo"] ?>" class="img-fluid" alt="photo de maison sexy">
                        <hr>
                        <p>Adresse:
                            <span><?= ucwords($myAppart["adresse"]) ?></span>
                        </p>
                        <p>Ville:
                            <span><?= ucwords($myAppart["ville"]) ?></span>
                        </p>
                        <p>Code postale:
                            <span><?= ucwords($myAppart["cp"]) ?></span>
                        </p>
                        <p>Surface:
                            <span><?= ucwords($myAppart["surface"]) ?></span>
                        </p>
                        <p>prix:
                            <span><?= ucwords($myAppart["prix"]) ?>€ </span>
                        </p>
                        <p>Type:
                            <span><?= ucwords($myAppart["type"]) ?></span>
                        </p>

                        <p>Description:
                            <?php if ($myAppart["description"]) : ?>
                                <span><?= ($myAppart["description"]) ?></span>
                            <?php else : ?>
                                <span>""</span>
                            <?php endif; ?>
                        </p>

                        <p>Réserver maintenant !</p>
                        <button class="btn btn-primary ">Réserver</button>
                    </div>
                </div>
                <?php endforeach; ?>
        </div>
        
    

    </main>

    <?php require_once "./parts/footer.php" ?>
</body>

</html>