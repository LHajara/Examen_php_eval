<link rel="stylesheet" href="./css/css.css">
<?php require_once "./parts/header.php" ?>
<?php require_once "./control.php" ?>



<h1 class ="p-4 my-5 bg-dark text-danger text-center"> Bienvenue sur Immo-Lation</h1>


    
<main> 
        <table class=" mx-2 table table-hover text-center structure ">
            <thead class="bg-info ">
                <tr>
                    <th scope="col"> id_logement</th>
                    <th scope="col"> titre</th>
                    <th scope="col"> adresse</th>
                    <th scope="col"> ville</th>
                    <th scope="col"> cp</th>
                    <th scope="col"> surface</th>
                    <th scope="col"> prix</th>
                    <th scope="col"> type</th>
                    <th scope="col"> photo</th>
                    <th scope="col"> description</th>
                    <th scope="col"> modifier</th>
                    <th scope="col"> supprimer</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($myApparts as $myAppart) : ?>
                    <tr class="table p-3 form-group col-6 m-auto border  ">
                        <td> <?= $myAppart['id_logement'] ?></td>
                        <td> <?= $myAppart['titre'] ?></td>
                        <td> <?= $myAppart['adresse'] ?></td>
                        <td> <?= $myAppart['ville'] ?></td>
                        <td> <?= $myAppart['cp'] ?></td>
                        <td> <?= $myAppart['surface'] ?></td>
                        <td> <?= $myAppart['prix'] ?> &euro;</td>
                        <td> <?= $myAppart['type'] ?> </td>
                        <td> <img src= "<?= $myAppart['photo'] ?>"alt="" class="dimension2"></td>
                        <td> <?= $myAppart['description'] ?></td>
                         <td>
                        <form action="delete.php" method="post">
                            <input hidden type="text" name="appartID" value="<?= $myAppart['id_logement'] ?>">
                        <button class="btn" type="submit">update</button>
                        </form>
                        </td>
                        <td>
                        <form action="delete.php" method="post" 
                            onSubmit="return confirm('Êtes-vous certain ?')">
                            <input hidden type="text" name="id_logement" value="<?= $myAppart['id_logement'] ?>">
                        <button class="btn" type="submit">X</button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="rajoutez.php" class="btn btn-info d-block">Ajouter un logement</a>
    </main>

</body>
</html>