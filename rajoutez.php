<?php require_once "./parts/header.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>immo-lation</title>
</head>

<body>
    <h2 class="my-5 text-center"> Ajoutez votre logement</h2>

    <form class="bg-primary shadow p-3 form-group col-6 m-auto border" action="createValid.php" method="post">
        <input type="text" class="form-control my-2" name="titre" placeholder="titre">
        <input type="text" class="form-control my-2" name="adresse" placeholder="votre adresse">
        <input type="text" class="form-control my-2" name="ville" placeholder="ville">
        <input type="number" class="form-control my-2" name="cp" placeholder="code Postale">
        <input type="number" class="form-control my-2" name="surface" placeholder="la surface">
        <input type="number" class="form-control my-2" name="prix" placeholder="prix">
        <input type="number" class="form-control my-2" name="type" placeholder="type">
        <!-- <select id="monselect" name="type" class="form-control my-2">
            <option value="valeur1">Location</option>
            <option value="valeur2" selected>Vente</option>
            <option value="valeur3">Vacances</option>
        </select> -->
        <input type="file" class="form-control my-2" name="photo" placeholder="photo">
        <textarea type="text" class="form-control my-2" name="description" placeholder="un commentaire..."></textarea>
        <br>
        <button type="submit" class="m-auto my-2 d-block btn btn-success" >Ajouter</button>
    </form>





    <?php require_once "./parts/footer.php" ?>
</body>

</html>