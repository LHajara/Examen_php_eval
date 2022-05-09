<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immo-Lation</title>
</head>
<body>
    
</body>
</html>
<h1 class ="p-4 my-5 bg-dark text-danger text-center"> Bienvenue sur Immo-Lation</h1>


    
<main> 
        <table class="table table-hover text-center">
            <thead class="bg-info">
                <tr>
                    <th scope="col">id_logement</th>
                    <th scope="col">title</th>
                    <th scope="col">adresse</th>
                    <th scope="col">ville</th>
                    <th scope="col">cp</th>
                    <th scope="col">surface</th>
                    <th scope="col">prix</th>
                    <th scope="col">type</th>
                    <th scope="col">photo</th>
                    <th scope="col">description</th>
                    <th scope="col">modifier</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($myApparts as $myAppart) : ?>
                    <tr class="table">
                        <td> <?= $myAppart['id_logement'] ?></td>
                        <td> <?= $myAppart['title'] ?></td>
                        <td> <?= $myAppart['adresse'] ?></td>
                        <td> <?= $myAppart['ville'] ?></td>
                        <td> <?= $myAppart['cp'] ?></td>
                        <td> <?= $myAppart['surface'] ?></td>
                        <td> <?= $myAppart['prix'] ?> &euro;</td>
                        <td> <?= $myAppart['type'] ?> </td>
                        <td> <img src= "<?= $myAppart['photo'] ?>"alt=""></td>
                        <td> <?= $myAppart['description'] ?></td>
                        <td>
                        <form action="delete.php" method="post" 
                            onSubmit="return confirm('Êtes-vous certain ?')">
                            <input hidden type="text" name="id_logement" value="<?= $myAppart['id_logement'] ?>">
                        <button class="btn" type="submit">X</button>
                        </form>
                        </td>
                        <td>
                        <form action="edit.php" method="post">
                            <input hidden type="text" name="appartID" value="<?= $myAppart['id_logement'] ?>">
                        <button class="btn" type="submit">Modifier</button>
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